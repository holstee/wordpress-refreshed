var refreshed = {};
var $ = jQuery;

refreshed.newsletter_status = false;

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

                refreshed.newsletter_status = true;
                $("#reggi-wysija").show();
                $('#form-wysija-nl-php-1-wysija-to').focus();

            }else{
                $("#sidebar-logo").hide();

                refreshed.newsletter_status = false;
                $("#reggi-wysija").hide();

            }
        });
    }
}

refreshed.sidebar = function(){
    $(".search-form-input").val("");
    $(".search-form-input").attr("placeholder","enter your search, and hit enter");
    $("#form-wysija-nl-php-1-wysija-to").attr("placeholder","enter your email, and hit enter");
    $("#clicker").click(function(){
        if(!refreshed.newsletter_status){
            refreshed.newsletter_status = true;
            $("#reggi-wysija").show();
            $('#form-wysija-nl-php-1-wysija-to').focus();
        }else{
            refreshed.newsletter_status = false;
            $("#reggi-wysija").hide();
        }
    });
}

jQuery(document).ready(function() {
    $("#back-to-top").backToTop();
    refreshed.scroll_top();
    refreshed.sidebar();
});
