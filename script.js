var refreshed = {};
var $ = jQuery;

refreshed.scroll_top = function(){
    var v = {};
    v.msie6 = $.browser == 'msie' && $.browser.version < 7;
    if (!v.msie6) {
        v.offset = $('#sidebarfixed').offset().top;
        v.margin = parseFloat($('#sidebarfixed').css('margin-top').replace(/auto/, 0));
        v.top = v.offset - v.margin - 75;
        $(window).scroll(function (event) {
            v.window = $(this).scrollTop();
            v.fixed = (v.window >= v.top);

            if (v.fixed) {
                $('#sidebarfixed').addClass('fixed');
            } else {
                $('#sidebarfixed').removeClass('fixed');
            }

            if (v.window >= 325){
                $("#sidebar-logo").fadeIn("slow");
            }else{
                $("#sidebar-logo").hide();
            }

        });
    }
}

jQuery(document).ready(function() {
    $("#back-to-top").backToTop();
    refreshed.scroll_top();
});
