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
    <title>Hello, world!</title>
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="./assets/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.2/css/all.css">
</head>

<body>

    <?php
session_start();

$login = false;
    $showerror = false;
    if ($_SERVER["REQUEST_METHOD"] == 'POST') {
        include 'conn.php';

        $username = $_POST['username'];
        $pass = $_POST['password'];
$password = sha1($pass);

        $query = "SELECT * FROM user_register where username='$username' and password='$password' ";
        $result = mysqli_query($con, $query);
        $num = mysqli_num_rows($result);
        $row = mysqli_fetch_array($result);
        if ($num ==  1) {
            $_SESSION['fullname'] = $row['fullname'];
            $_SESSION['username'] =  $row['username'];
            $_SESSION['email'] = $row['email'];
        
            session_start();

            if ($row['roles'] == 'user') {
                $login = true;
              
          
                $_SESSION['userloggedin'] = true;

                header('location: home.php');
            } elseif ($row['roles'] == 'admin') {
                $login = true;
                
                $_SESSION['adminloggedin'] = true;
$_SESSION['admin'] = $username;
         
                header("location:./admin/admin.php");
            } else {
                $showerror = "Invalid Credentials";
            }
        } else {
            $showerror = "Invalid Credentials";
        }
    }
require './partials/_nav.php';
    if ($login) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>alert!!</strong>you are logged in.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
    }
    if ($showerror) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Alert!</strong>' . $showerror . '.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
    <div class="container  border col-10 col-lg-6 mt-4 shadow" style="background-color:#fff ;">

        <h2 class="text-center mt-2" style="color:#1C1A7D ;">LOGIN</h2>

        <form method="post" action="login.php" class="mt-2">

            <div class="col-12">
                <label class="form-label mb-0">Username</label>
                <input type="text" name="username" class="form-control mb-3" placeholder="Enter username">
            </div>

            <div class="col-12 position-relative">
                <label class="form-label mb-0">Password</label>
                <input type="password" name="password" placeholder="Enter password" class="form-control mb-3" id="loginpass">
                <span id="loginpasseye" onclick="login_showpass()" class="position-absolute mt-1 align-items-center" style="right:10px;top: 30px;opacity: .6;cursor: pointer;"><span id="loginpasseyetext" class="me-1  "><i class="fa-solid fa-eye-slash"></i></span>
            </div>



            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" checked>
                <label class="form-check-label" for="defaultCheck1" style="font-size:.9rem;">
                    remember me.
                </label>
            </div>

            <div class="d-block text-center my-3">
                <button type="submit" name='register' class="btn w-50 w-sm-75 my-2" style="background:#1C1A7D;color: white;">LOGIN</button>
            </div>

            <a class="text-dark " href="">Already have an account? <span style="color: #1C1A7D;font-weight: 600;">Login</span></a><br><br>

        </form>
    </div>
</body>

<script src="./assets/bootstrap/js/bootstrap.min.js"></script>
<script>

    function login_showpass() {
    if (loginpass.type === 'password') {
        loginpass.type = 'text';
        loginpasseye.style.transition = '.1s';
        loginpasseye.style.color  = '#1C1A7D';
        loginpasseye.style.opacity  = '1';
        loginpasseyetext.innerHTML  = '<i class="fa-solid fa-eye"></i>';

    } else {

        loginpass.type = 'password';
        loginpasseye.style.transition = '.1s';
        loginpasseye.style.color  = '#000';
        loginpasseye.style.opacity  = '.6';
        loginpasseyetext.innerHTML = '<i class="fa-solid fa-eye-slash"></i>';

    }
}
</script>

</html>