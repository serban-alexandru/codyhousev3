<script src="https://vjs.zencdn.net/7.11.4/video.min.js"></script>

<script>
	function initVideoJS() {
		$('.video-js').each( function(index, elem) {
			videojs(document.getElementsByClassName('video-js')[index], {
				controls: true,
				autoplay: false,
				fill: false,
				preload: 'auto'
			});
		});
	}

	$(function(){
		var repositionId = null;
		var prevScrollPos = 0;

		function freezeScroll() {
			$(window).scrollTop(prevScrollPos);
			repositionId = setTimeout(freezeScroll, 1);
		}

		$('.js-infinite-scroll').bind("content-loaded", function(e) { 
			prevScrollPos = $(window).scrollTop();
			$('html').css('scroll-behavior', 'auto');
			freezeScroll();

			initVideoJS();

			window.dispatchEvent(new Event('resize'));
			setTimeout(function() {
				clearTimeout(repositionId);
				$('html').css('scroll-behavior', 'smooth');
			}, 550);
		});
	});
</script>
