@if (session('responseMessage'))
<div class="alert alert--is-visible js-alert margin-bottom-lg" role="alert">
  <div class="flex items-center justify-between">
    <div class="flex items-center">
      <svg aria-hidden="true" class="icon margin-right-xxxs" viewBox="0 0 32 32" ><title>info icon</title><g><path d="M16,0C7.178,0,0,7.178,0,16s7.178,16,16,16s16-7.178,16-16S24.822,0,16,0z M18,7c1.105,0,2,0.895,2,2 s-0.895,2-2,2s-2-0.895-2-2S16.895,7,18,7z M19.763,24.046C17.944,24.762,17.413,25,16.245,25c-0.954,0-1.696-0.233-2.225-0.698 c-1.045-0.92-0.869-2.248-0.542-3.608l0.984-3.483c0.19-0.717,0.575-2.182,0.036-2.696c-0.539-0.514-1.794-0.189-2.524,0.083 l0.263-1.073c1.054-0.429,2.386-0.954,3.523-0.954c1.71,0,2.961,0.855,2.961,2.469c0,0.151-0.018,0.417-0.053,0.799 c-0.066,0.701-0.086,0.655-1.178,4.521c-0.122,0.425-0.311,1.328-0.311,1.765c0,1.683,1.957,1.267,2.847,0.847L19.763,24.046z"></path></g></svg>
      <p>
        {!! session()->get('responseMessage')!!}
      </p>
    </div>

    <button class="reset alert__close-btn js-alert__close-btn">
      <svg class="icon" viewBox="0 0 24 24"><title>Close alert</title><g stroke-linecap="square" stroke-linejoin="miter" stroke-width="3" stroke="currentColor" fill="none" stroke-miterlimit="10"><line x1="19" y1="5" x2="5" y2="19"></line><line fill="none" x1="19" y1="19" x2="5" y2="5"></line></g></svg>
    </button>
  </div>
</div>
@endif

  @if(Request::get('is_trashed'))
    <div class="margin-bottom-md">
      <a href="{{ url('admin/users/empty-trash') }}" class="btn btn--subtle">Empty trash</a>
    </div>
  @endif

<template id="selected-id-template">
  <input type="hidden" name="selectedIDs[]" value="@{{value}}">
</template><!-- /#selected-id-template -->
<form action="{{ url('admin/users/bulk-suspend') }}" method="POST" id="form-bulk-suspend"> @csrf
      <div class="bulk-selected-ids"></div><!-- /.bulk-selected-ids -->
</form>
<form action="{{ url('admin/users/bulk-delete') }}" method="POST" id="form-bulk-delete"> @csrf
      <div class="bulk-selected-ids"></div><!-- /.bulk-selected-ids -->
</form>

