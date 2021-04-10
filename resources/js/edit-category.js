$(document).ready(function () {
    $("#edit-category-modal").on("show.bs.modal", function (e) {
        var id = $(e.relatedTarget).data('target-id');
        var name = $(e.relatedTarget).data('name');
        modal = $(this);
        modal.find('.modal-body #category_edit_name').val(name);
    });
});