
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Contact: TourZilla</title>
  <?php include '../partials/_favicon.php';?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.0/animate.min.css" />
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" href="../css/imagehover.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <style>
    .scrolled {
      background-color: rgba(0, 0, 0, 0.4) !important;

    }

    nav {
      transition: 0.45s ease-in all !important;
    }
  </style>
</head>

<body class="bg-dark">
  <!-- <?php include '../partials/_dbconnect.php';?> -->
  <?php include '../partials/_header.php';?>



<!-- .................Contact ........... -->

  
<div class="container-fluid border-dark contact mb-5 mt-5 pt-5" id="cont">

<?php
$showAlert = true;
if($_SERVER["REQUEST_METHOD"] == "POST"){
  include '../partials/_dbconnect.php';
    $c_name = $_POST['name'];
    $c_name = str_replace("<", "&lt;", $c_name);
    $c_name = str_replace(">", "&gt;", $c_name);

  $emailid = $_POST['email_id'];
  $emailid = str_replace("<", "&lt;", $emailid);
  $emailid = str_replace(">", "&gt;", $emailid);
  
  $contactno = $_POST['contact_no'];
  $contactno = str_replace("<", "&lt;", $contactno);
  $contactno = str_replace(">", "&gt;", $contactno);

  $c_message = $_POST['message'];
  $c_message = str_replace("<", "&lt;", $c_message);
  $c_message = str_replace(">", "&gt;", $c_message);


  $sql = "INSERT INTO `contact_us` (`name`, `email__id`, `contact__no`, `c__message`) VALUES ('$c_name', '$emailid', '$contactno', '$c_message')";
  $result = mysqli_query($conn, $sql);
        $showAlert = true;
        if ($showAlert) {
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!!</strong> Your message has been received, our team will call you as soon as possible. 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';
      }
}

?>




    <h1 class="mt- text-center text-white headings">Contact Us</h1>
    <hr class=" animate__animated  animate__zoomIn  animate__infinite "
      style="width:150px; background-color:red; height: 4px; margin: 4px auto;"><br>
    <div class="row  mx-auto " style="width: 75%;box-shadow: 2px 2px 2px black,-3px -3px 2px black; ">
      <div  data-aos="zoom-in" class="col-md-5 col-sm-12 center_img  ">
        <img src="../img/cont.jpg" style="height:500px; width:500px; margin-top: 40px; ">


      </div>
      <div  data-aos="zoom-in" class="col-md-6 col-sm-11 mx-auto py-3  ">
        <form  action="/itstourzilla/contact/" method="POST">
          <div class="form-group">
            <label for="exampleInputPassword1">Name</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter your name" name="name" required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
              placeholder="Enter email" name="email_id" required>
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Mobile</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter your number"name="contact_no" required>
          </div>
          <div class="form-group purple-border">
            <label for="exampleFormControlTextarea4">Message</label>
            <textarea class="form-control" id="exampleFormControlTextarea4" rows="3" name="message" required></textarea>
          </div>

          <button type="submit" class="btn btn-warning btn-block">Submit</button>
        </form>
      </div>
    </div>
  </div>
  <!-- .................Contact end........... -->


  

  <?php include '../partials/_footer.php';?>





    <!-- js files -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      $(window).scroll(function () {
        $('nav').toggleClass('scrolled', $(this).scrollTop() > 600);
      });
      
    </script>
    <script>
      AOS.init({
        offset: 300, // offset (in px) from the original trigger point
        
        duration: 2000,
      });
    </script>
</body>

</html>