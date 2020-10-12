@extends('site1.layouts.app')

@section('content')
	@include('site1.partials.justified-grid')
@endsection

@section('before-end')
	<script>
		var pageNumber = 2;
		$(function(){
			$('ul.pagination').hide();
			$(window).bind('scroll', function(){
				if($(window).scrollTop() + $(window).height() == $(document).height()){

					$.ajax({
						type: 'GET',
						url: "{{ url()->current() }}?page=" + pageNumber,
						success: function(data){
							var loadPost = '';
							var postLinks = $(data).find('.infinite-scroll a.post-link');
							if(postLinks.length){
								postLinks.each(function(tag){
									loadPost += $(this)[0].outerHTML;
								});

								// Add page number when there are links
								pageNumber++;
								$('a.post-link:last').after(loadPost);
							}
						}
					});

				}
			});
		});
	</script>
@endsection
