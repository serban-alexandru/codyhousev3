<script>
	$(function(){
		$('.js-infinite-scroll').bind("content-loaded", function(e) { 
			window.dispatchEvent(new Event('resize'));
		});
	});
</script>
