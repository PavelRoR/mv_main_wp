$(document).ready(function () {
    /* Страница контакты */
    $(function () {
        var
            reNone = /.+/,
            rePh = /^[+]?\d*\.?\d*$/;
        fn = $('.consult_form  input[name=first-name]'),
            ln = $('.consult_form input[name=last-name]'),
            sk = $('.consult_form input[name=skype]'),
            ph = $('.consult_form input[name=phone]'),
            ms = $('.consult_form textarea'),
            check = $('.consult_form .check'),
            btn = $('.consult_form .button'),
            message = $('.consult_form .alert_message'),
            message2 = $('.consult_form .success_message');
        $('.consult_form .button').on('click',
            function () {
                if (!fn.val().match(reNone)) {
                    fn.css("border", "1px solid red");
                    message.text('Введите имя').slideDown(500);
                    return false;
                };
                if (!ln.val().match(reNone)) {
                    ln.css("border", "1px solid red");
                    message.text('Введите фамилию').slideDown(500);
                    return false;
                };
                if (!ph.val().match(reNone)) {
                    ph.css("border", "1px solid red");
                    message.text('Введите телефон').slideDown(500);
                    return false;
                };
                if (!ph.val().match(rePh)) {
                    ph.css("border", "1px solid red").val('');
                    message.text('Только цифры').slideDown(500);
                    return false;
                };
                if (!sk.val().match(reNone)) {
                    sk.css("border", "1px solid red");
                    message.text('Введите skype').slideDown(500);
                    return false;
                };
                if (!ms.val().match(reNone)) {
                    ms.css("border", "1px solid red");
                    message.text('Введите сообщение').slideDown(500);
                    return false;
                };
                if (!check.prop("checked")) {
                    check.next().css("color", "red");
                    message.text('Подтвердите соглашение').slideDown(500);
                    return false;
                };
                btn.text('Отправка...');
                $.ajax({
                    url: '/wp-content/themes/mastervision/mails/consult.php',
                    type: 'POST',
                    data: {
                        fn: fn.val(),
                        ln: ln.val(),
                        p: ph.val(),
                        s: sk.val(),
                        m: ms.val()
                    },
                    success: function (data) {
                        message2.slideDown(500).text(data);
                        fn.val('');
                        ln.val('');
                        ph.val('');
                        sk.val('');
                        ms.val('');
                        btn.text('Отправлено');
                    },
                    error: function (data) {
                        message.slideDown(500).text(data)
                        btn.text('Отправить');
                    }
                });
            }
        );
        fn.click(function () {
            fn.css("border-color", "rgba(85, 94, 124, .3)");
            message.slideUp(500);
            message2.slideUp(500);
            btn.text('Отправить');
        });
        ln.click(function () {
            ln.css("border-color", "rgba(85, 94, 124, .3)");
            message.slideUp(500);
            message2.slideUp(500);
            btn.text('Отправить');
        });
        sk.click(function () {
            sk.css("border-color", "rgba(85, 94, 124, .3)");
            message.slideUp(500);
            message2.slideUp(500);
            btn.text('Отправить');
        });
        ph.click(function () {
            ph.css("border-color", "rgba(85, 94, 124, .3)");
            message.slideUp(500);
            message2.slideUp(500);
            btn.text('Отправить');
        });
        ms.click(function () {
            ms.css("border-color", "rgba(85, 94, 124, .3)");
            message.slideUp(500);
            message2.slideUp(500);
            btn.text('Отправить');
        });
        check.click(function () {
            check.next().css("color", "rgba(17, 17, 18, .8)");
            message.slideUp(500);
            message2.slideUp(500);
            btn.text('Отправить');
        });
    });
    /*Тоглл со спецами*/
    $(function () {
        $('.all_specialists').click(function () {
            if ($(this).text() == 'Все специалисты') {
                $('#our_specialists_more').slideDown(500);
                $(this).text('Свернуть');
            } else {
                $('#our_specialists_more').slideUp(500);
                $(this).text('Все специалисты');
            }
        });
    });
    /*Конец дкумента*/
});