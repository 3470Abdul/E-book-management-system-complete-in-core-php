<?php 
session_start();
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
  <main>
<?php require './partials/_nav.php'; ?>

<style>
    *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  text-decoration: none;
  list-style: none;
}
body{
background-size: cover;
}
.pricing-table{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-around;
  width: 80%;
  margin: auto;
}

.pricing-card{
  flex: 1;
  max-width: 300px;
  background-color: #fff;
  margin: 20px 10px;
  text-align: center;
  cursor: pointer;
  color: #2d2d2d;

}

.pricing-card-header{
  background-color: #6461f8;
  display: inline-block;
  color: #fff;
  padding: 12px 30px;
  border-radius: 0 0 20px 20px;
  font-size: 1rem;
  text-transform: uppercase;
  font-weight: 400;

}
.price{
  font-size: 2.7rem;
  color: #0fbcf9;
  margin: 20px 0;
  font-weight: bolder;
  color: #6461f8;

}

.price sup, .price span{
  font-size: 1.3rem;
  font-weight: 400;
  color: #6461f8;
}

.pricing-card li{
  font-size: .9rem;
  padding: 5px 0;

}

.order-btn{
  display: inline-block;
  margin-bottom: 40px;
  margin-top: 30px;
  border: 2px solid #0fbcf9;
  color: #0fbcf9;
  padding: 18px 40px;
  border-radius: 8px;
  text-transform: uppercase;
  font-weight: 500;
  transition: .3s linear;
}

@media screen and (max-width:1100px){
  .pricing-card{
    flex: 50%;
  }
}
</style>
<div class="container-fluid text-center my-3 fw-bold text-dark fs-2" style="text-decoration: 4px underline #6461f8;">Plans & Pricing</div>


<div class="pricing-table mt-5">
<?php 
include 'conn.php';
$sql = "SELECT * FROM `tbl_plans`";
$run = mysqli_query($con, $sql);
while ($row = mysqli_fetch_array($run)) {
?>

<div  data-mdb-ripple-color="dark" class="pricing-card ripple shadow position-relative" style="background:url(./img/plan1.jpg)no-repeat;background-size:cover;">
      <h3 class="pricing-card-header shadow"><?php echo $row[1]  ?></h3>
      <div class="price"><?php echo $row[2]  ?></div>
      <ul class="ps-auto text-start fw-light" style="color:#a7a6ff ;">
      <div><i class=" fa-regular fa-calendar-lines-pen"  style="color:#6461f8;font-size:1rem;"></i> <span><?php echo $row[3]  ?></span></div>
        <li> <i class="fa-regular fa-circle-dot" style="color:#6461f8;font-size:.8rem;"></i><?php echo $row[4]  ?></li>
        <li> <i class="fa-regular fa-circle-dot" style="color:#6461f8;font-size:.8rem;"></i><?php echo $row[5]  ?></li>
        <li> <i class="fa-regular fa-circle-dot" style="color:#6461f8;font-size:.8rem;"></i><?php echo $row[6]  ?></li>
   
      </ul>
      <a href="#"  class="mb-3 d-block mx-4 btn shadow-none text-light mt-2 " style="background-color:#6461f8;text-transform:none;"><i class="fa-regular fa-clipboard-list-check fs-6 me-2"></i>Choose Plan</a>
    </div>


  <?php 
}?>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check" viewBox="0 0 16 16">
    <title>Check</title>
    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
  </symbol>
</svg>
<div class="container-fluid text-center my-4 fw-bold text-dark fs-2" style="text-decoration: 4px underline #6461f8;">Compare Plans</div>

<div class="table-responsive p-3">
  <table class="table text-center " style="background-color:#fff ;">
    <thead class="fw-bold text-dark fs-6">
      <tr>
        <th class="text-start" style="width: 34%;">Benefits</th>
        <th style="width: 22%;">Free</th>
        <th style="width: 22%;">Pro</th>

      </tr>
    </thead>
    <tbody>
 
      <tr>
        <th scope="row" class="text-start"> <i class="fa-regular fa-circle-dot" style="color:green;font-size:.8rem;"></i> Free All PDFs</th>
        <td><i class="fa-solid fa-circle-check" style="font-size:1.3rem;color:#6461f8;"></i></td>
        <td><i class="fa-solid fa-circle-check" style="font-size:1.3rem;color:#6461f8;"></i></td>
      </tr>
      <tr>
        <th scope="row" class="text-start"> <i class="fa-regular fa-circle-dot" style="color:green;font-size:.8rem;"></i> Free Deliveries </th>

        <td><i class="fa-solid fa-circle-check" style="font-size:1.3rem;color:#6461f8;"></i></td>
        <td><i class="fa-solid fa-circle-check" style="font-size:1.3rem;color:#6461f8;"></i></td>
      </tr>
    </tbody>

    <tbody>
      <tr>
        <th scope="row" class="text-start"> <i class="fa-regular fa-circle-dot" style="color:green;font-size:.8rem;"></i> Join Contests and Win Prizes</th>
        <td><i class="fa-solid fa-circle-check" style="font-size:1.3rem;color:#6461f8;"></i></td>
        <td><i class="fa-solid fa-circle-check" style="font-size:1.3rem;color:#6461f8;"></i></td>
      </tr>
      <tr>
          <th scope="row" class="text-start"> <i class="fa-regular fa-circle-dot" style="color:green;font-size:.8rem;"></i> 20% OFF on every purchase</th>
          <td></td>
          <td><i class="fa-solid fa-circle-check" style="font-size:1.3rem;color:#6461f8;"></i></td>
        </tr>
        <tr>
            <th scope="row" class="text-start"> <i class="fa-regular fa-circle-dot" style="color:green;font-size:.8rem;"></i> 40% OFF on every purchase</th>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <th scope="row" class="text-start"> <i class="fa-regular fa-circle-dot" style="color:green;font-size:.8rem;"></i> 24/7 Support</th>
            <td><i class="fa-solid fa-circle-check" style="font-size:1.3rem;color:#6461f8;"></i></td>
            <td><i class="fa-solid fa-circle-check" style="font-size:1.3rem;color:#6461f8;"></i></td>
      </tr>
    </tbody>
  </table>
</div>
<?php  require 'partials/footer.php';?>

</main>

</body>

<script src="./assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script   src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.3.0/mdb.min.js"></script>
</html>