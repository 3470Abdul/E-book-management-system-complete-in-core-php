<?php
session_start();
if (!isset($_SESSION['userloggedin']) || $_SESSION['userloggedin'] != true) {
    header('location: ./login.php');
    exit;
}
include 'conn.php';
if (isset($_POST['price'])) {
    $total =  $_POST['total_pr'];
    $_SESSION['total_price'] = $total;
}

$showalert = false;
$showerror = false;
if (isset($_POST['order_details'])) {

    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phoneno'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $postal_code = $_POST['postal_code'];
    $method = $_POST['method'];

    if (empty($phone) || empty($country) || empty($city) || empty($address) || empty($postal_code)) {
        $showerror = 'Fields are empty please';
    } else {
        $sql = "INSERT INTO `order_details` ( `fullname`, `username`, `email`,`phone_no`, `country`,`city`,`address`,`postal_code`,`method`) VALUES ('$fullname', '$username','$email', '$phone','$country', '$city','$address', '$postal_code','$method')";
        $run =  mysqli_query($con, $sql);
        $showalert = true;
    }
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
    <?php require './partials/_nav.php';

    if ($showalert) {
        echo '<div class="alert alert-success alert-dismissible fade show position-absolute" style="left:50%;transform:translate(-50%);top:20px;" role="alert">
          <strong>hurray!</strong> you are registered successfully.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
    }
    if ($showerror) {
        echo '<div class="alert alert-danger alert-dismissible fade show position-absolute "style="left:50%;transform:translate(-50%);top:20px;" role="alert">
            <strong>error!</strong> ' . $showerror . '.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
    }
    ?>

    <div class="containe-fluid row m-0 px-2 ">
        <div class="container-fluid fs-2 fw-bold" style="color:#1C1A7D ;">CHECKOUT</div>

        <div class="col-8 px-2 text-dark py-3 rounded" style="background:#fff ;">
            <div class="fs-5 px-2" style="color:#1C1A7D ;">Account Info</div>
            <form method="post">
                <div class="px-2" style="font-size:.9rem ;">
                    <div class=" row d-flex justify-content-between my-3">
                        <?php
                        $name = $_SESSION['username'];
                        $result = mysqli_query($con,"SELECT * FROM `order_details` WHERE `username` =  '$name'");
while($row = mysqli_fetch_array($result)){

                        ?>
                        <div class=" col-6">
                            <label>Full Name</label>
                            <input type="text" value="<?php echo $row[1] ?>" name="fullname" class="form-control" placeholder="fullname">
                        </div>
                        <div class="col-6 ms-auto">
                            <label>Username</label>
                            <input type="text" value="<?php echo $row[2] ?>" name="username" class="form-control" placeholder="username">
                        </div>

                    </div>
                    <div class=" row d-flex justify-content-between my-3">
                        <div class=" col-6">
                            <label>Email Address</label>
                            <input type="text" value="<?php echo $row[3] ?>" name="email" class="form-control" placeholder="email address">
                        </div>
                        <div class="col-6 ms-auto">
                            <label>Phone Number</label>
                            <input type="text" value="<?php echo $row[4] ?>" name="phoneno" class="form-control" placeholder="phone no...">
                        </div>

                    </div>
                    <div class=" row d-flex justify-content-between my-3">
                        <div class=" col-6">
                            <label>Country</label>
                            <input type="text" value="<?php echo $row[5] ?>" name="country" class="form-control" placeholder="e.g. Pakistan">
                        </div>
                        <div class="col-6 ms-auto">
                            <label>City</label>
                            <input type="text" value="<?php echo $row[6] ?>" name="city" class="form-control" placeholder="e.g. Karachi">
                        </div>
                    </div>
                    <div class=" row d-flex justify-content-between my-3">
                        <div class=" col-6">
                            <label>Address line</label>
                            <input type="text" value="<?php echo $row[7] ?>" name="address" class="form-control" placeholder="current address">
                        </div>
                        <div class="col-6 ms-auto">
                            <label>Postal Code</label>
                            <input name="postal_code" value="<?php echo $row[8] ?>" type="text" class="form-control" placeholder="e.g. 123456">
                        </div>
                    </div>
<?php
}
?>
                    <div class="row d-flex justify-content-between my-3">
                        <div class="col-6">
                            <div>Payment Method</div>
                            <select name="method" class="form-select ">
                                <option value="Cash On Delivery" selected>Cash On Delivery</option>
                            </select>
                        </div>

                    </div>
                    <input type="submit" name="order_details" value="Save Details" class="btn shadow-none text-light mt-2 " style="background-color:#6461f8;text-transform:none;">
            </form>
        </div>
    </div>
    <div class="col-4">
        <div class="ms-1 p-3" style="background-color:#fff ;">
            <div class="fs-5 fw-bold" style="color:#1C1A7D ;">Order Summary</div>

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
                                        <input type="hidden" name='name' value="<?php echo $value['productname'] ?>">
                                        <input type="hidden" name='name' value="<?php echo $value['productname'] ?>">
                                        <input type="hidden" name='author' value="<?php echo $value['bookauthname'] ?>">
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

            <div class="d-flex  mt-2 py-2 px-3 rounded  align-middle" style="background:#F1F0FE ;">
                <div class=" text-dark" style="font-size:.9rem;">Total Payment </div>
                <div class="ms-auto fw-bold" style="color:#1C1A7D  ;"><?php echo $_SESSION['total_price'] ?>$</div>
            </div>
            <div class="d-flex justify-content-between">
                <a href="./browse_product.php" class="btn shadow-none text-light mt-2 " style="background-color:#6461f8;text-transform:none;">Continue Shopping</a>
                <form method="post">
                    <input name="order" type="submit" class="btn shadow-none text-light mt-2 " style="background-color:#6461f8;text-transform:none;" value="Proceed To Pay">
                </form>

            </div>
        </div>

    </div>
    </div>
    <?php  require 'partials/footer.php';?>

</body>

<script src="./assets/bootstrap/js/bootstrap.bundle.min.js"></script>

</html>
<?php

if (isset($_POST['order'])) {
    $username = $_SESSION['username'];
    $query = "SELECT * FROM  `order_details` where `username` =  '$username'";
    $result = mysqli_query($con, $query);
    $run = mysqli_fetch_array($result);
    $order_Id =  $run[0];

    $sql2 =  "INSERT INTO `tbl_orders`(`order_id`, `order_name`,`author`, `order_price`, `order_qty`) VALUES (?,?,?,?,?)";
    $stmt = mysqli_prepare($con, $sql2);
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, 'isssi', $order_Id, $name, $author, $price, $quantity);
        foreach ($_SESSION['cart'] as $key => $values) {
            $name = $values['productname'];
            $author = $values['bookauthname'];
            $price = '$' . $values['productprice'];
            $quantity = $values['qty'];
            mysqli_stmt_execute($stmt);
        }
  

        echo "<script>alert('your place sucessfully');
window.location.href = 'order_placed.php';
</script>";
    }

}
?>