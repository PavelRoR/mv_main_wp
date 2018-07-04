$(document).ready(function () {
    /* Страница контакты */
    $(function () {
        var
            reNone = /.+/,
            reEm = /^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{1,20}$/;
        nm = $('.contacts_feedback_form  input[name=name]'),
            em = $('.contacts_feedback_form input[name=email]'),
            ms = $('.contacts_feedback_form textarea'),
            check = $('.contacts_feedback_form .check'),
            btn = $('.contacts_feedback_form .button'),
            message = $('.contacts_feedback_form .alert_message'),
            message2 = $('.contacts_feedback_form .success_message');
        $('.contacts_feedback_form .button').on('click',
            function () {
                if (!nm.val().match(reNone)) {
                    nm.css("border", "1px solid red");
                    message.text('Введите имя').slideDown(500);
                    return false;
                };
                if (!em.val().match(reNone)) {
                    em.css("border", "1px solid red");
                    message.text('Введите email').slideDown(500);
                    return false;
                };
                if (!em.val().match(reEm)) {
                    em.css("border", "1px solid red");
                    message.text('Email введен некорректно').slideDown(500);
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
                    url: '/wp-content/themes/mastervision/mails/contacts.php',
                    type: 'POST',
                    data: {
                        n: nm.val(),
                        e: em.val(),
                        m: ms.val()
                    },
                    success: function (data) {
                        message2.slideDown(500).text(data);
                        nm.val('');
                        em.val('');
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
        em.click(function () {
            em.css("border-color", "rgba(85, 94, 124, .3)");
            message.slideUp(500);
            message2.slideUp(500);
            btn.text('Отправить');
        });
        nm.click(function () {
            nm.css("border-color", "rgba(85, 94, 124, .3)");
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
   /*Конец документа*/ 
});