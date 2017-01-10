/**
 * Created by 호기 퍼블리싱팀 조용준 on 2017-01-09.
 */
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
			var $toolMenu = $('.tool-menu');
			$li.on('contextmenu', function(e){
				e.preventDefault();
				var $thisLi = $(this);
				$('.tool-menu').empty();
				$thisLi.siblings().removeClass('active');
				$thisLi.addClass('active');
				$("<div class='tool-menu'><ul><li><a href='#'>이름바꾸기</a></li><li><a href='#'>위로 이동</a></li><li><a href='#'>아래로 이동</a></li></ul></div>").appendTo('#wrap').css({top: event.pageY + "px", left: event.pageX + "px"});
				$('#wrap').on('click', function(){
					$('.tool-menu').empty();
				});
				$toolMenu.focusout(function(){
					$(this).empty();
					console.log('2222')
				});
			});
			$li.on('click', function(e){
				e.preventDefault();
				$li.removeClass('active');
				$(this).addClass('active');
			});
		});

		$('.dtree').each(function(){
			var $dtree = $(this);
			var $dTreeNodeHome = $('>.dTreeNode', $dtree);
			var $dTreeNodeMom1 = $('>.clip', $dtree);
			var $dTreeNodeMom2 = $('>.clip', $dTreeNodeMom1);
			var $dTreeNodeDepth1 = $('>.dTreeNode', $dTreeNodeMom1);
			var $dTreeNodeDepth$ = $('>.dTreeNode', $dTreeNodeMom2);

			var $toolMenu = $('.tool-menu');

			$dTreeNodeHome.on('contextmenu', function(e){
				e.preventDefault();
				var $thisLi = $(this);
				$('.tool-menu').empty();
				$thisLi.siblings().removeClass('active');
				$thisLi.addClass('active');
				$("<div class='tool-menu'><ul><li><a data-toggle='modal' href='#inputpopup'>새 회사 등록</a></li></ul></div>").appendTo('#wrap').css({top: event.pageY + "px", left: event.pageX + "px"});
				$('#wrap').on('click', function(){
					$('.tool-menu').empty();
				});
				$toolMenu.focusout(function(){
					$(this).empty();
					console.log('2222')
				});
			});
			$dTreeNodeDepth1.on('contextmenu', function(e){
				e.preventDefault();
				var $thisLi = $(this);
				$('.tool-menu').empty();
				$thisLi.siblings().removeClass('active');
				$thisLi.addClass('active');
				$("<div class='tool-menu'><ul><li><a data-toggle='modal' href='#inputpopup'>새 조직 등록</a></li><li><a data-toggle='modal' href='#inputpopup'>회사명 바꾸기</a></li><li><a data-toggle='modal' href='#inputpopup'>삭제</a></li><li><a data-toggle='modal' href='#inputpopup'>정보</a></li></ul></div>").appendTo('#wrap').css({top: event.pageY + "px", left: event.pageX + "px"});
				$('#wrap').on('click', function(){
					$('.tool-menu').empty();
				});
				$toolMenu.focusout(function(){
					$(this).empty();
					console.log('2222')
				});
			});
			$dTreeNodeDepth$.on('contextmenu', function(e){
				e.preventDefault();
				var $thisLi = $(this);
				$('.tool-menu').empty();
				$thisLi.siblings().removeClass('active');
				$thisLi.addClass('active');
				$("<div class='tool-menu'><ul><li><a data-toggle='modal' href='#inputpopup'>조직명 바꾸기</a></li><li><a data-toggle='modal' href='#inputpopup'>삭제</a></li><li><a data-toggle='modal' href='#inputpopup'>정보</a></li></ul></div>").appendTo('#wrap').css({top: event.pageY + "px", left: event.pageX + "px"});
				$('#wrap').on('click', function(){
					$('.tool-menu').empty();
				});
				$toolMenu.focusout(function(){
					$(this).empty();
					console.log('2222')
				});
			});

		});



	});

})(jQuery);