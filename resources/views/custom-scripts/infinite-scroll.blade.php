<script>
	var pageNumber = 2;
	$(function(){
		$('ul.pagination').hide();
		$(window).bind('scroll', function(){
			var scrollHeight = $(document).height();
			var scrollPosition = $(window).height() + $(window).scrollTop();

			var isAtBottom = (scrollHeight - scrollPosition == 0 || scrollHeight - scrollPosition == 0.5 || scrollHeight - scrollPosition < 0.5) ? true : false;

			if(isAtBottom){
				$.ajax({
					type: 'GET',
					url: window.location.href + "?page=" + pageNumber,
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
