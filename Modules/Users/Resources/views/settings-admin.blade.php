@extends('site1.layouts.app')

@section('in-head')
  <link rel="stylesheet" href="{{ asset('assets/js/croppie/croppie.min.css') }}">
@stop

@section('content')
  <section class="padding-y-md">
    <div class="container max-width-lg">
      <div class="grid gap-md@md">
        <div class="col-7@md offset-4@md">
          <h1 class="margin-bottom-sm">Account Info</h1>
          @if($alert = session()->get('alert'))
            <div class="alert alert--is-visible js-alert margin-bottom-lg {{ $alert['class'] }}" role="alert">
              <div class="flex items-center justify-between">
                <div class="flex items-center">
                  <svg aria-hidden="true" class="icon margin-right-xxxs" viewBox="0 0 32 32" ><title>info icon</title><g><path d="M16,0C7.178,0,0,7.178,0,16s7.178,16,16,16s16-7.178,16-16S24.822,0,16,0z M18,7c1.105,0,2,0.895,2,2 s-0.895,2-2,2s-2-0.895-2-2S16.895,7,18,7z M19.763,24.046C17.944,24.762,17.413,25,16.245,25c-0.954,0-1.696-0.233-2.225-0.698 c-1.045-0.92-0.869-2.248-0.542-3.608l0.984-3.483c0.19-0.717,0.575-2.182,0.036-2.696c-0.539-0.514-1.794-0.189-2.524,0.083 l0.263-1.073c1.054-0.429,2.386-0.954,3.523-0.954c1.71,0,2.961,0.855,2.961,2.469c0,0.151-0.018,0.417-0.053,0.799 c-0.066,0.701-0.086,0.655-1.178,4.521c-0.122,0.425-0.311,1.328-0.311,1.765c0,1.683,1.957,1.267,2.847,0.847L19.763,24.046z"></path></g></svg>
                  <div>
                    {!! $alert['message'] !!}
                  </div>
                </div>

                <button class="reset alert__close-btn js-alert__close-btn">
                  <svg class="icon" viewBox="0 0 24 24"><title>Close alert</title><g stroke-linecap="square" stroke-linejoin="miter" stroke-width="3" stroke="currentColor" fill="none" stroke-miterlimit="10"><line x1="19" y1="5" x2="5" y2="19"></line><line fill="none" x1="19" y1="19" x2="5" y2="5"></line></g></svg>
                </button>
              </div>
            </div><!-- /.alert -->
          @endif

          {{-- COVER PHOTO --}}
          @include('users::partials.cover-photo-component')
          @csrf
          <input type="hidden" name="delete_avatar" />
          <div class="author margin-bottom-md flex items-center">
            <a href="#0" class="author__img-wrapper bg-black bg-opacity-50%">
              @if($user->avatar)
                <img src="{{ $user->getAvatar() }}" alt="Author picture">
              @else
                <img alt="Author picture" id="settings-avatar" style="display: none;">
              @endif
            </a>
            <div class="author__content text-component padding-top-sm padding-left-xs">
              <div class="flex flex-wrap gap-sm">

                <label for="uploadImage" class="btn" id="btnEditCoverPhoto">Edit Cover Photo</label>
              </div><!-- /.flex flex-wrap -->
            </div><!-- /.author__content -->
          </div><!-- /.author -->
        </div><!-- /.col-1 -->
      </div><!-- /.grid gap-md@md -->
    </div><!-- /.container max-width-lg -->
  </section><!-- /.padding-y-md -->
@endsection

@push('module-scripts')
<!-- MODULE'S CUSTOM SCRIPT -->
  @include('users::partials.script-js')
@endpush

@section('before-end')
  <script src="{{ asset('assets/js/croppie/croppie.min.js') }}"></script>
  <script>
    $(function(){
        let $options = {
            enableExif: true,
            showZoomer: false,
            viewport: {
              width:600,
              height:280,
              type:'square' //circle
            },
            boundary:{
              width: 600,
              height: 280
            }
        };
          
        $options['url'] = "{{ $user->getCoverPhoto() }}";

        $image_crop = $('#imageDemo').croppie($options);

        $('#uploadImage').on('change', function(){
          readFile(this);
          validateSize(this);
          
          var reader = new FileReader();
          reader.onload = function (event) {
            $image_crop.croppie('bind', {
              url: event.target.result
            }).then(function(){
              $('.alert-cover-photo').removeClass('hidden');
            });
          }
          reader.readAsDataURL(this.files[0]);
          //$('#uploadimageModal').modal('show');
        });

        $('#btnUploadCoverPhoto').on('click', function (event) {
          $('.alert-cover-photo').empty();
          $('.alert-cover-photo').html('Loading...');
          $image_crop.croppie('result', {
            type: 'base64',
            format: 'png',
            size: 'original'  
          }).then(function (response) {
            $('#base64Image').val('');
            $('#base64Image').val(response);
            var updateURL = "/admin/users/update-coverphoto/{{ $user->id }}";
            $.ajax({
              url: updateURL,
              dataType: 'json',
              type: 'post',
              data: {
                _token: $('input[name=_token]').val(),
                base64Image: response
              },
              success: function(response){
                if(response.status){
                  window.location = updateURL;
                }
              }
            });
          });
        });

        function readFile(input) {
            if (input.files && input.files[0]) {
              var reader = new FileReader();
              
              reader.onload = function (e) {
                result = e.target.result;
                arrTarget = result.split(';');
                tipo = arrTarget[0];
                validFormats = ['data:image/jpeg', 'data:image/png'];
                if (validFormats.indexOf(tipo) == -1){
                  alert('Accept only .jpg o .png image types');
                  $('.alert-cover-photo').addClass('hidden');
                  $('#uploadImage').val('');
                  return false;
                }
              }
              
              reader.readAsDataURL(input.files[0]);
            }
        }

        function validateSize(file) {
            var FileSize = file.files[0].size / 1024 / 1024; // in MB
            if (FileSize > 5) {
                alert('File size exceeds 5 MB');
               $(file).val('');
            } else {

            }
        }

        $('#btnDeleteAvatar').on('click', function(){
          if(confirm('Are you sure you want to delete your avatar?')){
            $.ajax({
              url: "{{ route('avatar.delete.ajax') }}",
              dataType: 'json',
              type: 'post',
              data: {
                _token: $('input[name=_token]').val(),
              },
              success: function(response){
                if(response.status){
                  window.location = "{{ url('users/settings') }}";
                } else {
                  console.log(response);
                }
              }
            });
          }
        });

        $('#btnDeleteCoverPhoto').on('click', function(){
          
          if(confirm('Are you sure you want to delete your cover photo?')){
            $.ajax({
              url: "{{ route('cover-photo.delete.ajax') }}",
              dataType: 'json',
              type: 'post',
              data: {
                _token: $('input[name=_token]').val(),
              },
              success: function(response){
                if(response.status){
                  window.location = "{{ url('users/settings') }}";
                } else {
                  console.log(response);
                }
              }
            });
          }

        });

    });
  </script>
@stop
