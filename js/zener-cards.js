var num = 0,
    correct = 0,
    pur = 0,
    prc = 0,
    circle = "url(img/zener/zen1.png)",
    cross = "url(img/zener/zen2.png)",
    waves = "url(img/zener/zen3.png)",
    square = "url(img/zener/zen4.png)",
    star = "url(img/zener/zen5.png)",
    card,
    mycard = $('#zc_main_card'),
    zc_desc = $('.instruction'),
    zc_count = $('#numbers_count'),
    zc_restart = $('#restart'),
    ur = new Array();
ur[0] = "";
card = [circle, cross, waves, square, star];

function vip(XX) {
    var rand = Math.floor(Math.random() * card.length),
        whichCard = (card[rand]);
    mycard.css({
        "backgroundSize": "100%",
        "backgroundImage": whichCard
    })
    console.log(whichCard);
    zc_desc.fadeOut(300);
    zc_count.fadeIn(700);
    zc_restart.css("display", "block");
    num++;

    function cardBackground() {
        mycard.css({
            "bachgroundColor": "black",
            "backgroundSize": "85%",
            "backgroundImage": "url(img/zener/logo3.png)"
        })
    }
    setTimeout(cardBackground, 2000);
    if (XX == whichCard) {
        correct++;
    }
    prc = Math.round(correct / num * 1000) / 10;

    if (num > 50) {
        if (prc <= 13) {
            pur = 1;
        }
        if (prc > 13 && prc <= 18) {
            pur = 2;
        }
        if (prc > 18 && prc <= 22) {
            pur = 3;
        }
        if (prc > 22 && prc <= 30) {
            pur = 4;
        }
        if (prc > 30 && prc <= 45) {
            pur = 5;
        }
        if (prc > 45) {
            pur = 6;
        }
    }
    zc_count.html('Правильно ' + prc + '% из ' + num + ' попыток') + ur[pur];
}
$(function () {
    $('#restart ').on('click', function () {
        location.reload(true);
    });
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