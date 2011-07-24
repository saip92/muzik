$(document).ready( function() {
	$('#create').click( function () {
		var name = $('input[name=name]');
		var lang = $('input[name=lang]');
		var year = $('input[name=year]');

		if (name.val()=='') {
			name.addClass('hightlight');
			return false;
		}
		if (lang.val()=='') {
			lang.addClass('hightlight');
			return false;
		}
		if (year.val()=='') {
			year.addClass('hightlight');
			return false;
		}

		$('.aftxt').attr('disabled','true');

		$('.loading').show();

		var data = 'name=' + name.val()+'&lang=' + lang.val()+'&year=' + year.val();

		$.ajax({
			url: "createalbum.php",
			type: "GET",
			data: data,
			cache: false,
			success: function (html) {
				if (html==1) {
					$('#alst2').fadeIn('slow');
				} else
					alert('Sorry, unexpected error. Please try again later.Test'+html);
			}
		});
		$('.loading').hide();
		return false;
	});
});