<?php
session_start();
$id = $_GET['id'];
$error = false;
?>

<?php

if (!isset($_SESSION['userloggedin']) || $_SESSION['userloggedin'] != true) {
    header('location: ./login.php');
    exit;
}
include './conn.php';

$sql = "SELECT * FROM `competitions`";
$run = mysqli_query($con, $sql);
$row = mysqli_fetch_row($run);

if (isset($_POST['submit'])) {
    
   $content = $_POST['essay'];
    if (strlen($content) < 200) {
        $error = true;
        $error = 'Content must be 200 characters';
    } else {
        $username = $_SESSION['username'];
        $result = mysqli_query($con,"SELECT * FROM `user_register` where `username` = '$username' ");
        $fetch = mysqli_fetch_row($result);

 mysqli_query($con,"INSERT INTO `tbl_contest_participants`(`competition_id`,`user_id`,`username`,`content`) values('$id','$fetch[0]','$fetch[2]','$content')");
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>competitions</title>
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
<style>
    body {
        height: 100vh;
        background: linear-gradient(rgba(0, 0, 0, 0.7),
                rgba(0, 0, 0, 0.07)), url('./img/contest2.jpg') no-repeat;
        background-size: cover;
        background-position: center;
    }

    textarea {
        min-height: 82%;
        padding: 30px;

    }
</style>

<body>
    <main>
        <?php require './partials/_nav.php'; ?>
        <div class="text-center  my-3 mt-5">

        </div>
        <div class="w-50   mx-auto " style="max-height:60vh;">
            <form method="post">

                <div class=" p-3 shadow card " style="background-color:#dfddfa;height:500px;">
                    <div class="title text-dark fs-3"><?php echo $row[2] ?></div>
                    <div class="fs-3 text-dark" id="session" style="position:absolute;top:16px;right:20px;"></div>

                    <textarea name="essay" disabled id="textarea"></textarea>
                    <div class="">
                        <button class="btn btn-primary my-2 me-2" id="btn" onclick="start()">Start Writing</button><button class="btn my-2 btn-primary" name="submit" type="submit">Submit</button>
                        <p class="text-danger fw-bold position-absolute" style="right:20px;bottom:0px;"><?php echo $error ?></p>
                    </div>

                </div>
            </form>

            <script>
                function start() {
                    textarea.disabled = false;
                    btn.disabled = true;
                    var minutes = 3;
                    time = minutes * 3600;
                    setInterval(timer, 1000);

                    function timer() {

                        var hour = Math.floor(time / 3600);
                        var min = Math.floor(time / 360);
                        var sec = time % 60;

                        session.innerHTML = `${hour}:${min}:${sec}`
                        time--;
                    }
                }
            </script>
        </div>

    </main>
</body>
<script src="./assets/bootstrap/js/bootstrap.bundle.min.js"></script>

</html>