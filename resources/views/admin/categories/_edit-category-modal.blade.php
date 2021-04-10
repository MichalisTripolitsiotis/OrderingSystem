<div class="modal fade" id="edit-category-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <form action="{{ route('categories.update', $category) }}" method="POST" role="form" enctype="multipart/form-data">
      @csrf
      @method('PUT')
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header text-center">
            <h4 class="modal-title w-100 font-weight-bold">Edit Category</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="md-form mb-2">
              <input type="text" id="category_edit_name" name="category_edit_name" class="form-control">
              <label data-error="wrong" data-success="right" for="category_edit_name">Category name</label>
            </div>
            <div class="md-form mb-5">
              <input id="category_edit_image" type="file" class="form-control" name="category_edit_image">
            </div>
        </div>
        <div class="modal-footer d-flex justify-content-center">
            <button class="btn btn-success">Edit</button>
        </div>
        </div>
    </div>
  </form>
</div>