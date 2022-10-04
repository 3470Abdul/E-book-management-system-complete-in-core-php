<?php
session_start();
if(!isset($_SESSION['userloggedin']) ||$_SESSION['userloggedin']!=true ){
    header('location: ./login.php');
    exit;
}
include './conn.php';

$sql = "SELECT * FROM `competitions`";
$run = mysqli_query($con, $sql);

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
</style>

<body>
    <main>
        <?php require './partials/_nav.php'; ?>
        <div class="text-center  my-3 mt-5">
            <div class=" mx-auto   fw-normal" style="background-color:#dfddfa;width:220px;color:#000;font-size:1.6rem; letter-spacing:1px;">COMPETITIONS</div>
        </div>
        <div class="w-50   mx-auto " style="max-height:60vh;overflow-y:scroll;">

            <div class=" px-3 pt-3 shadow card " style="background-color:#dfddfaa0 ;">
                <?php
                while ($row = mysqli_fetch_array($run)) {
                ?>
                    <div class=" d-flex p-2 mb-3 position-relative justify-content-between shadow shadow-lg rounded" style="background-color:#dfddfa ;">
                        <img style="object-fit:cover;" class="rounded" height="100px" width="100px" src="./images/<?php echo $row[1]?>" alt="">
                        <div class="w-100 position-relative">
                            <p class="title px-2 text-dark fw-bold" style="line-height:20px ;"><?php echo $row[2]?><i class="fa-regular position-absolute fa-person-walking-dashed-line-arrow-right float-right fs-4" style="right: 0;top:4px;color:#6461F8;"></i></p>

                            <div class="d-flex justify-content-between px-2 ">
                                <div class=" text-dark" style="line-height:20px;font-size:.9rem;">
                                    <div class="fw-bold">start date </div>
                                    <div><?php echo $row[4]?></div>
                                </div>

                                <div class="text-dark" style="line-height:20px ;font-size:.9rem ;">
                                    <div class="fw-bold">end date </div>
                                    <div><?php echo $row[5]?></div>
                                </div>

                                <div>
                                    <div class="text-dark d-flex" style="line-height:20px ;font-size:.9rem;">
                                        <div class="fw-bold">task :</div>
                                        <div><?php echo $row[3]?></div>
                                    </div>
                                    <div class="text-dark d-flex" style="line-height:20px ;font-size:.9rem;">
                                        <div class="fw-bold">prize :</div>
                                        <div><?php echo $row[6]?></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="start_contest.php?name=" class="position-absolute w-100 h-100  top-0 " style="left: 0;"></a>
                        <a href="start_contest.php?id=<?php echo $row[0] ?>" class="position-absolute w-100 h-100  top-0 " style="left: 0;"></a>
                    </div>

                <?php
                }
                ?>
            </div>


        </div>
        <div class="container-fluid">
        
        </div>
    </main>
</body>
<script src="./assets/bootstrap/js/bootstrap.bundle.min.js"></script>

</html>