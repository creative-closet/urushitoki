jQuery(".c-open--button").click(function () {
	jQuery(this).toggleClass("active");
	jQuery(".menu-list").toggleClass("active");
	jQuery(".k-menu-background").toggleClass("active");
	jQuery("body").toggleClass("active");
});
