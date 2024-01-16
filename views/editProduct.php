<?php include 'layouts/header.html';?>
<?php include 'layouts/navbar.php';?>
<?php include 'registar.php';?>
<?php include '../classes/Product.php';?>

<?php
$product = new Product;

// リンクで送られたデータ
$product_id = $_GET['id'];

$item = $product->showProduct($product_id);
?>

<body>
  <div class="mt-5 container text-center mx-auto">
    <div class="w-50 mx-auto">
      <h1 class="display-5 fw-bold text-warning text-center" id="myModalLabel"><i class="fa-solid fa-pen-to-square"></i> Edit Product</h1>
    </div>
    <form action="../actions/editProduct.php" method="POST" class="w-50 mx-auto">
      <div class="mt-3">
        <label for="product_name" class="form-label">Product Name</label>
        <input type="text" name="product_name" id="product_name" class="form-control" value="<?=$item['product_name']?>">
      </div>
      <div class="mt-2 row mb-3">
        <div class="col">
          <label for="product_price" class="form-label text-start">Price</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">$</div>
            </div>
            <input type="number" name="product_price" id="product_price" class="form-control" value="<?=$item['price']?>">
          </div>
        </div>
        <div class="col">
          <label for="quantity" class="form-label text-start">Quantity</label>
          <input type="number" name="quantity" id="quantity" class="form-control" value="<?=$item['quantity']?>">
        </div>
      </div>
      <button type="submit" class="btn btn-warning w-100 mb-5 mt-3" name="update_btn" value="<?=$item['id']?>">Edit</button>
    </div>
<?php include 'layouts/footer.html';?>