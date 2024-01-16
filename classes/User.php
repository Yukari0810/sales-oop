<?php
include 'Database.php';

class User extends Database{
  // functionのdefaultはpublic
  public function registar($request){
    $first_name = $request['first_name'];
    $last_name = $request['last_name'];
    $username = $request['username'];
    $password = $request['password'];

    $hashed = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (first_name, last_name, username, password) VALUES ('$first_name', '$last_name', '$username', '$hashed')";

    if($this->conn->query($sql)){
      header('location: ../views/login.php');
      exit;
    }else{
      die("ERROR: ". $this->conn->error);
    }

  }

  function login($login_request){
    $username = $login_request['username'];
    $password = $login_request['password'];

    $sql = "SELECT * FROM users WHERE username = '$username'";
    if($result = $this->conn->query($sql)){
      if($result -> num_rows == 1){
        $user = $result->fetch_assoc();
        
        if(password_verify($password, $user['password'])){
          // セッションを開始する
          session_start();
          $_SESSION['username'] = $user['username'];
          $_SESSION['user_id'] = $user['id'];
          header('location: ../views/dashboard.php');
        }else{
          // func_alert('Invalid Password');
        }
        exit;
      }else{
        // invalid usernameと表示する
        // func_alert('Invalid Username');
      }
    }else{
      die ("ERROR: ". $this->$conn->error);
    }
  }

  function displayUsers(){
    $sql = "SELECT * FROM users";

    if($result = $this->conn->query($sql)){
      return $result;
    }else{
      die("ERROR: ". $this->conn->error);
    }
  }

  function update($update_request, $update_photo){
    $first_name = $update_request['first_name'];
    $last_name = $update_request['last_name'];
    $username = $update_request['username'];
    $id = $update_request['update_btn'];
    $photo_name = $update_photo['file_upload']['name'];
    $photo_tmp = $update_photo['file_upload']['tmp_name'];

    $sql = "UPDATE users SET first_name = '$first_name', last_name = '$last_name', username = '$username' WHERE id = $id";

    if($this->conn->query($sql)){
      if($photo_name){

        $new_file_name = 'user_id_'. $id. '_'. $photo_name;
      
        // 保存先も作る
        $destination = '../assets/images/' . $new_file_name; 
  
        $sql = "UPDATE users SET photo ='$new_file_name' WHERE id = $id";
  
        if($this->conn->query($sql)){
          move_uploaded_file($photo_tmp, $destination);
          
        }else{
          die("ERROR: ". $this->conn->error);
        }
      }
      header('location: ../views/dashboard.php');
    }else{
      die("ERROR: ". $this->conn->error);
    }

  }
    

  function delete($delete_request){
    $user_id = $delete_request['delete_btn'];
    $sql = "DELETE FROM users WHERE id = $user_id";

    if($this->conn->query($sql)){
      header('location: ../views/sign-in.php');
    }else{
      die("ERROR: ". $this->conn->error);
    }
  }
  function showProfile($profile_id){

    $sql = "SELECT * FROM users WHERE id = $profile_id";

    if($result = $this->conn->query($sql)){
      return $result->fetch_assoc();
    }else{
      die("ERROR: ". $this->conn->error);
    }
  }
}


?>