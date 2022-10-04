<?php 
include './conn.php';
$sql = 'SELECT * from `slider`';
$result = mysqli_query($con,$sql);

?>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
  <div style="height:400px;"  class="carousel-item active">
      <img  height="100%" style="object-fit:cover ;"src="./img/banner1.jpg" class="d-block w-100" alt="...">
    </div>
  <?php
  
    while($row = mysqli_fetch_array($result)){
    ?>
   
    <div style="height:400px;"  class="carousel-item ">
      <img  style="object-fit:cover;"   height="100%" src="./images/<?php echo $row[1]?>"  class="d-block w-100" alt="...">
    </div>
<?php

}
?>
  </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="fa-regular fa-angles-left fs-2" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="fa-regular fa-angles-right fs-2" aria-hidden="true" ></span>
    <span class="visually-hidden">Next</span>
  </button>


</div>

<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
