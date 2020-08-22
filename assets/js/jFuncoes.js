$(document).ready(function(){

	$('#cookies').show(3000);

    // Check if the user already accepted it
    if (window.localStorage.getItem('accept_cookies')) {
		$('#cookies').hide();
		return false;
    }

    $(".btn_cookie").click(function(){
        // Save on LocalStorage
        window.localStorage.setItem('accept_cookies', true);
		$('#cookies').hide();
		return false;
    }); 
});


$(document).ready(function () {
	$("#close").click(function () {
		$("#aviso").hide();
		window.location.href = "https://www.futebolespetacular.com.br"
	});
});

$(function () {
	$('.nome').clear();
	$('.email').clear();
	$('.phone').clear();
	$('.empresa').clear();
	$('.msg').clear();

	$('.btn_enviar').on('click', function () {
		var n, e, t, o, m;
		var msg = "";
		n = $('.nome').val();
		e = $('.email').val();
		t = $('.phone').val();
		o = $('.empresa').val();
		m = $('.msg').val();
	});

});
