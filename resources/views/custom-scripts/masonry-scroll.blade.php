<script>
	$(function(){
		$('.js-infinite-scroll').bind("content-loaded", function(e) { 
			var masonries = document.getElementsByClassName('js-masonry');
			if( masonries.length > 0) {
				var customEvent = new CustomEvent('masonry-resize');

				for( var i = 0; i < masonries.length; i++) {
					masonries[i].dispatchEvent(customEvent);
				}
			};
		});
	});
</script>
