<div class="modal fade" id="add-category-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <form action="{{ route('categories.store') }}" method="POST" role="form" enctype="multipart/form-data">
    @csrf
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header text-center">
            <h4 class="modal-title w-100 font-weight-bold">Add Category</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="md-form mb-2">
            <input type="text" id="category_name" name="category_name" class="form-control">
            <label for="category_name">Category's name</label>
            </div>
            <div class="md-form mb-5">
            <input id="category_image" type="file" class="form-control" name="category_image">
            <label for="category_image">Category's image</label>
            </div>
        </div>
        <div class="modal-footer d-flex justify-content-center">
            <button class="btn btn-success">Create</button>
        </div>
        </div>
    </div>
  </form>
</div>