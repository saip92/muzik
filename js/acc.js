   $(document).ready(function() {
	$('.acccon').hide();
	//$('.acctrig:last').addClass('active').next().show(); 
	$('.acctrig').mouseover(function(){
		if( $(this).next().is(':hidden') ) { 
			$('.acctrig').removeClass('active').next().slideUp();
			$(this).toggleClass('active').next().slideDown(); 
		}
		return false;
	});
	/*$('.acctrig').mouseout(function(){
		$('.acccon').slideUp();
	});*/
});