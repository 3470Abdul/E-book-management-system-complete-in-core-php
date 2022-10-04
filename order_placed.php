<?php
include 'conn.php';
session_start();
if (!isset($_SESSION['userloggedin']) || $_SESSION['userloggedin'] != true) {
    header('location: ./login.php');
    exit;
  
}

?>
<?php

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>order placed</title>
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

    <?php require './partials/_nav.php'; ?>
    <div class="container mx-auto  my-4" style="background:#fff ;">
        <div class="d-flex py-3  justify-content-center align-items-center fs-4" style="color: green;"><i class="fas fs-2 fa-clock me-2"></i> Thank you for your purchase!</div>

        <div class="col-8 mx-auto">
            <div class="fs-5 text-dark"></div>
            <div class="card my-3 border rounded-0">
                <div class="card-header border-bottom d-flex">
                 <div class="" style="color:green ;">Order Completed Successfully</div>
          
                 <div class="ms-auto"></div>
                </div>
                <div class="card-body">
                   
                    <p class="card-text">Thank you for this purchase.Your order will be delivered to you very soon,Please take it our plans and get benefitial discount vouchers. </p>
                    <a href="#" class="btn text-light" style="background-color: #6461f8;">Browse more books</a>
                </div>
            </div>
            <div class=" d-flex align-items-center   shadow-sm text-primary" style="border:1px solid #a5a5fc ;">
            <div class="p-4" style="color: #6461f8;background-color:#dedefc;"><i class="fa-regular fs-4 fa-envelope"></i></div>
            <div class="text-dark p-2" style="font-size:.9rem ;">We’ve sent a confirmation email to <b><?php echo $_SESSION['email']; ?></b> with the order details.</div>
        </div>
      
        <div class="accordion my-3 rounded-0" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button text-dark fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">

                            <div class="d-flex   align-middle">
                                <div class=" text-dark" style="font-size:.9rem;">Total Items (<?php echo count($_SESSION['cart']) ?> items)</div>
                                <div class="ms-auto position-absolute fw-bold" style="right:55px;color:#1C1A7D;"><?php echo $_SESSION['total_price'] ?>$</div>
                            </div>
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body p-2">


                            <?php
                            $total = 0;
                            if (isset($_SESSION['cart'])) {

                                foreach ($_SESSION['cart'] as $key => $value) {
                            ?>
                                    <div class="d-flex justify-content-between py-2 align-items-center border-bottom ">
                                        <div class="d-flex align-items-center ">
                                            <div style="width:40px;" scope="row"><img height="100%" src="images/<?php echo $value['bookimg'] ?>" class="img-fluid"></div>
                                            <div class="ms-2"><?php echo $value['productname'] ?> (<?php echo $value['qty'] ?>)</div>
                                        </div><br><br>

                                        <div>$<?php echo $value['productprice']  ?></div>
                                   
                                    </div>



                            <?php

                                }
                            }

                            ?>

                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex  mt-4 px-3  align-middle">
                <div class="text-dark" style="font-size:.9rem;">Shipping Fee </div>
                <div class="ms-auto  fw-bold" style="color:#1C1A7D  ;">$0.00</div>
            </div>

            <div class="d-flex  mt-2 py-2 px-3 rounded border-bottom align-middle" style="background:#F1F0FE ;">
                <div class=" text-dark" style="font-size:.9rem;">Total Payment </div>
                <div class="ms-auto fw-bold" style="color:#1C1A7D  ;"><?php echo $_SESSION['total_price'] ?>$</div>
            </div>
          
        <div class="container text-center my-3">
            <a href="./browse_product.php" class="btn text-light" style="background-color: #6461f8;text-transform:none;">CONTINUE SHOPPING</a>
        </div>
        <br><br>
    </div>
    <?php  require 'partials/footer.php';?>

</body>
<script src="./assets/bootstrap/js/bootstrap.bundle.min.js"></script>

</html>