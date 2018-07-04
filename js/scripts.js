$(document).ready(function () {

    $(function () {
        $("#menu_icon").on("click", function () {
            if (!$(this).hasClass("clicked")) {
                $(this).addClass("clicked");
                $(".upper_span").addClass("upper_span_opened");
                $(".middle_span").addClass("middle_span_opened");
                $(".lower_span").addClass("lower_span_opened");
                $("#menu_container").delay(300).css({
                    left: "0",
                    transition: "all .65s ease-out"
                })
            } else {
                $(this).delay(300).removeClass("clicked");
                $(".upper_span").removeClass("upper_span_opened");
                $(".middle_span").removeClass("middle_span_opened");
                $(".lower_span").removeClass("lower_span_opened");
                $("#menu_container").css({
                    left: "-999px",
                    transition: "all .65s ease-in-out"
                });
                $("#menu_icon").delay(300).removeClass("clicked");
                $(".upper_span").removeClass("upper_span_opened");
                $(".middle_span").removeClass("middle_span_opened");
                $(".lower_span").removeClass("lower_span_opened")
            }
        });
    });
    $(function () {
        $(window).scroll(function () {
            if ($('body').width() < 992) {
                if ($(this).scrollTop() >= 150) {

                    $("#menu_icon").css({
                        "position": "fixed",
                        "top": "33px"
                    });

                } else {
                    $("#menu_icon").css({
                        "position": "absolute",
                        "top": "0"
                    });

                }
            }
            if ($('body').width() < 379) {
                if ($(this).scrollTop() >= 60) {

                    $("#menu_icon").css({
                        "position": "fixed",
                        "top": "33px"
                    });

                } else {
                    $("#menu_icon").css({
                        "position": "absolute",
                        "top": "-140px"
                    });

                }
            }
        })
    });

    $(function (f) {
        var element = f('#up');
        f(window).scroll(function () {
            element['fade' + (f(this).scrollTop() > 200 ? 'In' : 'Out')](500);
        });
        $('#up').click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 400);
        });
    });

    /*Конец документа*/
});