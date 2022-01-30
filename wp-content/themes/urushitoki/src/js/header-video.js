jQuery(window).on('load resize', function(){
	let windowWidth = window.innerWidth;
	let windowSp    = 599;
	const video     = document.getElementById('header-video');
	if (windowWidth <= windowSp) {
		video.pause()
		video.addEventListener('pause', function() {
			video.load();
			video.autoplay = false;
			video.loop     = false;
		});
	} else {
		video.play()
		video.addEventListener('playing', function() {
			video.autoplay = true;
			video.loop     = true;
		});
	}
});
