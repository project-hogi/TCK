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

		$('.list-classify').each(function(){
			var $listClassify = $(this);
			var $li = $('li', $listClassify);

			var $a = $('a', $li);
			var $span = $('span', $a);

			$li.on('click', function(e){
				e.preventDefault();
				var $thisLi = $(this);
				$('.tool-menu').empty();
				$thisLi.siblings().removeClass('active');
				$thisLi.addClass('active');
				$("<div class='tool-menu'><ul><li><a href='#'>이름바꾸기</a></li><li><a href='#'>위로 이동</a></li><li><a href='#'>아래로 이동</a></li></ul></div>").appendTo('#wrap').css({top: event.pageY + "px", left: event.pageX + "px"});
			});


		});

		$('.search-box').each(function(){
			var $searchBox = $(this);

			var selectTarget = $('select', $searchBox);
			selectTarget.change(function(){
				var select_name = $(this).children('option:selected').text();
				$(this).siblings('label').text(select_name);
			});

		});

	});

})(jQuery);