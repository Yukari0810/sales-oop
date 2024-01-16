<?php
include 'Database.php';

class Product extends Database{
  // functionのdefaultはpublic
  public function addProduct($request){
    $name = $request['product_name'];
    $price = $request['product_price'];
    $quantity = $request['quantity'];

    $sql = "INSERT INTO products (product_name, price, quantity) VALUES ('$name', '$price', '$quantity')";

    if($this->conn->query($sql)){
      header('location: ../views/dashboard.php');
      exit;
    }else{
      die("ERROR: ". $this->conn->error);
    }

  }

  function displayProducts(){
    $sql = "SELECT * FROM products";

    if($result = $this->conn->query($sql)){
      return $result;
    }else{
      die("ERROR: ". $this->conn->error);
    }
  }

  function updateProduct($update_request){
    $name = $update_request['product_name'];
    $price = $update_request['product_price'];
    $quantity = $update_request['quantity'];
    $id = $update_request['update_btn'];

    $sql = "UPDATE products SET product_name = '$name', price = $price, quantity = $quantity WHERE id = $id";

    if($this->conn->query($sql)){
      header('location: ../views/dashboard.php');
    }else{
      die("ERROR: ". $this->conn->error);
    }

  }
    

  function deleteProduct($delete_request){
    $product_id = $delete_request['delete-btn'];

    $sql = "DELETE FROM products WHERE id = $product_id";

    if($this->conn->query($sql)){
      header('location: ../views/dashboard.php');
    }else{
      die("ERROR: ". $this->conn->error);
    }
  }

  function showProduct($product_id){

    $sql = "SELECT * FROM products WHERE id = $product_id";

    if($result = $this->conn->query($sql)){
      return $result->fetch_assoc();
    }else{
      die("ERROR: ". $this->conn->error);
    }
  }

  function payProduct($pay_request){
    $id = $pay_request['btn-pay'];
    $buy_quantity = $pay_request['buy_quantity'];

    $sql = "SELECT * FROM products WHERE id = $id";

    if($result = $this->conn->query($sql)){
      $result = $result->fetch_assoc();
      $new_quantity = $result['quantity'] - $buy_quantity;

      if($new_quantity < 0){
        $new_quantity = 0;
      }
      $sql = "UPDATE products SET quantity = '$new_quantity' WHERE id = $id";

      if($this->conn->query($sql)){
        header('location: ../views/dashboard.php');
      }else{
        die("ERROR: ". $this->conn->error);
      }

    }else{
      die("ERROR: ". $this->conn->error);
    }
    
  }

  function showPrice($buy_quantity, $product_id){
    $sql = "SELECT price FROM products WHERE id = $product_id";

    if($result = $this->conn->query($sql)){
      $result = $result->fetch_assoc();
      return $buy_quantity * $result['price'];
    }else{
      die("ERROR: ". $this->conn->error);
    }
  }

}



?>