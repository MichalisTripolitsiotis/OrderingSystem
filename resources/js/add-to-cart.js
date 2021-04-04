$('.product-button').find('a').click(function (event) {

    event.preventDefault();
    $.ajax({
        url: $(this).attr('href'),
        success: function () {
            window.location.reload();
        }
    });
});