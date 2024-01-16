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
      <h1 class="display-5 fw-bold text-success text-center" id="myModalLabel"><i class="fa-solid fa-cash-register"></i> Buy Product</h1>
    </div>
    <div class="w-50 mx-auto">
      <form action="payment.php" method="POST" class="w-50 mx-auto">
        <div class="mt-3 text-start">
          <label for="" class="form-label text-secondary">Product Name</label>
          <p class="fs-2 fw-bold"><?=$item['product_name']?></p>
        </div>
        <div class="mt-2 row mb-3">
          <div class="col mt-3 text-start">
            <label for="" class="form-label text-secondary">Price</label>
            <p class="fs-2 fw-bold">$<?=$item['price']?></p>
          </div>
          <div class="col mt-3 text-start">
            <label for="" class="form-label text-secondary">Stocks Left</label>
            <p class="fs-2 fw-bold"><?=$item['quantity']?></p>
          </div>
        </div>
        <div class="mt-3 text-start">
          <label for="" class="form-label text-secondary">Buy Quantity</label>
          <input type="number" name="buy_quantity" class="form-control" min="1" max="<?=$item['quantity']?>" required>
        </div>
        <button type="submit" class="btn btn-success w-100 mb-5 mt-4" name="btn-buy" value="<?=$item['id']?>">Buy</button>
      </form>
    </div>
  </div>
<?php include 'layouts/footer.html';?>