<?php 


?>
<style>
        .navbar-expand-lg .navbar-collapse {
            display: flex;
            justify-content: flex-end;
        }
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid d-flex">
    <a class="navbar-brand" href="/StudentInformation">Logo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/StudentInformation/index.php">Home</a>
        </li>
        <?php 
        session_start();
        if(isset($_SESSION['email'])) {
          echo "<li class='nav-item'><a class='nav-link' href='logout.php'>Logout</a></li>";
        }
        else {
          echo "<li class='nav-item'>
          <a class='nav-link' href='registration.php'>Registration</a>
        </li>
        <li class='nav-item'>
          <a class='nav-link' href='Login.php'>Login</a>
        </li>";
        }
        ?>
        
      </ul>
    </div>
  </div>
</nav>