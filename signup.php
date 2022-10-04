<style>
    body{
        background:    linear-gradient(
          rgba(255, 255, 255, 0.7), 
          rgba(255, 255, 255, 0.07)
        ),
        url('./img/bglogin.jpg');
        background-size: cover;
        background-blend-mode: darken;
        
    }
</style>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>sign up</title>
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="./assets/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.2/css/all.css">
</head>

<body>

    <?php
    session_start();
 include 'conn.php';
 $showalert = false;
 $showerror = false;
 if ($_SERVER["REQUEST_METHOD"] =='POST') {


  $fullname = $_POST['fullname'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $pass = $_POST['password'];
  $password = sha1($pass);
  $cpass = $_POST['cpassword'];
  $cpassword = sha1($cpass);

    $existSql = "SELECT * FROM `user_register` WHERE username = '$username'";
    $existSql2 = "SELECT * FROM `user_register` WHERE email = '$email'";

    $result = mysqli_query($con, $existSql);
    $result2 = mysqli_query($con, $existSql2);

    $numExistRows = mysqli_num_rows($result);
    $numExistRows2 = mysqli_num_rows($result2);


    if(empty($fullname)||empty($username)||empty($email)||empty($pass)){
        $showerror = "Feilds are empty please filled it";
    }elseif($numExistRows > 0){
        // $exists = true;
        $showerror = "Username Already Exists";

        if($numExistRows2 > 0){
            // $exists = true;
            $showerror = "email Already Exists";
    
            
        }
     
    }
    else{
        
        // $exists = false; 
        if(($password == $cpassword)){
          
            $sql = "INSERT INTO `user_register` ( `fullname`, `username`, `email`,`password`, `date`) VALUES ('$fullname', '$username','$email', '$password', current_timestamp())";
            $result = mysqli_query($con, $sql);
    
            if ($result){
                $showalert = true;
        

            }
      
        }
        else{
            $showerror = "Passwords do not match";
        }
    }

 }
require './partials/_nav.php';
if($showalert){
echo '<div class="alert alert-success alert-dismissible fade show position-absolute top-0" role="alert">
  <strong>hurray!</strong> you are registered successfully.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
if($showerror){
  echo '<div class="alert alert-danger alert-dismissible fade show position-absolute "style="left:50%;transform:translate(-50%);top:20px;" role="alert">
    <strong>error!</strong> '.$showerror.'.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
  }
  ?>
  
    <div class="container  border  col-10 col-lg-6 mt-4 shadow" style="background:#fff ;">
        <h2 class="text-center mt-2" style="color:#1C1A7D ;">SIGN UP</h2>

        <form method="post" action="signup.php" class="mt-2">
            <div class="col-12">
                <label class="form-label mb-0">Full Name</label>
                <input type="text" name="fullname" class="form-control mb-3" placeholder="Enter fullname">
            </div>

            <div class="col-12">
                <label class="form-label mb-0">Username</label>
                <input type="text" name="username" class="form-control mb-3" placeholder="Enter username">
            </div>

            <div class="col-12">
                <label for="email" class="form-label mb-0">Email</label>
                <input type="email" name="email" placeholder="Enter e-mail address" class="form-control mb-3"
                    id="email">
            </div>

            <div class="col-12 position-relative">
                <label class="form-label mb-0">Password</label>
                <input type="password" name="password" placeholder="Enter password" class="form-control mb-3" id="pass">
                <span id="passeye" onclick="showpass()" class="position-absolute  mt-1"
                    style="right:10px;top: 30px;opacity: .6;cursor: pointer;"><span id="passeyetext"
                        class="me-1 "><i class="fa-solid fa-eye-slash"></i></span>
            </div>

            <div class="col-12  position-relative">
                <label class="form-label mb-0">Repeat Password</label>
                <input type="password" name="cpassword" placeholder="Repeat password" class="form-control mb-2"
                    id="repeatpass">
                <span id="passeye2" onclick="showrep_pass()" class="position-absolute  mt-1"
                    style="right:10px;top: 30px;opacity:.6;cursor: pointer;"><span id="passeyetext2"
                        class="me-1 "><i class="fa-solid fa-eye-slash"></i></span>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" checked>
                <label class="form-check-label" for="defaultCheck1" style="font-size:.9rem;">
                    I agree all <a href="" class="" style="color: #1C1A7D;font-weight: 600;">Terms & Conditions</a>
                </label>
            </div>

            <div class="d-block text-center my-3">
                <button type="submit" name='register' class="btn w-50 w-sm-75 my-2"
                    style="background:#1C1A7D;color: white;">Register</button>
            </div>
        </form>
    </div>
</body>

<script src="./assets/bootstrap/js/bootstrap.min.js"></script>
<script>
function showpass() {
    if (pass.type === 'password') {
        pass.type = 'text';
        passeye.style.transition = '.1s';
        passeye.style.color = '#1C1A7D';
        passeye.style.opacity = '1';
        passeyetext.innerHTML = '<i class="fa-solid fa-eye"></i>';

    } else {

        pass.type = 'password';
        passeye.style.transition = '.1s';
        passeye.style.color = '#000';
        passeye.style.opacity = '.6';
        passeyetext.innerHTML = '<i class="fa-solid fa-eye-slash"></i>';

    }
}

function showrep_pass() {
    if (repeatpass.type === 'password') {
        repeatpass.type = 'text';
        passeye2.style.transition = '.1s';
        passeye2.style.color = '#1C1A7D';
        passeye2.style.opacity = '1';
        passeyetext2.innerHTML = '<i class="fa-solid fa-eye"></i>';

    } else {

        repeatpass.type = 'password';
        passeye2.style.transition = '.1s';
        passeye2.style.color = '#000';
        passeye2.style.opacity = '.6';
        passeyetext2.innerHTML = '<i class="fa-solid fa-eye-slash"></i>';

    }
}
</script>

</html>