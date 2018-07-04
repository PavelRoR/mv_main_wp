    function vip(XX) {
        $('#shulte_table table, #shulte_table h4').remove();
        $('a', this).text('Создать другую таблицу');
        var a = [];
        for (var i = 1; i <= XX * XX; i++)
            a.push(i);
            a.sort(function() { return Math.random() - 0.5; });
            // console.log(JSON.stringify(a));
        var table = $('<table id="game_table">');
        table.empty();
        var index = 0;
        for (r = 0; r < XX; ++r) {
            var rows = $('<tr>');
            for (c = 0; c < XX; ++c) {
                rows.append('<td>' + a[index++]);

            }
            table.append(rows);
        }
        $('#shulte_table').append(table).prepend("<h4>Таблица " + XX + "x" + XX + "</h4>");
    };

    $(function () {
        $('#clear_table').click(function () {
            $('#game_table td').text('');
        })
    });
    $(function () {
        $('#start_timer').click(function () {
            pause()
        })
    });
    $(function () {
        $('#clear_timer').click(function () {
            clearСlock()
        })
    });

    var base = 60,
        clocktimer, dateObj, dh, dm, ds, ms,
        readout = '',
        h = 1,
        m = 1,
        tm = 1,
        s = 0,
        ts = 0,
        ms = 0,
        show = true,
        init = 0,
        ii = 0;

    function clearСlock() {
        clearTimeout(clocktimer);
        h = 1;
        m = 1;
        tm = 1;
        s = 0;
        ts = 0;
        ms = 0;
        init = 0;
        show = true;
        readout = '00:00:00.00';
        $('#shulte_timer').val(readout);
        ii = 0;
    }

    function startTIME() {
        var cdateObj = new Date();
        var t = (cdateObj.getTime() - dateObj.getTime()) - (s * 1000);
        if (t > 999) {
            s++;
        }
        if (s >= (m * base)) {
            ts = 0;
            m++;
        } else {
            ts = parseInt((ms / 100) + s);
            if (ts >= base) {
                ts = ts - ((m - 1) * base);
            }
        }
        if (m > (h * base)) {
            tm = 1;
            h++;
        } else {
            tm = parseInt((ms / 100) + m);
            if (tm >= base) {
                tm = tm - ((h - 1) * base);
            }
        }
        ms = Math.round(t / 10);
        if (ms > 99) {
            ms = 0;
        }
        if (ms == 0) {
            ms = '00';
        }
        if (ms > 0 && ms <= 9) {
            ms = '0' + ms;
        }
        if (ts > 0) {
            ds = ts;
            if (ts < 10) {
                ds = '0' + ts;
            }
        } else {
            ds = '00';
        }
        dm = tm - 1;
        if (dm > 0) {
            if (dm < 10) {
                dm = '0' + dm;
            }
        } else {
            dm = '00';
        }
        dh = h - 1;
        if (dh > 0) {
            if (dh < 10) {
                dh = '0' + dh;
            }
        } else {
            dh = '00';
        }
        readout = dh + ':' + dm + ':' + ds + '.' + ms;
        if (show == true) {
            $('#shulte_timer').val(readout);
        }
        clocktimer = setTimeout("startTIME()", 1);
    }

    function pause() {
        if (init == 0) {
            dateObj = new Date();
            startTIME();
            init = 1;
        } else {
            if (show == true) {
                show = false;
            } else {
                show = true;
            }
        }
    }