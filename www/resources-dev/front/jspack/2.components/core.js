"use strict";

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

})(jQuery);