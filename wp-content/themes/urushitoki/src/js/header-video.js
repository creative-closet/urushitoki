jQuery(window).on('load resize', function(){
	let windowWidth = window.innerWidth;
	let windowTab    = 1024;
	const video     = document.getElementById('header-video');
	if (windowWidth <= windowTab) {
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
