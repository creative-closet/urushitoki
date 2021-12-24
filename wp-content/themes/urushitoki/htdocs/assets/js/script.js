jQuery(".js-menu-open").on( "click", function () {
	jQuery(this).toggleClass("active");
	jQuery(".js-menu").toggleClass("active");
	jQuery("body").toggleClass("active");
});

jQuery(document).keyup(function(e){
	if(e.keyCode == 27){
		jQuery(".js-menu-open").removeClass("active");
		jQuery(".js-menu").removeClass("active");
		jQuery("body").removeClass("active");
	}
});
