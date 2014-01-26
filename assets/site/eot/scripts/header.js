/*jQuery(document).ready(function(){
	jQuery('#header').fadeSlideShow({
		width: 1500, // default width of the slideshow
		height: 422, // default height of the slideshow
		PlayPauseElement: false,
		NextElement: false,
		PrevElement: false,
		ListElement: false,
		controlNav:true,
		controlNavThumbs:false,
        	controlNavThumbsFromRel:true
	});
});
*/
$(window).load(function() {
    $('#header').nivoSlider({
        effect:"fade",
        animSpeed:1000,
        pauseTime:5000,
        startSlide:0,
        captionOpacity:0,
        directionNav:false,
        directionNavHide:false,
        controlNav:true,
        controlNavThumbs:false,
        controlNavThumbsFromRel:false,
        keyboardNav:true,
        pauseOnHover:true,
        manualAdvance:false
    });
});