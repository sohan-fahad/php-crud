<?php 
    include 'dbConnection.php';
    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $selectSql = "SELECT `email`, `password` FROM `reginfo` WHERE email = '$email'";
        $selectQuery = mysqli_query($conn, $selectSql);
        $selectArray = mysqli_fetch_array($selectQuery);



        $selectCount = mysqli_num_rows($selectQuery);
        if($selectCount == 1) {
            if($selectArray['email']== $email && $selectArray['password'] == $password) {
                session_start();
                $_SESSION['email'] = $email;
                header('location:index.php');
            }
        }
        else {
                echo "email or password incorrect";
            }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <?php include 'navbar.php'; ?> 
    <div class="container mt-5">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
            </div>
            <button type="submit" name="login" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>