/**
 * Created by 호기 퍼블리싱팀 조용준 on 2017-01-09.
 */
"use strict";

(function($) {
    $(document).on("appinit", function() {

        $('.tab-menu').each(function(){
            var $tabMenu = $(this);
            var $tabMenuUl = $('>ul', $tabMenu);
            var $tabMenuLi = $('>li', $tabMenuUl);
            $tabMenuLi.on('click', 'a', function(e){
                e.preventDefault();
                var $tabMenuLiA = $(this)
                var $thisAttrHref = $tabMenuLiA.attr('href');
                var $parentTabLi = $tabMenuLiA.parents('li');
                var $parentTabMenu = $parentTabLi.parents('.tab-menu');
                var $parentTabContent = $parentTabMenu.siblings('.tab-content');
                $parentTabContent.removeClass('active')
                $parentTabLi.siblings('li').removeClass('active');
                $('.tab-content'+$thisAttrHref).addClass('active');
                $parentTabLi.addClass('active');
            });

        })

    });

})(jQuery);