<?php
session_start();
if (!isset($_SESSION['userloggedin']) || $_SESSION['userloggedin'] != true) {
    header('location: ./login.php');
    exit;
}
include 'conn.php';
$count = false;
if (isset($_SESSION['cart'])) {
    $count = true;
}
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>cart</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/headers/">
    <link rel="stylesheet" href="./assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="./assets/fontawesome/css/fontawesome.min.css">
    <link href="./assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.3.0/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.2/css/all.css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- Custom styles for this template -->
    <link href="headers.css" rel="stylesheet">
</head>

<body>
    <?php require './partials/_nav.php' ?>

    <section class="mt-2">
        <div class="container_fluid ">
            <div class="row m-0 d-flex justify-content-start align-items-center h-100">
                <div class="row p-2">
                    <p><span class="h2" style="color:#1C1A7D ;">Shopping Cart (<?php if ($count) {
                                                                                    echo count($_SESSION['cart']);
                                                                                } else {
                                                                                    echo '0';
                                                                                };
                                                                                ?>)</span></p>
                    <div class=" col-8 " style="height:500px;background:#fff;overflow-x:scroll;">
                        <table class="table text-center">
                            <thead>
                                <tr>
                                    <th scope="col">Product</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Total Price</th>
                                    <th scope="col">Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                if (isset($_SESSION['cart'])) {

                                    foreach ($_SESSION['cart'] as $key => $value) {


                                ?>
                                        
                                            <tr class="align-middle">
                                                <td style="width:70px;height:70px;" scope="row"><img height="100%" src="images/<?php echo $value['bookimg'] ?>" class="img-fluid">


                                                </td>
                                                <td><?php echo $value['productname'] ?><br><?php echo $value['bookauthname'] ?></td>
                                                <td>$<?php echo $value['productprice'] ?><input type="hidden" class="price" value="<?php echo $value['productprice'] ?>"></td>
                                                <td>
                                                    <form action="insertcart.php" method="post">
                                                        <input type="number" onchange="this.form.submit();" name="mod_qty" class="quantity" value="<?php echo $value['qty'] ?>" min="1" max="5">
                                                        <input type="hidden" name='name' value="<?php echo $value['productname'] ?>">
                                                    </form>
                                                </td>
                                                <td>$<span class="total"></span></td>
                                                <form method="post" action="./insertcart.php">
                                                <td><button type='submit' name='remove' class="btn text-dark btn-sm shadow-none"><i class="fas fa-trash"></i>
                                                    </button>
                                                </td>
                                                
                                                <input type="hidden" name='name' value="<?php echo $value['productname'] ?>">
                                                </form>

                                            </tr>
                                       
                                <?php

                                    }
                                }
                                $_SESSION['delivery'] = 'free';
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="pe-2  col-4" style="background-color:#F1F0FE ;">
                        <form method="post" action="./checkout.php">
                            <div class="p-2 card ">

                                <div class="float-end">
                                    <p class="p-2 m-0 d-flex align-items-center text-dark">
                                        <span class="small me-2">Shipping Fee :</span> <span style='color:#1C1A7D;font-weight:500;' class="fs-6 lead"><?php echo $_SESSION['delivery']  ?></span>
                                    </p>
                                    <p class="p-2 m-0  d-flex align-items-center text-dark">
                                        <span class="small  me-2">Discount :</span> <span style='color:#1C1A7D;font-weight:500;' class="fs-6 lead  ">$0.00</span>
                                    </p>
                                    <p class="p-2 m-0 rounded d-flex align-items-center text-dark" style="background:#F1F0FE ;">
                                        <span class="small  me-2">Grand Total :</span>
                                        <span style='color:#1C1A7D;font-weight:500;' id="gtotal" class="fs-6 lead"></span>

                                        <input type="hidden" name="total_pr" id="totalprice">

                                    </p>
                                    <div class="accordion accordion-flush " id="accordionFlushExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingOne">
                                                <button style="color:#1C1A7D; font-size:1rem;" class="accordion-button collapsed ps-0 " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                                    Add a discount code (optional)
                                                </button>
                                            </h2>
                                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body px-1 d-flex">
                                                    <input type="text" class="form-control" placeholder="enter discount code ">
                                                    <button class="shadow-none btn ms-1 text-light" style="background:#1C1A7D;">apply</button>

                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-center p-3 border-top" style="background:#fff;">
                                                <input type="submit" name="price" class=" btn btn-md text-light" style="background-color:#6461f8;text-transform:none;" value="Procced To Checkout">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </form>
                    </div>
                </div>
                
            </section>
            <?php  require 'partials/footer.php';?>
</body>
<script src="./assets/bootstrap/js/bootstrap.bundle.min.js"></script>

</html>
<script>
    var gt = 0;

    var price = document.getElementsByClassName('price');
    var qty = document.getElementsByClassName('quantity');
    var curent = document.getElementById('curent');
    var total = document.getElementsByClassName('total');
    var gtotal = document.getElementById('gtotal');
    var totalprice = document.getElementById('totalprice');


    function subtotal() {
        gt = 0;

        for (var i = 0; i < price.length; i++) {

            total[i].innerText = (price[i].value) * (qty[i].value);
            gt = gt + (price[i].value) * (qty[i].value);


        }
        gtotal.innerText = '$' + gt;
        totalprice.value = gt;


    }
    subtotal();
</script>