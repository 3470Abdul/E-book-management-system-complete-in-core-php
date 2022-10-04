<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title></title>
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


<style>
  .footer-widget ul {
    margin: 0px;
    padding: 0px;
  }

  .footer-section {
    background: #fff;
    position: relative;
  }

  .footer-cta {
    border-bottom: 1px solid #6461F8;
  }

  .single-cta i {
    color: #6461F8;
    font-size: 30px;
    float: left;
    margin-top: 8px;
  }

  .cta-text {
    padding-left: 15px;
    display: inline-block;
  }

  .cta-text h4 {
    color: #6461F8;
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 2px;
  }

  .cta-text span {
    color: #6461F8;
    font-size: 15px;
  }

  .footer-content {
    position: relative;
    z-index: 2;
  }

  .footer-pattern img {
    position: absolute;
    top: 0;
    left: 0;
    height: 330px;
    background-size: cover;
    background-position: 100% 100%;
  }

  .footer-logo {
    margin-bottom: 30px;
  }

  .footer-logo img {
    max-width: 200px;
  }

  .footer-text p {
    margin-bottom: 14px;
    font-size: 14px;
    color: #7e7e7e;
    line-height: 28px;
  }

  .footer-social-icon span {
    color: #6461F8;
    display: block;
    font-size: 20px;
    font-weight: 700;
    font-family: 'Poppins', sans-serif;
    margin-bottom: 20px;
  }

  .footer-social-icon a {
    color: #fff;
    font-size: 16px;
    margin-right: 15px;
  }

  .footer-social-icon i {
    height: 40px;
    width: 40px;
    text-align: center;
    line-height: 38px;
    border-radius: 50%;
  }

  .facebook-bg {
    background: #6461F8;
  }

  .twitter-bg {
    background: #6461F8;
  }

  .google-bg {
    background: #6461F8;
  }

  .footer-nav-link {
    text-decoration: none;
    padding: 10px 0;
    color: #6461F8;
    position: relative;
    margin: 20px 0;
    text-decoration: none;
  }

  .footer-nav-link h3 {
    color: #6461F8;
    text-decoration: 2px underline #6461F8;
  }

  .footer-widget ul li {
    display: inline-block;
    float: left;
    width: 50%;
    margin-bottom: 12px;
  }

  .footer-widget ul li a:hover {
    color: #6461F8;
  }

  .footer-widget ul li a {
    color: #878787;
    text-transform: capitalize;
  }

  .subscribe-form {
    position: relative;
    overflow: hidden;
  }

  .subscribe-form input {
    width: 100%;
    padding: 14px 28px;
    background: #6461F825;
    border: 1px solid #6461F8;
    color: #6461F8;
    outline: none;
  }

  .subscribe-form button {
    position: absolute;
    right: 0;
    background: #6461F8;
    padding: 15px 20px;
    border: 1px solid #6461F8;
    top: 0;
  }

  .subscribe-form button i {
    color: #fff;
    font-size: 1.3rem;
    transform: rotate(-6deg);
  }

  .copyright-area {
    background: #202020;
    padding: 25px 0;
  }

  .copyright-text p {
    margin: 0;
    font-size: 14px;
    color: #878787;
  }

  .copyright-text p a {
    color: #6461F8;
  }

  .footer-menu li {
    display: inline-block;
    margin-left: 20px;
  }

  .footer-menu li:hover a {
    color: #6461F8;
  }

  .footer-menu li a {
    font-size: 14px;
    color: #878787;
  }

  li {
    list-style-type: none;
  }

  .fab:hover {
    transition: 2s;
    transform: scale(1.2);
  }
</style>
</head>

<body>

  <footer class="footer-section">
    <div class="container">
      <div class="footer-cta pt-5 pb-5">
        <div class="row">
          <div class="col-xl-4 col-md-4 mb-30">
            <div class="single-cta">
              <i class="fas fa-map-marker-alt"></i>
              <div class="cta-text">
                <h4>Find us</h4>
                <span>M.A Jinnah road,block B,Plot L-658</span>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-4 mb-30">
            <div class="single-cta">
              <i class="fas fa-phone"></i>
              <div class="cta-text">
                <h4>Call us</h4>
                <span>+92 3148579321</span>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-4 mb-30">
            <div class="single-cta">
              <i class="far fa-envelope-open"></i>
              <div class="cta-text">
                <h4>Mail us</h4>
                <span>ebookservices@gmail.com</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-content pt-5 pb-5">
        <div class="row">
          <div class="col-xl-4 col-lg-4 mb-50">
            <div class="footer-widget">

              <div class="footer-text">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, neque? Corrupti delectus reprehenderit exercitationem harum repellendus fugit debitis, voluptatem sed.</p>
              </div>
              <div class="footer-social-icon">
                <span>Follow us</span>
                <a href="#"><i class="fab fa-facebook-f facebook-bg"></i></a>
                <a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
                <a href="#"><i class="fab fa-google-plus-g google-bg"></i></a>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
            <div class="footer-widget">
              <li class="nav-item">
                <a class="footer-nav-link" aria-current="page" href="#">
                  <h3>Useful Links</h3>
                </a>
              </li>
              <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">about us</a></li>
                <li><a href="#">Browse products</a></li>
                <li><a href="#">plans & pricing</a></li>
                <li><a href="#">competitions</a></li>
                <li><a href="#">contact us</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="#">sign up</a></li>
                <li><a href="#">login</a></li>
                <li><a href="#">cart</a></li>
              </ul>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
            <div class="footer-widget">
              <div class="footer-widget-heading">
                <a class="footer-nav-link" aria-current="page" href="#">
                  <h3>Subscribe</h3>
                </a>
              </div>
              <div class="footer-text mb-25">
                <p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
              </div>
              <div class="subscribe-form">
                <form action="#">
                  <input type="text" placeholder="Email Address">
                  <button><i class="fa-thin fa-paper-plane"></i></button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="copyright-area">
      <div class="container">
        <div class="row">
          <div class="col-xl-6 col-lg-6 text-center my-auto text-lg-left">
            <div class="copyright-text">
              <p>Copyright &copy; 2018, All Right Reserved <a href="#">ebook.com</a></p>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6  d-none d-lg-block text-right">
            <div class="footer-menu ">
              <ul class="my-auto">
                <li><a href="#">Home</a></li>
                <li><a href="#">Terms</a></li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Policy</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

</body>

</html>