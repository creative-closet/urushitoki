jQuery(".c-open--button").click(function () {
	jQuery(this).toggleClass("active");
	jQuery(".menu-list").toggleClass("active");
	jQuery(".k-menu-background").toggleClass("active");
	jQuery("body").toggleClass("active");
});


jQuery(document).keyup(function(e){
	if(e.keyCode == 27){
		jQuery(".c-open--button").removeClass("active");
		jQuery(".menu-list").removeClass("active");
		jQuery(".k-menu-background").removeClass("active");
		jQuery("body").removeClass("active");
	}
});
