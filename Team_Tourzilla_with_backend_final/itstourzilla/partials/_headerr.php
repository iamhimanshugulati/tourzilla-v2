<!DOCTYPE html>
<html lang="en">

<head>
  <title>TourZilla</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.0/animate.min.css" />
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" href="css/imagehover.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <style>
    .scrolled {
      background-color: rgba(0, 0, 0, 0.4) !important;

    }

    nav {
      transition: 0.45s ease-in all !important;
    }
    .navbar-toggler{
      z-index: 10!important;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light fixed-top mb-5">
    <div class="container">
      <a class="navbar-brand animate__animated animate__heartBeat  animate__infinite " href="index.html">TOURZILLA</a>
      <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon "></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item ">
            <a class="nav-link" href="../index.php">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Services
            </a>
            <div class="dropdown-menu bg-primary text-center" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="../hotel/index.php">Hotel</a>
              <a class="dropdown-item" href="../dinein/index.php">Dine-In</a>
              <a class="dropdown-item" href="../explore/index.php">Explore</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../blog/index.php">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../team/index.php">Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../contact/index.php">Contact</a>
          </li>
        
        </ul>
        <a type="button" class="btn btn-primary px-3 ml-4 btncmn" href="/itstourzilla/sign-in/" style="width:100px;">Sign In</a><br>
<a type="button" class="btn signup  btn-success px-3 ml-2  btncmn " href="/itstourzilla/sign-up/" style="width:100px;">Sign Up</a> 
      </div>
    </div>


  </nav>

  
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
        offset: 100, // offset (in px) from the original trigger point
        
        duration: 1000,
      });
    </script>

    </body>
    </html>