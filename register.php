<?php 
include 'dbConnection.php';
  if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    $selectSql = "SELECT `email` FROM `reginfo`WHERE email = '$email'";
    $selectQuery = mysqli_query($conn, $selectSql);
    $selectCount = mysqli_num_rows($selectQuery);
    if($selectCount == 0) {
        $insertSql = "INSERT INTO `reginfo`(`uName`, `email`, `password`, `cpassword`) VALUES ('$fname','$email','$password','$cpassword')";
        $insertQuery = mysqli_query($conn, $insertSql);
        if($insertQuery) {
          session_start();
          $_SESSION['username'] = $fname;
          $_SESSION['email'] = $email;
          $_SESSION['password'] = $password;

          header('location: index.php');
        }
    } else {
        echo "email already exist";
    }

    
  }
?>