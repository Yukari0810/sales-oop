<?php include 'layouts/header.html';?>
<?php include 'layouts/navbar.php';?>
<?php include 'registar.php';?>
<?php include '../classes/Product.php';?>

<?php
$product = new Product;

$product_id = $_POST['btn-buy'];
$buy_quantity = $_POST['buy_quantity'];

$item = $product->showProduct($product_id);

$purchase_price = $product->showPrice($buy_quantity, $product_id);
?>

<body>
  <div class="mt-5 container text-center mx-auto">
    <div class="w-50 mx-auto">
      <h1 class="display-5 fw-bold text-success text-center" id="myModalLabel"><i class="fa-solid fa-hand-holding-dollar"></i> Payment</h1>
    </div>
    <div class="w-50 mx-auto">
      <form action="../actions/payProduct.php" method="POST" class="w-50 mx-auto">
        <div class="mt-3 text-start">
          <label for="" class="form-label text-secondary">Product Name</label>
          <p class="fs-2 fw-bold"><?=$item['product_name']?></p>
        </div>
        <div class="mt-2 row mb-3">
          <div class="col mt-3 text-start">
            <label for="" class="form-label text-secondary">Price</label>
            <p class="fs-2 fw-bold">$<?=$purchase_price?></p>
          </div>
          <div class="col mt-3 text-start">
            <label for="" class="form-label text-secondary">Buy Quantity</label>
            <input type="hidden" name="buy_quantity" value="<?=$buy_quantity?>">
            <p class="fs-2 fw-bold"><?=$buy_quantity?></p>
          </div>
        </div>
        <div class="mt-3 text-start">
          <label for="" class="form-label text-secondary">Payment</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">$</div>
            </div>
            <input type="number" name="pay_amount" id="pay_amount" class="form-control" min="<?=$purchase_price?>" required>
          </div>
        </div>
        <button type="submit" class="btn btn-success w-100 mb-5 mt-4" name="btn-pay" value="<?=$item['id']?>">Buy</button>
      </form>
    </div>
  </div>
<?php include 'layouts/footer.html';?>