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