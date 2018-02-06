$(function() {
    var caruselControl = $(".carusel .pages div");
    caruselControl.click(function(){
        $($(this).parent().children()).removeClass("active");
        $($(this).parent().parent().children()).removeClass("active");
        $(this).addClass("active");
        var position = $(this).index();
        $($(this).parent().parent().children().eq(position)).addClass("active");
    });
    $("nav").on("click","a", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href');
        var top = $(id).offset().top;


        $('body,html').animate({scrollTop: top}, 800);
    });
    $("#home .buttons").on("click","div", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href');
        var top = $(id).offset().top;


        $('body,html').animate({scrollTop: top}, 800);
    });

    $("#send").click(function(){
        var name_el = $("#name");
        var email_el = $("#email");
        var message_el = $("#message");

        var name = $.trim(name_el.val());
        if(!name){
            $(name_el).css("background","#e1bfff");
            setTimeout(function() { $(name_el).css("background",""); }, 3000);
            return false;
        }

        var email = $.trim(email_el.val());
        var valid = ValidateEmail(email);
        if(!email || !valid){
            $(email_el).css("background","#e1bfff");
            setTimeout(function() { $(email_el).css("background",""); }, 3000);
            return false;
        }

        var message = $.trim(message_el.val());
        if(!message){
            $(message_el).css("background","#e1bfff");
            setTimeout(function() { $(message_el).css("background",""); }, 3000);
            return false;
        }

        $.ajax({
            type: "GET",
            url: ajax_url,
            data: {
                action: 'contact',
                name: name,
                email: email,
                message: message,
                copy: $("#send_me").prop('checked')
            },
            success: function (response) {
                $(".contact-form").html("<h1 class='success'>Success</h1>");
            },
            error: function (e) {
                $(".contact-form").html("<h1 class='error'>Error</h1>");
            }
        });

    });

});
jQuery(window).scroll(function(){
    var $sections = $('.navs');
    $sections.each(function(i,el){
        var top  = $(el).offset().top-100;
        var bottom = top +$(el).height();
        var scroll = $(window).scrollTop();
        var id = $(el).attr('id');
        if( scroll > top && scroll < bottom){
            $("nav li").removeClass('active');
            $('a[href="#'+id+'"]').parent().addClass('active');

        }
    })
});

function ValidateEmail(mail)
{
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail))
    {
        return (true)
    }
    return (false)
}