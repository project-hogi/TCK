"use strict";

window.addEventListener("load", function() {
	window.scrollTo(1, 1);
});

(function($) {

	$(document).on("ready", function() {
		if (less) {
			less.pageLoadFinished.then(function() {
				$(document).trigger("appinit").trigger("appinitOnce");
			});
		} else {
			$(document).trigger("appinit").trigger("appinitOnce");
		}
	});

	$(document).on("appinit", function() {

		// # 으로 된 a늘 누를 경우 준비중으로 표시
		$('a[href="#"]').each(function(event) {
			if ($(this).data("data-preparing"))
				return;

			$(this).data("data-preparing", true);

			$(this).on("click", function(event) {
				event.stopPropagation();
				event.preventDefault();

				alert("준비 중 입니다.");
			});
		});

		// http로 시작되는 모든 링크를 새 페이지로 열기
		$('a[href^="http"]:not([target])').each(function() {
			$(this).attr("target", "_blank");
		});

		// data-alert 속성을 가지고 있을 때
		$("a[data-alert]").each(function() {
			if ($(this).data("data-alert"))
				return;

			$(this).data("data-alert", true);

			$(this).on("click", function(event) {
				event.stopPropagation();
				event.preventDefault();

				alert($(this).attr("data-alert"));
			});
		});

		// data-confirm 속성을 가지고 있을 때
		$("a[data-confirm]").each(function() {
			if ($(this).data("data-confirm"))
				return;

			$(this).data("data-confirm", true);

			$(this).on("click", function(event) {
				if (!confirm($(this).attr("data-confirm"))) {
					event.stopPropagation();
					event.preventDefault();
				}
			});
		});

		// Select 직접입력이 있는 select를 위함
		$("select.input-holder").each(function() {
			var $select = $(this);
			var $input = $(this).next("input");

			$select.val($input.val());

			$select.on("change", function() {
				$input.val($select.val());

				if ($(this).val()) {
					$input.hide();
				} else {
					$input.show();
				}
			}).trigger("change");
		});

	});

})(jQuery);