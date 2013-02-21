(function($){
    
    var squeeze = {};

    squeeze.close_modal = function(){
        $("#close-model").on("click",function(e){
            console.log("sdasd");
            e.preventDefault();
            $.fancybox.close();
        });
    }

    squeeze.load_modal = function(){
        var html = $('.use-this').html();
        $('.use-this').remove();
        $.fancybox({
            content: html,
            padding: [20, 40, 10, 40],
            closeBtn: false,
            scrolling: 'no',
            width: 230,
            minWidth: 230,
            maxWidth: 230,
            afterClose: function(){
                $.cookie('modal',true);
            },
            afterShow: function(){
                $("#form-wysija-nl-php-2-wysija-to").attr("placeholder","enter your email, and hit enter");
                /*$("#form-wysija-nl-php-2").on("submit",function(event){
                    event.preventDefault();
                    console.log($(this).serialize());
                    $.ajax({
                        "url": "/",
                        "data": $(this).serialize()
                    }).done(function(data){
                        console.log(data);
                    });
                });*/
                squeeze.close_modal();
            },
        });
    }

    $(document).ready(function() {
        $("#form-wysija-nl-php-2-wysija-to").submit(function(event){event.preventDefault();});
        if(window.location.hash == "#wysija") $.cookie('modal', true);
        if(typeof $.cookie('modal') == "undefined") squeeze.load_modal();
    });

}(jReggi));