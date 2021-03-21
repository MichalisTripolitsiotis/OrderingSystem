$(".remove-from-cart").click(function (e) {
    e.preventDefault();
    var ele = $(this);
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: 'remove-from-cart',
        method: "DELETE",
        data: { id: ele.attr("data-id") },
        success: function (response) {
            window.location.reload();
        }
    });
});