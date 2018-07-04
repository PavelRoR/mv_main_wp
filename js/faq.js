$(document).ready(function () {
    /*FAQ*/
    $(function () {
        $('.faq_title').on('click', function () {
            var a = $('span', this);
            if (a.text() == '+') {
                a.text('-');
                $(this).next().slideDown(500);
            } else {
                a.text('+');
                $(this).next().slideUp(500);

            }
        });
    });
    /*Конец документа*/
})