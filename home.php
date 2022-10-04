<?php

session_start();
include './conn.php';

$cat_sql = "SELECT * FROM `tbl_add_catagory` limit 18";
$catrow = mysqli_query($con, $cat_sql);

$sql = "SELECT * FROM `tbl_add_book` where book_price_discount > 30 limit 15 ";
$run = mysqli_query($con, $sql);
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>home</title>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/headers/">
  <link rel="stylesheet" href="./assets/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="./assets/fontawesome/css/fontawesome.min.css">
  <link href="./assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.2/css/all.css">
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.3.0/mdb.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="headers.css" rel="stylesheet">
</head>

<body>
<?php 
$query = "SELECT * FROM `tbl_contest_participants` where `status` = 'winner'";
$row = mysqli_query($con, $query);
$fetch = mysqli_fetch_array($row);

$query1= "SELECT * FROM `competitions` where `competition_id` = '$fetch[0]'";
$row1 = mysqli_query($con, $query1);
$fetch1 = mysqli_fetch_array($row1)
  ?>
  
<div class="alert alert-primary border-none alert-dismissible fade show " role="alert">
  <i class="fa-regular fa-info-circle"></i>
  <strong>Winner Announcment! </strong> Congratulations <?php echo $fetch[2] ?> you are the winner of <b>"<?php echo $fetch1[2] ?> (<?php echo $fetch1[3] ?>)"</b>.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>


  <main>
<?php require './partials/_nav.php'; ?>
<?php require './partials/_slider.php' ?>
    <div class="container-fluid w-100 flash_sale pt-2 ">

      <div class="row  d-flex justify-content-between align-items-center px-2  py-3" style="background:#E9E8F9 ;">
        <div class="col-6 d-flex p-0 ">
       <div class="fw-bold fs-3 ms-2" style="color:#1C1A7D ;">
        Best Discounts
       </div>
          <style>
            .sale_end_counter span {
              background-color: #1C1A7D;
              color: #F1F0FE;
              margin: 4px;
              padding: 8px 13px;
              border-radius: 2px;
            }

            .card {
              width: 200px;
              height: 300px;
              color: #000;
              background-color: #FFF;

            }

            .card-img {
              width: 100%;
              max-height: 150px;
              text-align: center;
              background-color: #E9E8F9;

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

            @media only screen and (max-width:1102px) {
              .card {
                width: 290px;
              }
            }

            @media only screen and (max-width:638px) {
              .card {
                width: 200px;
              }
            }

            @media only screen and (max-width:460px) {
              .card {
                width: 80%;
              }
            }

            @media only screen and (max-width:320px) {
              .card {
                width: 100%;
              }
            }
          </style>
          
        </div>
        <div class="col-6 text-end p-0"><a class="btn btn border  btn-md shadow-sm" style="color:#F1F0FE;background:#1C1A7D;" href="./browse_product.php" type="submit">SHOP MORE<i class="ms-2 fas fa-arrow-right-long-to-line"></i></a></div>
      </div>
    </div>

    <div class="container-fluid card-container justify-content-evenly flex-wrap border d-flex  p-0" style="background-color: #E9E8F9;">
 <?php
      while ($row = mysqli_fetch_array($run)) {
      ?>
 <form method="post" action="./insertcart.php">

        <div class="card   my-3 shadow rounded">
          <div class="card-img  "><img class="img-fluid shadow " src="./images/<?php echo $row[1]  ?>" alt=""></div>
          <div class="card-name px-2"><?php echo $row[2]  ?></div>
          <div class="card-author px-2"><?php echo $row[3]  ?></div>

          <div class="card-discount-price px-2 mt-auto">$<?php echo $row[5]  ?></div>
          <div class="px-2 real-price-percent"><del class="real-price">$<?php  echo $row[4]   ?></del><span class="percent ms-1">-<?php echo $row[6]   ?>%</span></div>
          <div class="p-2 pt-0 d-flex justify-content-between "> <a href="#" class="btn  btn border  btn-sm shadow-sm" style="background:#F1F0FE;color:#1C1A7D;font-weight:600;text-transform:none;">Buy Now</a>
          <input class="btn  btn border  btn-sm shadow-sm" style="background:#F1F0FE;color:#1C1A7D;font-weight:600;text-transform:none;" type="submit" name='addcart' value="Add To Cart"></div>
          <input type="hidden" name="bookimg" value="<?php echo $row[1]?>">
          <input type="hidden" name="bookname" value="<?php echo $row[2]?>">
          <input type="hidden" name="bookauthname" value="<?php echo $row[3]?>">
          <input type="hidden" name="bookprice" value="<?php echo $row[5]?>">
          <input type="hidden" value="<?php echo $row[5]?>">
        </div>
 </form>

      <?php
      }
      ?>

    </div>


    <!-- catagories -->
    <style>
      .catagory {
        width: 100%;

        min-height: 297px;
      }

      .catagory-items {
        list-style: none;
        padding: 0;
        margin: 0;
      }

      .catagory-items li {
        padding: 1px;

        max-height: 150px;

      }

      .catagory-items li img {
        width: 100%;
        height: 100%;
      }

      @media only screen and (max-width:768px) {
        .break {
          display: block;
        }
      }
    </style>

    <div class="container-fluid my-3">
<div class="d-flex my-3">
<div class="fw-bold fs-3 ms-2 me-auto" style="color:#1C1A7D ;">Catagories</div>
<div><a class="btn btn border  btn-md shadow-sm" style="color:#F1F0FE;background:#1C1A7D;" href="./all_categories.php">SHOW MORE<i class="ms-2 fas fa-arrow-right-long-to-line"></i></a></div>

</div>
      <ul class="catagory-items row">
      <?php  
      while ($cat_row = mysqli_fetch_array($catrow)) {
        ?>
<li class=" col-6 position-relative col-md-2 col-sm-4 col-xs-12 hover-shadow  d-flex justify-content-center align-items-center"><img src="./images/<?php echo $cat_row[1] ?>" alt="">
          <p class="text-white mb-0 position-absolute "><?php echo $cat_row[2] ?></p>
      <a href="./catagory_pages.php?id=<?php echo $cat_row[2]?>"class="text-white mb-0 position-absolute w-100" style='height:100%;left:0;'></a>
      </li>
        
        <?php  
      }
      ?>
      </ul>


      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.3.0/mdb.min.js"></script>
    </div>
    <!-- catagories -->
    <?php  require 'partials/footer.php';?>

  </main>
</body>

<script src="./assets/bootstrap/js/bootstrap.bundle.min.js"></script>

</html>