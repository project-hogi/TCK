"use strict";

(function($) {

	$(document).on("appinitOnce", function() {
	});

	$(document).on("appinit", function() {
		var $container = $('#container');

		$('#header-left').each(function(){
			var $headerLeft = $(this);
			var $headerLogo = $('.logo', $headerLeft);
			var $headerLnb = $('.lnb', $headerLeft);
			var $headerLnbList = $('.lnb-list', $headerLnb);
			var $headerLnbListLi = $('>li', $headerLnbList);
			var $hasUl = $headerLnbListLi.has('ul');
			var $headerLeftControl = $('.header-left-control', $headerLeft);
			$hasUl.addClass('haschild');

			$headerLnbListLi.on('click', '>a', function(e){
				var $thisA = $(this);
				var $thisLi = $thisA.parent('li');
				$thisLi.siblings('li').removeClass('active');
				$thisLi.addClass('active');
				$hasUl.children('ul').stop().slideUp(300);

				if($thisLi.hasClass('haschild')){
					e.preventDefault();
					$thisLi.children('ul').stop().slideDown(300);
				}
			});
			$headerLeftControl.on('click', function(e){
				e.preventDefault();
				if($headerLeft.hasClass('folding')){
					$headerLeft.removeClass('folding');
					$container.removeClass('folding');
				}else{
					$headerLeft.addClass('folding');
					$container.addClass('folding');
				}
			});
			$hasUl.on('mouseenter', function(){
				if($headerLeft.hasClass('folding')) {
					$headerLeft.removeClass('folding');
					$container.removeClass('folding');
				}
			});
		});


	});

})(jQuery);