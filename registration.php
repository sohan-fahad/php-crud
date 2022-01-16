

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Registration</title>
</head>
<body>
    <?php include 'navbar.php'; ?>

    <div class="container">
      <h1 class="text-center mt-5">Create an Account</h1>
      <form class="mt-3" name="myForm" action="register.php" onsubmit="return validateForm()" method="post">
      Name: <input id="fname" class="form-control mb-3" type="text" name="fname">
      <label for="" id="err-name"></label> <br>
      Email: <input class="form-control mb-3" type="email" name="email">
      Password: <input class="form-control mb-3" type="password" name="password">
      Re-password: <input class="form-control mb-3" type="password" name="cpassword" onchange="matchPass()">
      <label for="" id="err-cpassword"></label>
      <input type="submit" name="submit" class="form-control" value="Submit">
    </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="app.js"></script>
</body>
</html>