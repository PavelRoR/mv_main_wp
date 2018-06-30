das = 0;
vsg = 0;
pur = 0;
answer = "";
var ur = new Array();
ur[0] = "";
var blue = "#0000ff",
    red = "#ff0000",
    green = "#00ff00",
    color_box = $('#color_box'),
    col = ["#00ff00", "#0000ff", "#ff0000"];

function vip(XX) {
    var rand = Math.floor(Math.random() * col.length),
        color = (col[rand]),
        cg_desc = $('.instruction'),
        cg_results = $('#numbers_result'),
        cg_count = $('#numbers_count'),
        cg_restart = $('#restart');
    color_box.css("backgroundColor", color);
    cg_desc.fadeOut(300);
    cg_results.fadeIn(700);
    cg_count.fadeIn(700);
    cg_restart.css("display", "block");
    vsg++;
    console.log(color);
    if (XX == color) {
        das++;
        prn = Math.round(das / vsg * 1000) / 10;
        if (vsg > 50) {
            if (prn <= 20) {
                pur = 1;
            }
            if (prn > 20 && prn <= 27) {
                pur = 2;
            }
            if (prn > 27 && prn <= 36) {
                pur = 3;
            }
            if (prn > 36 && prn <= 41) {
                pur = 4;
            }
            if (prn > 41 && prn <= 50) {
                pur = 5;
            }
            if (prn > 50) {
                pur = 6;
            }
        }
        answer = "Да, Вы выбрали правильный цвет!";
    } else {
        prn = Math.round(das / vsg * 1000) / 10;
        if (vsg > 50) {
            if (prn <= 20) {
                pur = 1;
            }
            if (prn > 20 && prn <= 27) {
                pur = 2;
            }
            if (prn > 27 && prn <= 36) {
                pur = 3;
            }
            if (prn > 36 && prn <= 41) {
                pur = 4;
            }
            if (prn > 41 && prn <= 50) {
                pur = 5;
            }
            if (prn > 50) {
                pur = 6;
            }
        }
        answer = "Нет, это был другой цвет";
    }
    cg_results.html(answer);
    cg_count.html('предсказано ' + prn + '% из ' + vsg + ' попыток ') + ur[pur];
}
$(function () {
    $('#restart ').on('click', function () {
        location.reload(true);
    });
});
$(function () {
    $('#color_box').on("click", function () {
        color_box.css("backgroundColor", "#fff");
    })
});
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
        if ($('body').width() < 768) {
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