<div class="int-table js-int-table">

    <div class="int-table__inner" id="site-table-container">
      <table class="int-table__table" aria-label="Interactive table example">
        <thead class="int-table__header js-int-table__header">
          <tr class="int-table__row">
            <td class="int-table__cell">
              <div class="custom-checkbox int-table__checkbox">
                <input class="custom-checkbox__input js-int-table__select-all" type="checkbox" aria-label="Select all rows"/>
                <div class="custom-checkbox__control" aria-hidden="true"></div>
              </div>
            </td>

            <th class="int-table__cell int-table__cell--th int-table__cell--sort  js-int-table__cell--sort @if($sort == 'id') int-table__cell--{{$order}} @endif" data-sort="id">
              <div class="flex items-center">
                <span>ID</span>

                <svg class="icon icon--xxs margin-left-xxxs int-table__sort-icon" aria-hidden="true" viewBox="0 0 12 12"><polygon class="arrow-up" points="6 0 10 5 2 5 6 0"/><polygon class="arrow-down" points="6 12 2 7 10 7 6 12"/></svg>
              </div>

              <ul class="sr-only js-int-table__sort-list">
                <li>
                  <input type="radio" name="sortingId" id="sortingIdNone" value="none">
                  <label for="sortingIdNone">No sorting</label>
                </li>

                <li>
                  <input type="radio" name="sortingId" id="sortingIdAsc" value="asc"
                    @if($sort == "id" && $order == 'asc')
                      checked
                    @endif
                  >
                  <label for="sortingIdAsc">Sort in ascending order</label>
                </li>

                <li>
                  <input type="radio" name="sortingId" id="sortingIdDes" value="desc"
                    @if($sort == "id" && $order == 'desc')
                      checked
                    @endif
                  >
                  <label for="sortingIdDes">Sort in descending order</label>
                </li>
              </ul>
            </th>

            <th class="int-table__cell int-table__cell--th int-table__cell--sort  js-int-table__cell--sort @if($sort == 'title') int-table__cell--{{$order}} @endif" data-sort="title">
              <div class="flex items-center">
                <span>Title</span>

                <svg class="icon icon--xxs margin-left-xxxs int-table__sort-icon" aria-hidden="true" viewBox="0 0 12 12"><polygon class="arrow-up" points="6 0 10 5 2 5 6 0"/><polygon class="arrow-down" points="6 12 2 7 10 7 6 12"/></svg>
              </div>

              <ul class="sr-only js-int-table__sort-list">
                <li>
                  <input type="radio" name="sortingTitle" id="sortingTitleNone" value="none">
                  <label for="sortingTitleNone">No sorting</label>
                </li>

                <li>
                  <input type="radio" name="sortingTitle" id="sortingTitleAsc" value="asc"
                    @if($sort == "title" && $order == 'asc')
                      checked
                    @endif
                  >
                  <label for="sortingTitleAsc">Sort in ascending order</label>
                </li>

                <li>
                  <input type="radio" name="sortingTitle" id="sortingTitleDes" value="desc"
                    @if($sort == "title" && $order == 'desc')
                      checked
                    @endif
                  >
                  <label for="sortingTitleDes">Sort in descending order</label>
                </li>
              </ul>
            </th>

            <th class="int-table__cell int-table__cell--th int-table__cell--sort  js-int-table__cell--sort @if($sort == 'description') int-table__cell--{{$order}} @endif" data-sort="description">
              <div class="flex items-center">
                <span>Description</span>

                <svg class="icon icon--xxs margin-left-xxxs int-table__sort-icon" aria-hidden="true" viewBox="0 0 12 12"><polygon class="arrow-up" points="6 0 10 5 2 5 6 0"/><polygon class="arrow-down" points="6 12 2 7 10 7 6 12"/></svg>
              </div>

              <ul class="sr-only js-int-table__sort-list">
                <li>
                  <input type="radio" name="sortingDescription" id="sortingDescriptionNone" value="none">
                  <label for="sortingDescriptionNone">No sorting</label>
                </li>

                <li>
                  <input type="radio" name="sortingDescription" id="sortingDescriptionAsc" value="asc"
                    @if($sort == "description" && $order == 'asc')
                      checked
                    @endif
                  >
                  <label for="sortingDescriptionAsc">Sort in ascending order</label>
                </li>

                <li>
                  <input type="radio" name="sortingDescription" id="sortingDescriptionDes" value="desc"
                    @if($sort == "description" && $order == 'desc')
                      checked
                    @endif
                  >
                  <label for="sortingDescriptionDes">Sort in descending order</label>
                </li>
              </ul>
            </th>

            <th class="int-table__cell int-table__cell--th int-table__cell--sort  js-int-table__cell--sort @if($sort == 'created_at') int-table__cell--{{$order}} @endif" data-sort="created_at" data-date-format="d/m/Y">
              <div class="flex items-center">
                <span>Date</span>

                <svg class="icon icon--xxs margin-left-xxxs int-table__sort-icon" aria-hidden="true" viewBox="0 0 12 12"><polygon class="arrow-up" points="6 0 10 5 2 5 6 0"/><polygon class="arrow-down" points="6 12 2 7 10 7 6 12"/></svg>
              </div>

              <ul class="sr-only js-int-table__sort-list">
                <li>
                  <input type="radio" name="sortingDate" id="sortingDateNone" value="none">
                  <label for="sortingDateNone">No sorting</label>
                </li>

                <li>
                  <input type="radio" name="sortingDate" id="sortingDateAsc" value="asc"
                    @if($sort == "created_at" && $order == 'asc')
                      checked
                    @endif
                  >
                  <label for="sortingDateAsc">Sort in ascending order</label>
                </li>

                <li>
                  <input type="radio" name="sortingDate" id="sortingDateDes" value="desc"
                    @if($sort == "created_at" && $order == 'desc')
                      checked
                    @endif
                  >
                  <label for="sortingDateDes">Sort in descending order</label>
                </li>
              </ul>
            </th>

            <th class="int-table__cell int-table__cell--th int-table__cell--sort  js-int-table__cell--sort @if($sort == 'username') int-table__cell--{{$order}} @endif" data-sort="username">
              <div class="flex items-center">
                <span>Username</span>

                <svg class="icon icon--xxs margin-left-xxxs int-table__sort-icon" aria-hidden="true" viewBox="0 0 12 12"><polygon class="arrow-up" points="6 0 10 5 2 5 6 0"/><polygon class="arrow-down" points="6 12 2 7 10 7 6 12"/></svg>
              </div>

              <ul class="sr-only js-int-table__sort-list">
                <li>
                  <input type="radio" name="sortingUsername" id="sortingUsernameNone" value="none">
                  <label for="sortingUsernameNone">No sorting</label>
                </li>

                <li>
                  <input type="radio" name="sortingUsername" id="sortingUsernameAsc" value="asc"
                    @if($sort == "username" && $order == 'asc')
                      checked
                    @endif
                  >
                  <label for="sortingUsernameAsc">Sort in ascending order</label>
                </li>

                <li>
                  <input type="radio" name="sortingUsername" id="sortingUsernameDes" value="desc"
                    @if($sort == "username" && $order == 'desc')
                      checked
                    @endif
                  >
                  <label for="sortingUsernameDes">Sort in descending order</label>
                </li>
              </ul>
            </th>

            <th class="int-table__cell int-table__cell--th text-left">Image</th>
          </tr>
        </thead>

        <tbody class="int-table__body js-int-table__body" id="site-table-body">
        @php
            foreach($blogs as $key => $blog){
          @endphp
          <tr class="int-table__row">
            <th class="int-table__cell" scope="row">
              <div class="custom-checkbox int-table__checkbox">
                <input class="custom-checkbox__input js-int-table__select-row" type="checkbox" value="{{$blog->id}}" aria-label="Select this row"/>
                <div class="custom-checkbox__control" aria-hidden="true"></div>
              </div>
            </th>
            <td class="int-table__cell">{{$blog->id}}</td>
            <td class="int-table__cell">
              <a href="{{url('admin/blog/edit/'.$blog->id)}}" data-update-url="{{url('admin/blog/update/'.$blog->id)}}" class="modal-trigger-edit-user" aria-controls="modal-edit-user" role="button">{{$blog->title}}</a>
            </td>
            <td class="int-table__cell">{{$blog->description}}</td>
            <td class="int-table__cell">{{ $blog->created_at->format('d/m/Y') }}</td>
            <td class="int-table__cell">{{$blog->username}}</td>
            <td class="int-table__cell">{{$blog->image}}</td>
          </tr>

          @php
            }
          @endphp
        </tbody>
      </table><!-- /.int-table__table -->
    </div><!-- /#site-table-container -->
  </div><!-- /.int-table js-int-table -->

  <div class="site-table-pagination-ajax">
    {{ $blogs->onEachSide(5)->withQueryString()->links('vendor.pagination.codyhouse') }}
  </div><!-- /.site-table-pagination -->

  <!-- Re-initialized utl and menu component if the request is ajax -->
  @if(Request::ajax())
    <script src="{{ asset('assets/js/util.js') }}"></script>
    <script src="{{ asset('assets/js/components/_1_menu.js') }}"></script>
    <script src="{{ asset('assets/js/components/_2_interactive-table.js') }}"></script>
    <script src="{{ asset('assets/js/components/_1_modal-window.js') }}"></script>
  @endif