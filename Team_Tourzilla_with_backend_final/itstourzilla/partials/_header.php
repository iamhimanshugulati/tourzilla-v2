<?php

            session_start();
            echo'
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>

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

    .navbar-toggler {
        z-index: 10 !important;
    }

    body {
        background-color: white !important;
    }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light fixed-top mb-5">
        <div class="container">
            <a class="navbar-brand animate__animated animate__heartBeat  animate__infinite "
                href="/itstourzilla">TOURZILLA</a>
            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon "></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="/itstourzilla">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Services
                        </a>
                        <div class="dropdown-menu bg-primary text-center" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/itstourzilla/hotel/">Hotel</a>
                            <a class="dropdown-item" href="/itstourzilla/dinein/">Dine-In</a>
                            <a class="dropdown-item" href="/itstourzilla/explore/">Explore</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/itstourzilla/blog/">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/itstourzilla/team/">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/itstourzilla/contact/">Contact</a>
                    </li>

                ';

    
            if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] = true) {
          echo '
          &nbsp&nbsp
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Hi, ' . $_SESSION['full_name'] . ' !!
                        </a>
                        <div class="dropdown-menu bg-primary text-center" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/itstourzilla/profile/">Profile</a>
                        <a class="dropdown-item" href="/itstourzilla/sign-out">Sign Out</a>
                        </div>
                    </li>
                    </ul>
          </nav>';
          }
        else {
          echo '
          <a type="button" class="btn btn-primary  ml-4 btncmn" href="/itstourzilla/sign-in/" style="width:100px;height:40px;">Sign In</a><br>
          <a type="button" class="btn signup  btn-success ml-2  btncmn " href="/itstourzilla/sign-up/"  style="width:100px;height:40px;">Sign Up</a> 
          </ul>   
          </div>
          </div>
          
          </nav>';
          }

    ?>
</body>

</html>