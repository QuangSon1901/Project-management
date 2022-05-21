$('#btn_login').click(function () {
    $('#modal_login').css('display', 'flex');
    $('body').addClass('lock-overlay');
    $('.close').each(function () {
        $(this).click(function () {
            $('#modal_login').css('display', 'none');
            $('body').removeClass('lock-overlay');
            $('#container').removeClass('right-panel-active');
            $('#loginForm .inputForm').each(function () {
                $(this).val('');
            })
            $('#registerForm .inputForm').each(function () {
                $(this).val('');
            })
        })
    })

    $('#signUp').click(function () {
        $('#container').addClass('right-panel-active');
    })

    $('#signIn').click(function () {
        $('#container').removeClass('right-panel-active');
    })
})


$(document).ready(function () {
    $(window).click(function (event) {
        if ($('#modal_login').is(event.target) || $('#modal_overlay').is(event.target)) {
            $('#modal_login').css('display', 'none');
            $('body').removeClass('lock-overlay');
            $('#container').removeClass('right-panel-active');
            $('#loginForm .inputForm').each(function () {
                $(this).val('');
            })
            $('#registerForm .inputForm').each(function () {
                $(this).val('');
            })
        }
    })
})
