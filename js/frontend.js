var br_term_and_cond_popup_load;
(function ($){
    br_term_and_cond_popup_load = function() {
        var $term = $( "#payment .terms a" );
        $term.click(function(event) {
            event.preventDefault();
            var old_tb_remove = window.tb_remove;
            tb_remove = function() {
                if( $('#TB_closeAjaxWindow').length > 0 ) {
                    $( '#terms' ).prop( 'checked', true );
                }
                old_tb_remove();
            };
            setTimeout(function() {
                $('#TB_window').addClass('br_terms_cond_popup_window');
                $('#TB_overlay').addClass('br_terms_cond_popup_window_bg');
            }, 50);
        });
        var width = $( window ).width() * 0.9;
        var height = $( window ).height() * 0.9;
        if( the_terms_cond_popup_js_data.popup_width && the_terms_cond_popup_js_data.popup_width < width ) {
            width = the_terms_cond_popup_js_data.popup_width;
        }
        if( the_terms_cond_popup_js_data.popup_height && the_terms_cond_popup_js_data.popup_height < height ) {
            height = the_terms_cond_popup_js_data.popup_height;
        }
        var link = "#TB_inline?width=" + width + "&height=" + height + "&inlineId="+the_terms_cond_popup_js_data.id;
        $term.attr( 'href', link ).addClass('thickbox').attr('title', the_terms_cond_popup_js_data.title);
    }
    $(document).ready( function () {
        $( 'body' ).bind( 'updated_checkout', function() {
            br_term_and_cond_popup_load();
        });
    });
})(jQuery);