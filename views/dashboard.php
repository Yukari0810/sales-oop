<?php include 'layouts/header.html';?>
<?php include 'layouts/navbar.php';?>
<?php include 'addProduct.php';?>
<?php include '../classes/Product.php';
$product = new Product;
?>

<body class="">
  <div style="height:100vh" class="">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-start fs-2 fw-bold mt-5">Product list</h1>
            </div>
            <div class="col text-info text-end mt-5 fs-2">
              <a class="text-info" data-toggle="modal" data-target="#addModal"><i class="fa-solid fa-plus"></i></a>
            </div>
        </div>
      <table class="table table-hover table-light mt-3">
        <thead class="table-dark">
          <tr class="fw-bold">
            <td>ID</td>
            <td>Product Name</td>
            <td>Price</td>
            <td>Quantity</td>
            <td></td>
            <td></td>
          </tr>
        </thead>
        <tbody>
        <?php
          foreach($product->displayProducts() as $item){
            ?>
            <tr class="">
              <td><?= $item['id']?></td>
              <td><?= $item['product_name']?></td>
              <td><?= $item['price']?></td>
              <td><?= $item['quantity']?></td>
              <td class="d-flex">
                <a href="editProduct.php?id=<?= $item['id']?>" class="btn btn-warning text-dark inline-block"><i class="fa-solid fa-pen-to-square"></i></a>
                <form action="../actions/deleteProduct.php" method="POST">
                  <button type="submit" class="btn btn-danger text-light ms-1" value="<?= $item['id']?>" name='delete-btn'><i class="fa-solid fa-trash"></i></button>
                </form>
              </td>
              <td class="">
              <?php
              if($item['quantity'] > 0){
                ?>
                <a href="buyProduct.php?id=<?= $item['id']?>" class="btn btn-success text-light inline-block"><i class="fa-solid fa-cash-register"></i></a>
                <?php
                }
                ?>
              </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
      </table>
    </div>
  </div>
<?php include 'layouts/footer.html';?>
 