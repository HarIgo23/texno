$(document).ready(function(){

	function productsMenu() {
		var $trigger = $('.trigger-nav'),
			$menu = $('.trigger-ul');

		$trigger.click(function() {
			$(this).next($menu).slideToggle();
		});

		$(window).resize(function() {
			if ($(window).width() > 992) {
				$menu.removeAttr('style');
			}
		});
	}
	productsMenu();


	var navPos, winPos, navHeight;

	function refreshVar() {
		navPos = $('nav').offset().top;
		navHeight = $('nav').outerHeight(true);
	}

	refreshVar();
	$(window).resize(refreshVar);

	// $('<div class="clone-nav"></div>').insertBefore('nav').css('height', navHeight).hide();

	$(window).scroll(function() {
		winPos = $(window).scrollTop();

		if (winPos >= navPos) {
			$('nav').addClass('fixed');  
			// $('.clone-nav').show();
		}
		else {
			$('nav').removeClass('fixed');
			// $('.clone-nav').hide();
		}
	});


	function allCharacteristics() {
		var $trigger = $('.trigger-dropdown'),
			$menu = $('.trigger-victim');

		$trigger.click(function() {
			$(this).next($menu).slideToggle();
		});
	}
	allCharacteristics();

});