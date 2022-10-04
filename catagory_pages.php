<?php
include './conn.php';
$name = $_GET['id'];
$query = "SELECT * FROM tbl_add_book where `book_catagory`='$name' ";
$result = mysqli_query($con,$query);

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $name ?></title>
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
    <main>
        <?php require './partials/_nav.php'; ?>
        <div class="container-fluid w-100 flash_sale pt-2 ">
   
     
       
       
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
        
      


    <div class="container-fluid fs-2 fw-bold" style="color:#1C1A7D;">Category</div>
    <div class="container-fluid text-dark fs-5"><?php echo $name ?></div>

    <div class="container-fluid card-container justify-content-evenly flex-wrap border d-flex  p-0" style="background-color: #E9E8F9;">
 <?php
      while ($row = mysqli_fetch_array($result)) {
      ?>
 <form method="post" action="./insertcart.php">

        <div class="card   my-3 shadow rounded">
          <div class="card-img  "><img class="img-fluid shadow " src="./images/<?php echo $row[1]  ?>" alt=""></div>
          <div class="card-name px-2"><?php echo $row[2]  ?></div>
          <div class="card-author px-2"><?php echo $row[3]  ?></div>

          <div class="card-discount-price px-2 mt-auto">$<?php echo $row[5]  ?></div>
          <div class="px-2 real-price-percent"><del class="real-price">$<?php  echo $row[4]   ?></del><span class="percent ms-1">-<?php echo $row[6]   ?>%</span></div>
          <div class="p-2 pt-0 d-flex justify-content-between "> <button class="btn  btn border  btn-sm shadow-sm" style="background:#F1F0FE;color:#1C1A7D;font-weight:600;text-transform:none;" type="submit">Buy Now</button>
          <input href="./cart.php" class="btn  btn border  btn-sm shadow-sm" style="background:#F1F0FE;color:#1C1A7D;font-weight:600;text-transform:none;" type="submit" name='addcart' value="Add To Cart"></div>
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

    <?php  require 'partials/footer.php';?>

    </main>
</body>
<script src="./assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</html>