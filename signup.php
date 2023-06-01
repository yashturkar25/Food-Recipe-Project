<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){ 
    include 'partial/_dbconnect.php'; 
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
  //  $exists=false;
    $existSql = "SELECT * FROM `users` WHERE username = '$username'";
    $result = mysqli_query($conn ,$existSql);
    $numExistRows = mysqli_num_rows ($result);
    if($numExistRows > 0){
      // $exists = true;
      $showError = 'username Already Exists';
    }
    else{
      $exists = false ;
    if(($password == $cpassword) && $exists==false){
        $sql = "INSERT INTO `users` ( `username`, `password`, `dt`) VALUES ('$username', '$password', current_timestamp())";
        $result = mysqli_query($conn, $sql);
        if ($result){
            $showAlert = true;
        }
    }
    else{
        $showError = 'Password do not match';
    }
  }
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>signup</title>
  </head>
  <body>
    <?php require 'partial/_nav.php' ?>
    <?php
    if($showAlert){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> You account is now created and you can login
</div>';
}    
if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong> Error! </strong>' .$showError.'
</div> ';
}
?>

    <div class="container">
        <h1 class="text-center">Signup yo our website</h1>
        <form action="/login_cs/signup.php" method="post">
  <div class="form-group col-md-6">
    <label for="username" class="form-label">Username</label>
    <input type="text" maxlength="15"  class="form-control" id="username" name="username" aria-describedby="emailHelp">
  </div>
  <div class="form-group col-md-6">
    <label for="password" class="form-label">Password</label>
    <input type="password" maxlength="25" class="form-control" id="password" name="password">
  </div>
  <div class="form-group col-md-6">
    <label for="cpassword" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="cpassword" name="cpassword">
    <div id="emailHelp" class="form-text">Make sure to type the same password.</div>
  </div>
  <button type="submit" class="btn btn-primary ">Signup</button>
</form>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    
  </body>
</html>