config = {
    altInput: true,
    altFormat: "F j, Y",
    dateFormat: "d-m-Y",
}
flatpickr("input[type=datetime-local]", config);

var double_arrow_click = document.querySelector("#double-arrow");


double_arrow_click.addEventListener("click", function () {
    var get_rotate = document.querySelector(".rotate");
    if (get_rotate) {
        var from = $('#inputFromText').val();
        var fromID = $('#inputFromID').val();
        var to = $('#inputToText').val();
        var toID = $('#inputToID').val();
        $('#inputFromText').val(to);
        $('#inputFromID').val(toID);
        $('#inputToText').val(from);
        $('#inputToID').val(fromID);
        double_arrow_click.classList.remove("rotate");
    } else {
        var from = $('#inputFromText').val();
        var fromID = $('#inputFromID').val();
        var to = $('#inputToText').val();
        var toID = $('#inputToID').val();
        $('#inputFromText').val(to);
        $('#inputFromID').val(toID);
        $('#inputToText').val(from);
        $('#inputToID').val(fromID);
        double_arrow_click.classList.add("rotate");
    }
});

$(document).ready(function () {
    $('#inputFromText').click(function (e) {
        e.stopPropagation();
        $('#hintArrflight').addClass('search-input__hint--hidden')
        $('#hintDepflight').removeClass('search-input__hint--hidden')
        $('#hintDepflight').not($('#hintDepflight')).addClass('search-input__hint--hidden')
        $('#hintDepflight .search-input__hint-place').click(function () {
            var option = $(this).text();
            var optionID = $(this).data('id');
            $('#inputFromText').val(option);
            $('#inputFromID').val(optionID);
            $(this).addClass('search-input__hint-place--active');
            $('.search-input__hint-place').not($(this)).removeClass('search-input__hint-place--active');
            // Backend them value
            $('#hintDepflight').addClass('search-input__hint--hidden')
        })
    })

    $('#inputToText').click(function (e) {
        e.stopPropagation();
        $('#hintDepflight').addClass('search-input__hint--hidden')
        $('#hintArrflight').removeClass('search-input__hint--hidden')
        $('#hintArrflight').not($('#hintArrflight')).addClass('search-input__hint--hidden')
        $('#hintArrflight .search-input__hint-place').click(function () {
            var option = $(this).text();
            var optionID = $(this).data('id');
            $('#inputToText').val(option);
            $('#inputToID').val(optionID);
            $(this).addClass('search-input__hint-place--active');
            $('.search-input__hint-place').not($(this)).removeClass('search-input__hint-place--active');
            // Backend them value
            $('#hintArrflight').addClass('search-input__hint--hidden')
        })
    })

    $('#hintDepflight').click(function (e) {
        e.stopPropagation()
    })

    $('#hintArrflight').click(function (e) {
        e.stopPropagation()
    })

    $('html').click(function () {
        $('#hintDepflight').addClass('search-input__hint--hidden')
        $('#hintArrflight').addClass('search-input__hint--hidden')
    })
})