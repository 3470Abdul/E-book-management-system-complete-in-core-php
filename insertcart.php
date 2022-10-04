<?php
session_start();
// session_destroy();

if (isset($_POST['addcart'])) {
    $bookname = $_POST['bookname'];
    $bookimg = $_POST['bookimg'];
    $bookauthname = $_POST['bookauthname'];
    $bookprice = $_POST['bookprice'];
    $qty = '1';

    if (isset($_SESSION['cart'])) {
        $check_product = array_column($_SESSION['cart'], 'productname');
        if (in_array($bookname, $check_product)) {
            echo " <script>alert('book already added')
       window.location.href='home.php'</script>
       ";
        } else {
            $_SESSION['cart'][] = array('bookimg' => $bookimg, 'productname' => $bookname, 'bookauthname' => $bookauthname, 'qty' => $qty, 'productprice' => $bookprice);
            $count = true;
            header('location: cart.php');
        }
    }else {
        $_SESSION['cart'][] = array('bookimg' => $bookimg, 'productname' => $bookname, 'bookauthname' => $bookauthname, 'qty' => $qty, 'productprice' => $bookprice);
        $count = true;
        header('location: cart.php');
    }
}
if (isset($_POST['remove'])) {
    foreach ($_SESSION['cart'] as $key => $value) {
        if ($value['productname'] === $_POST['name']) {
            unset($_SESSION['cart'][$key]);
            $_SESSION['cart'] = array_values($_SESSION['cart']);
            header('location:cart.php');
        }
    }
}
if (isset($_POST['mod_qty'])) {
    foreach ($_SESSION['cart'] as $key => $value) {
        if ($value['productname'] === $_POST['name']) {
            $_SESSION['cart'][$key]['qty'] = $_POST['mod_qty'];

            header('location:cart.php');
        }
    }
}
