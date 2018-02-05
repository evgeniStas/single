$(function() {
    var caruselControl = $(".carusel .pages div");
    caruselControl.click(function(){
        $(".carusel .row").removeClass("active");
        $(".carusel .pages div").removeClass("active");
        $(this).addClass("active");
        var position = $(".carusel .pages div").index(this);
        $('.carusel .row:eq('+position+')').addClass("active");
    });
});