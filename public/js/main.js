$(document).ready(function () {
    $('body').css('padding-top', $('#nav').height())
    $('body').attr('data-bs-theme', 'light');
    $('.dropdown-menu button').click(function (e) {
        if (e.target.innerText == 'Jasno') {
            $('body').attr('data-bs-theme', 'light');
        } else {
            $('body').attr('data-bs-theme', 'dark');

        }
    });
})
