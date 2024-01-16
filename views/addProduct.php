<div class="modal fade modal-lg" id="addModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog w-80">
    <div class="modal-content">
      <button type="button" class="btn btn-default text-end text-secondary" data-dismiss="modal" id="close_btn"><i class="fa-solid fa-x"></i></button>
      <div class="modal-body w-80 mx-auto">
        <form action="../actions/addProduct.php" method="POST">
          <h1 class="display-5 fw-bold text-info text-center" id="myModalLabel"><i class="fa-solid fa-box"></i> Add Product</h1>
          <div class="mt-3">
            <label for="product_name" class="form-label">Product Name</label>
            <input type="text" name="product_name" id="product_name" class="form-control">
          </div>
          <div class="mt-2 row mb-3">
            <div class="col">
              <label for="product_price" class="form-label text-start">Price</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">$</div>
                </div>
                <input type="number" name="product_price" id="product_price" class="form-control">
              </div>
            </div>
            <div class="col">
              <label for="quantity" class="form-label text-start">Quantity</label>
              <input type="number" name="quantity" id="quantity" class="form-control">
            </div>
          </div>
          <button type="submit" class="btn btn-info w-100 mb-5 mt-3">Add</button>
        </form>
      </div>
    </div>
  </div>
</div>