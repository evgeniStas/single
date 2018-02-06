$(function() {
    var caruselControl = $(".carusel .pages div");
    caruselControl.click(function(){
        $($(this).parent().children()).removeClass("active");
        $($(this).parent().parent().children()).removeClass("active");
        $(this).addClass("active");
        var position = $(this).index();
        $($(this).parent().parent().children().eq(position)).addClass("active");
    });


});