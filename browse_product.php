<?php
session_start();
include './conn.php';
$sql = "SELECT * FROM `tbl_add_book`";
$run = mysqli_query($con, $sql);

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.101.0">
  <title>home</title>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/headers/">
  <link rel="stylesheet" href="./assets/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="./assets/fontawesome/css/fontawesome.min.css">
  <link href="./assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.2/css/all.css">
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.3.0/mdb.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.2/css/all.css">
  <!-- Custom styles for this template -->
  <link href="headers.css" rel="stylesheet">
</head>

<body>
  <main >

    <?php require './partials/_nav.php'; ?>
    <div class='d-flex container-fluid p-0 pt-5   position-relative '>

      <style>
        .card {
          width: 220px;
          height: 320px;
          color: #000;
          background-color: #FFF;

        }

        .card-img {
          width: 100%;
          min-height: 170px;
          text-align: center;


        }

        .card-img img {
          height: 100%;

        }

        .card-name {
          font-size: 1rem;
          font-weight: 600;
          line-height: 20px;
          margin-top: 4px;
        }

        .card-author {
          line-height: 20px;
          font-size: 1rem;
          font-weight: 400;
        }

        .card-discount-price {
          color: #1C1A7D;
          font-weight: 600;
        }

        .real-price {
          color: #757575;
          font-weight: 100;
        }

        .card-discount-price {
          line-height: 20px;

        }

        .real-price-percent {
          font-size: .8rem;
          line-height: 20px;

        }

      </style>


<div class="container-fluid card-container justify-content-evenly flex-wrap border d-flex  p-0" style="background-color: #E9E8F9;">

      <?php

if(isset($_POST['submit'])){
  $keyword = $_POST['search'];
  $_SESSION['search'] = $keyword;
  $result= mysqli_query($con,"SELECT * from `tbl_add_book` where `book_name` like '%$keyword%' or `book_author` like '%$keyword%' or `book_catagory` like '%$keyword%'  ");
$count = mysqli_num_rows($result);

  ?>
    <div class="container_fluid text-dark position-absolute" style="left: 20px;top:10px;"><?php
    if($count > 0){
    echo $count .'  books found for ' . '"' . $keyword .'"'; 
    }else{
    echo "<div class='text-danger d-flex'>no results found for <div style='text-decoration: 1px underline red;'><i>$keyword</i></div></div>" ; 
    }
    ?></div>

  <?php
  while ($fetch = mysqli_fetch_array($result)) {
  ?>
    <form method="post" class="my-1" action="./insertcart.php">
      <div class="card  rounded-none ">
        <div class="card-img"><img class="img-fluid shadow " src="./images/<?php echo $fetch[1]  ?>" alt=""></div>
        <div class="card-name px-2"><?php echo $fetch[2]  ?></div>
        <div class="card-author px-2"><?php echo $fetch[3]  ?></div>
  
        <div class="card-discount-price px-2 mt-auto">$<?php echo $fetch[5]  ?></div>
        <div class="px-2 real-price-percent"><del class="real-price">$<?php echo $fetch[4]   ?></del><span class="percent ms-1">-<?php echo $fetch[6]   ?>%</span></div>
        <div class="p-2 pt-0 d-flex justify-content-between ">
          <a class="btn  btn border  btn-sm shadow-sm" style="background:#F1F0FE;color:#1C1A7D;font-weight:600;text-transform:none;" type="submit">Buy Now</a>
  
          <input class="btn  btn border  btn-sm shadow-sm" style="background:#F1F0FE;color:#1C1A7D;font-weight:600;text-transform:none;" type="submit" name='addcart' value="Add To Cart">
        </div>
        <input type="hidden" name="bookimg" value="<?php echo $fetch[1] ?>">
        <input type="hidden" name="bookname" value="<?php echo $fetch[2] ?>">
        <input type="hidden" name="bookauthname" value="<?php echo $fetch[3] ?>">
        <input type="hidden" name="bookprice" value="<?php echo $fetch[5] ?>">
        <input type="hidden" value="<?php echo $fetch[5] ?>">
      </div>
    </form>
  <?php
  }
}else{
  ?>
  <?php
  while ($row = mysqli_fetch_array($run)) {
  ?>
    <form method="post" class="my-1" action="./insertcart.php">
      <div class="card  rounded-none ">
        <div class="card-img"><img class="img-fluid shadow " src="./images/<?php echo $row[1]  ?>" alt=""></div>
        <div class="card-name px-2"><?php echo $row[2]  ?></div>
        <div class="card-author px-2"><?php echo $row[3]  ?></div>
  
        <div class="card-discount-price px-2 mt-auto">$<?php echo $row[5]  ?></div>
        <div class="px-2 real-price-percent"><del class="real-price">$<?php echo $row[4]   ?></del><span class="percent ms-1">-<?php echo $row[6]   ?>%</span></div>
        <div class="p-2 pt-0 d-flex justify-content-between ">
          <a class="btn  btn border  btn-sm shadow-sm" style="background:#F1F0FE;color:#1C1A7D;font-weight:600;text-transform:none;" type="submit">Buy Now</a>
  
          <input class="btn  btn border  btn-sm shadow-sm" style="background:#F1F0FE;color:#1C1A7D;font-weight:600;text-transform:none;" type="submit" name='addcart' value="Add To Cart">
        </div>
        <input type="hidden" name="bookimg" value="<?php echo $row[1] ?>">
        <input type="hidden" name="bookname" value="<?php echo $row[2] ?>">
        <input type="hidden" name="bookauthname" value="<?php echo $row[3] ?>">
        <input type="hidden" name="bookprice" value="<?php echo $row[5] ?>">
        <input type="hidden" value="<?php echo $row[5] ?>">
      </div>
    </form>
  <?php
  }
}
  

        ?>

      </div>
    </div>
<?php  require 'partials/footer.php';?>

  </main>
</body>
<script src="./assets/bootstrap/js/bootstrap.bundle.min.js"></script>

</html>