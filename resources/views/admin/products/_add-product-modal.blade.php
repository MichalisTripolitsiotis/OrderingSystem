<div class="modal fade" id="add-product-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <form action="{{ route('products.store') }}" method="POST" role="form" enctype="multipart/form-data">
    @csrf
    <div class="modal-dialog" role="document">
        @if ($categories->isEmpty())
            <p class="alert alert-danger">You have to create a category to create a product</p>
        @else     
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Add product</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <input type="text" id="product_name" name="product_name" class="form-control">
                    <label data-error="wrong" data-success="right" for="product_name">Product name</label>
                </div>
                <div class="form-group">
                    <select id="product_category" name="product_category" class="form-control">
                        <option></option>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                    <label for="product_category">Product's category</label>    
                </div>
                <div class="form-group">
                    <input id="product_image" type="file" class="form-control" name="product_image">
                     <label for="product_image">Product's image</label> 
                </div>
                 <div class="form-group">
                    <input id="product_price" type="number" class="form-control" name="product_price">
                    <label for="product_price">Product's price</label> 
                </div>
                <div class="form-group">
                    <textarea class="form-control" id="product_description"  name="product_description" rows="3"></textarea>
                    <label for="product_description">Product's description</label> 
                </div>
                 <div class="form-group">
                    <input id="tags" type="text" class="form-control" name="tags">
                    <label for="tags">Product's ingredients</label> 
                    <p><small><mark>Add product ingredients separated with comma(s)</mark></small></p>
                </div>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button class="btn btn-success">Create</button>
            </div>
        </div>
        @endif
    </div>
  </form>
</div>