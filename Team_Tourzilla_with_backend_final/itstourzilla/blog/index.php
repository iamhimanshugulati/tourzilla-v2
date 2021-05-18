<!DOCTYPE html>
<html lang="en">

<head>
    <title>Blog: TourZilla</title>
    <?php include '../partials/_favicon.php';?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.0/animate.min.css" />
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/blog.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <style>
    .scrolled {
        background-color: rgba(0, 0, 0, 0.3) !important;

    }

    .headtext h1:hover {
        color: yellow;
        cursor: pointer;
    }

    nav {
        transition: 0.45s ease-in all !important;
    }

    header {
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('../assets/hotel/hero.jpg');
        background-size: 100% 100%;
        height: 98vh;
        z-index: -99;
    }
    </style>
</head>

<body>
    <?php include '../partials/_dbconnect.php';?>
    <?php include '../partials/_header.php';?>


    <!-- ........header section............ -->
    <section class="blog">
        <div class="blog_header">
            <h1 class="text-black animate__animated  animate__zoomIn  animate__infinite ">Blogs</h1>
            <p>“The World is a book and those who do not <br>travel read only a page.”</p>
            <!-- <center> <a href="#blog " class="btn btn-primary mt-3 ">Write Here</a></center> -->
        </div>
    </section>
    <!-- -- ........ End header section............ -->
    <!-- ...................blog section........... -->


    <div class="container-fluid mt-5 mb-5">
        <h1 class="mt-4 pt-5 text-center headings  " data-aos="zoom-in">Our Latest Blogs...</h1>
        <hr class=" animate__animated  animate__zoomIn  animate__infinite "
            style="width:160px; background-color:red; height: 3px; margin: 3px auto;"><br>
            <div class="container-fluid mt-5 ">
            <div class="row mb-5">
            <?php 
          $sql = "SELECT * FROM `blogs` ORDER BY RAND() LIMIT 6";
          $result = mysqli_query($conn, $sql);

          // fetching data

          while ($row = mysqli_fetch_assoc($result)) {
            $blogid = $row['blog_id'];
            $blogname = $row['blog_name'];
            $blogmindesc = $row['blog_min_des'];
            $blogdesc = substr($row['blog_desc'], 0, 70);
              // substr() function is used for slicing character 3 parameter required 1st varable, 2nd start, 3rd last character
                           
        echo '
        <div class="col-lg-4 col-md-4 col-sm-11 my-2">
          <div class="card" data-aos="zoom-in">
          <img src="../img/blog/' . $blogname . '.jpg" class="card-img-top" alt="...">
          <div class="card-body">
          <h3 class="card-title">' . $blogname . '</h3>
          <small class="text-secondary">' . $blogmindesc . '</small>
          <p class="card-text">' . $blogdesc . '.............</p>
          <a class="text-indigo-500 button inline-flex items-center md:mb-2 lg:mb-0" href="#"  style="color:white!important;">View Blogs</a>
        </div>
        </div>
        </div>';
          }
      ?>
        </div></div>



        <?php include '../partials/_footer.php';?>

        <!-- js files -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
        $(window).scroll(function() {
            $('nav').toggleClass('scrolled', $(this).scrollTop() > 400);
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