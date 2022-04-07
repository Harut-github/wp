$(document).ready(function () {
    $(".form-send").submit(function (e) {
        var prt = $(this);
    	th = $(this);
        e.preventDefault();
        var form_text = $(prt).find("[type='text'], [type='checkbox']");
        var count = 0;

        $(form_text).each(function() {
            if ($(this).val() == '') {
                $(this).addClass('error')
            }else{
                count++;
                $(this).removeClass('error');
            }
        });
        if (count == $(form_text).length) {
            $.ajax({
                type: "POST",
                url: "http://z-coding.ru/fast-avtoservis/wp-content/themes/fast-avtoservis/mail.php",
                data: th.serialize()
            }).done(function (data) {
                $(".alert_block").fadeIn("slow");
            })
            $(".alert_thank-close").on('click',  function() {
                $(".alert_block").fadeOut("slow");
            });
        } 
    });
});



 