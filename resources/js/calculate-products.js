
$(document).ready(function () {
    update_subtotals();
    $(document).on('change', '.quantity', function () {
        update_subtotals();
    });
});

window.update_subtotals = function () {
    var sum = 0;
    $('.product').each(function () {
        var qty = $(this).find('.quantity').val();
        var price = $(this).find('.priceInput').val();
        var amount = (qty * price)
        sum += amount;
        $(this).find('.subtotal').html('$' + amount);

    });
    $('.final-price').html('<strong> Total $' + sum + '</strong>');
    $('.total').val(sum);
}
