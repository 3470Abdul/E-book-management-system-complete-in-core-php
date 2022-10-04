<?php

$count = false;
if (isset($_SESSION['cart'])) {
  $count = true;
}
if (!isset($_SESSION['userloggedin']) || $_SESSION['userloggedin'] != true) {
  $login = false;
} else {
  $login = true;
}
?>

<nav class="navbar navbar-expand-sm navbar-light border-bottom p-0 shadow-none" style="background:#F1F0FE;">
  <div class="container-fluid">
    <a class="navbar-brand fs-1 " style="color: #1C1A7D;" href="#">E-BOOK</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <form method="POST" action="./browse_product.php"  class="d-flex col-8 mx-auto position-relative">
        <input class="form-control " value="" name="search"  type="search" placeholder="Search" aria-label="Search">
        <button class="btn text-light position-absolute" name="submit" type="submit" style="right:0;height:100%;background-color: #1C1A7D;border-top-left-radius:0;border-bottom-left-radius:0;"><i class="fa-regular fa-magnifying-glass"></i></button>
      </form>

      <a class="me-3 position-relative mt-2" style="color:#1C1A7D;" href="./cart.php"><i class="fa-regular fa-cart-shopping fs-4"></i>

        <?php if ($login) {
        ?><span class="position-absolute top-0 start-100 translate-middle  badge rounded-pill " style="background-color:#6461f8 ;">
            <?php if ($count) {
              echo count($_SESSION['cart']);
            } else {
              echo '0';
            };

            ?></span>
        <?php
        } ?>
      </a>

      <?php
      if ($login) {

      ?>
        <style>
          .container {
            z-index: 9999;
          }

          .action {
            position: relative;
            top: 0px;
            right: 0px;
          }

          .action .profile {
            position: relative;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            cursor: pointer;
          }

          .action .profile::before {
            content: '';
            position: absolute;
            width: 12px;
            height: 12px;
            bottom: 0px;
            right: 0;
            border-radius: 50%;
            background-color: #6461f8;
            z-index: 2;
            border: 2px solid #F1F0FE;
          }

          .action .profile i {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
            font-size: 1.7rem;
            color: #1C1A7D;
          }

          .action .menu {
            position: absolute;
            top: 120px;
            right: -10px;
            padding: 10px 20px;
            background: #fff;
            width: 250px;
            box-sizing: 0 5px 25px rgba(0, 0, 0, .1);
            display: none;

          }

          .action .menu.active {
            top: 75px;
            display: block;

          }

          .action .menu::before {
            content: '';
            position: absolute;
            top: -5px;
            right: 28px;
            width: 20px;
            height: 20px;
            background: #fff;
            transform: rotate(45deg);
          }

          .action .menu h3 {
            width: 100%;
            text-align: center;
            font-size: 18px;
            padding: 20px 0;
            font-weight: 500;
            font-size: 18px;
            color: #555;
            line-height: 1.2em;
          }

          .action .menu h3 span {
            font-size: 14px;
            color: #000;
            font-weight: 400;
          }

          .action .menu ul li {
            list-style: none;
            padding: 10px 0;

            display: flex;
            align-items: center;

          }

          .action .menu ul li i {
            font-size: 1rem;
            margin-right: 15px;

          }

          .action .menu ul li a,
          .user-name {
            display: inline-block;
            text-decoration: none;
            color: #000;
            font-weight: 500;

          }

          .user-name {
            margin: 5px 20px;
            font-size: 1.3rem;

          }

          .action .menu ul li:hover a {
            color: #1C1A7D;
          }
        </style>
        <div class="action" style="z-index:9999;">
          <div class="profile">
            <i class="fa-light fa-circle-user"></i>
          </div>
          <div class="menu shadow">
            <div class="d-flex">
              <div class="profile d-flex justify-content-center align-items-center" style="width:45px;height:45px;">
                <i class="fa-light fa-circle-user fs-1"></i>
              </div>
              <span class="user-name "><?php echo $_SESSION['username']; ?></span>
            </div>
            <ul>
              <li>
                <i class="fas fa-shopping-cart"></i>
                <a href="./cart.php">My Cart</a>
              </li>

              <li>
                <i class="fas fa-user-cog"></i>
                <a href="#">Settings</a>
              </li>
              <li>
                <i class="fas fa-question-circle"></i>
                <a href="#">Help</a>
              </li>
              <li style="border-top:1px solid rgba(0,0,0,0.1);">
                <i class="fas fa-envelope"></i>
                <a href="./logout.php">log out</a>
              </li>
            </ul>
          </div>
        </div>

        <script>
          const tap = document.querySelector('.profile');
          tap.addEventListener('click', function() {
            const toggleMenu = document.querySelector('.menu');
            toggleMenu.classList.toggle('active');
          });
        </script>
    </div>
    <!-- User Account Dropdown closed -->
  <?php
      }
  ?>

  <?php

  ?>
  </div>
  </div>
</nav>
<style>
  body {
    background-color: #F1F0FE !important;
  }
</style>
<nav class="p-2 border-bottom" style="background-color: #E9E8F9a0;">
  <div class="container-fluid p-0 d-flex flex-wrap">
    <ul class="nav me-auto" style="font-size: 0.9rem;">
      <li class="nav-item"><a href="./home.php" class="nav-link link-dark px-2 active" aria-current="page">Home</a></li>
      <li class="nav-item"><a href="./about.php" class="nav-link link-dark px-2">About us</a></li>
      <li class="nav-item"><a href="./plans.php" class="nav-link link-dark px-2">Plans & Price</a></li>
      <li class="nav-item"><a href="./contest.php" class="nav-link link-dark px-2">Competitions</a></li>
      <li class="nav-item"><a href="./contact.php" class="nav-link link-dark px-2">Contact us</a></li>
    </ul>
    <?php
    if (!$login) {
    ?>
      <ul class="nav">
        <li class="nav-item me-2">
          <a class="btn btn border  btn-md shadow-sm" href="./signup.php" style="background:#F1F0FE;color:#1C1A7D;font-weight:600;" type="submit"><i class="fa-solid fa-user-plus me-2"></i>Sign Up</a>
        </li>
        <li class="nav-item">
          <a href="./login.php" class="btn btn border  btn-md shadow-sm" style="background:#F1F0FE;color:#1C1A7D;font-weight:600;" type="submit"><i class="fa-solid fa-right-to-bracket me-2"></i> Login</a>
        </li>
      </ul>
    <?php
    }
    ?>
  </div>
</nav>