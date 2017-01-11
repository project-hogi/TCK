/**
 * Created by 호기 퍼블리싱팀 조용준 on 2017-01-09.
 */
"use strict";

(function($) {
    $(document).on("appinit", function() {

        $('.select-type').each(function(){
            var $selectBox = $(this);

            var selectTarget = $('select', $selectBox);
            selectTarget.change(function(){
                var select_name = $(this).children('option:selected').text();
                $(this).siblings('label').text(select_name);
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

        var fileTarget = $('.filebox .upload-hidden');
        fileTarget.on('change', function(){
            /* 값이 변경되면 */
            if(window.FileReader){
                /* modern browser */
                var filename = $(this)[0].files[0].name; } else { /* old IE */
                var filename = $(this).val().split('/').pop().split('\\').pop(); /* 파일명만 추출 */
            } /* 추출한 파일명 삽입 */
            $(this).siblings('.upload-name').val(filename);
        });

        $('.datepicker').datepicker();

        /*
        * ================================================
        * 선택된 값을 .val(이곳)에 넣으면 값이 변경됩니다.
        * ================================================
        * $('.search-box').find('select').val('cd');
        *
        * */

        /* 기본 선택된 값으로 label값을 change 해준다 */
        $('.search-box').find('select').trigger('change');

    });

})(jQuery);