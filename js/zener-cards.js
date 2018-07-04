var num = 0,
    correct = 0,
    pur = 0,
    prc = 0,
    circle = "url(/wp-content/themes/mastervision/img/zener/zen1.png)",
    cross = "url(/wp-content/themes/mastervision/img/zener/zen2.png)",
    waves = "url(/wp-content/themes/mastervision/img/zener/zen3.png)",
    square = "url(/wp-content/themes/mastervision/img/zener/zen4.png)",
    star = "url(/wp-content/themes/mastervision/img/zener/zen5.png)",
    card,

    ur = new Array();
ur[0] = "";
card = [circle, cross, waves, square, star];

function vip(XX) {
    var 
    zc_desc = $('.instruction'),
    zc_count = $('#numbers_count'),
    zc_restart = $('#restart'),
    mycard = $('#zc_main_card');
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
            "backgroundImage": "url(/wp-content/themes/mastervision//img/zener/logo3.png)"
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