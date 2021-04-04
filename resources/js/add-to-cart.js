$('.product-button').find('a').click(function (event) {
    var val = parseInt($('.badge-danger').text());
    event.preventDefault();
    $.ajax({
        url: $(this).attr('href'),
        success: function (response) {
            $('.badge-danger').text(val + 1);
            $('#messages').addClass('alert-success').show(function () {
                $(this).html(response.success);
            });
        }
    });
});