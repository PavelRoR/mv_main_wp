var ur = new Array(),
	cht = Math.floor(Math.random() * 9) + 1;
answer = "";
das = 0;
vsg = 0;
pur = 0;

function vip(XX) {
	var ng_desc = $('.instruction'),
		ng_results = $('#numbers_result'),
		ng_count = $('#numbers_count'),
		ng_restart = $('#restart'),
		it_was = ' это было число ' + cht;
	ng_desc.fadeOut(300);
	ng_results.fadeIn(700);
	ng_count.fadeIn(700);
	ng_restart.css("display", "block");

	vsg++;
	if (XX == cht) {
		cht = Math.floor(Math.random() * 9) + 1;
		console.log(cht);
		das++;
		prn = Math.round(das / vsg * 1000) / 10;
		if (vsg > 50) {
			if (prn <= 5) {
				pur = 1;
			}
			if (prn > 5 && prn <= 10) {
				pur = 2;
			}
			if (prn > 10 && prn <= 12) {
				pur = 3;
			}
			if (prn > 13 && prn <= 20) {
				pur = 4;
			}
			if (prn > 20 && prn <= 30) {
				pur = 5;
			}
			if (prn > 30) {
				pur = 6;
			}
		}
		answer = "Да,";
		ng_results.css("color", "#00ff00");
	} else {
		cht = Math.floor(Math.random() * 9) + 1;
		console.log(cht);
		prn = Math.round(das / vsg * 1000) / 10;
		if (vsg > 50) {
			if (prn <= 5) {
				pur = 1;
			}
			if (prn > 5 && prn <= 10) {
				pur = 2;
			}
			if (prn > 10 && prn <= 12) {
				pur = 3;
			}
			if (prn > 13 && prn <= 20) {
				pur = 4;
			}
			if (prn > 20 && prn <= 30) {
				pur = 5;
			}
			if (prn > 30) {
				pur = 6;
			}
		}
		answer = "Нет,";
		ng_results.css("color", "#ff0000");
	}
	ng_results.html(answer + it_was);
	ng_count.html('предсказано ' + prn + '% из ' + vsg + ' попыток ') + ur[pur];
};

$(function () {
    $('#restart ').on('click', function () {
        location.reload(true);
    });
});