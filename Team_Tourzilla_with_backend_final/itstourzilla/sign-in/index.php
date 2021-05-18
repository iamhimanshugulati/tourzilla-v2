<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" type="text/css" href="../css/form.css">
  <title>Sign-In: TourZilla</title>
  <?php include '../partials/_favicon.php';?>
</head><br>

<body>
  <!-- <?php include '../partials/_dbconnect.php';?> -->
  <!-- <?php include '../partials/_header.php';?> -->

  <div class="container mb-5 box" data-aos="zoom-in">
    <div class="row form mx-auto  py-2 shadow mt-5" style="filter: drop-shadow(0px 0px 4px black);border-radius: 10px;">
      <div class="col-md-7 col-sm-11  p-3 ">
        <form class="p-5" action="/itstourzilla/partials/_handlesignin.php" method="POST">
          <center>
            <div class="form-group">
              <h2 class="mb-5" style="font-weight: bold;">Sign In</h2>
              <label class="text-secondary w-100" for="exampleInputEmail1" style="margin-right: 115px;"><i
                  class="fa fa-envelope"></i>
                Email address</label>
              <input type="email" id="exampleInputEmail1" aria-describedby="emailHelp" name="email_id" required>

            </div>
            <div class="form-group">
              <label class="text-secondary w-100" for="exampleInputPassword1" style="margin-right: 150px;">
                <i class="fa fa-lock"></i> Password</label>
              <input type="password" id="exampleInputPassword1" name="password" required>
            </div>
            <p class="forget-pass">Forget password ?</p>

            <button type="submit" class="btn ">Submit</button>
          </center>

          <center>
            <div class="Social-icon  d-flex justify-content-between mt-3 " style="height: auto;width:50%;">
              <a href=""><img src="../images/facebook.png"></a>
              <a href=""><img src="../images/twitter.png"></a>
              <a href=""><img src="../images/linkedin-logo.png"></a>
              <a href=""><img src="../images/instagram.png"></a>

            </div>
          </center>
        </form>
      </div>
      <div class="col-md-5 col-sm-11 box_2 box-img" style="border:none;border-left:1px solid #d3d3d3;">
      
        <img class=" img-fluid p-3 mr-5" src="../images/signin.jpg">
        <p class="text-center">Don't have an Account?</p>
        <center><a class="text-center" href="../sign-up/index.php" style="text-decoration:none;">Create Account </a></center>
        <center><a class="text-center btn btn-sm w-25 mt-2" href="../index.php">Back </a></center>
      </div>

    </div>
  </div>

  

<!-- <?php include '../partials/_footer.php';?> -->

  <!-- js files -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
      offset: 300, // offset (in px) from the original trigger point

      duration: 2000,
    });
  </script>
</body>

</html>