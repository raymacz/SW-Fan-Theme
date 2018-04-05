(function($){
    $("#primary-menu li > a").focus(function(){
        $(this).css("background-color", "#080808");
    });
	 $("#primary-menu li > a").blur(function(){
        $(this).css("background-color", "#333");
    });
})(jQuery); 

