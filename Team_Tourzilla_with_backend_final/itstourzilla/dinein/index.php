<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dine-In: TourZila</title>
    <?php include '../partials/_favicon.php';?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.0/animate.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="../css/dinein.css">
</head>
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

/* header{background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)) ,url('img/banner.jpg');
  background-size: 100% 100%;height: 98vh;z-index: -99;} */
</style>
</head>

<body>
    <?php include '../partials/_dbconnect.php';?>
    <?php include '../partials/_header.php';?>

    <!-- ~~~~~~~~~~~~~~~~header start ~~~~~~~~~~~~~~~~ -->
    <section class="header-section header">
        <div class="center-div">
            <h1 class="font-weight-bold ">When you’re here, you’re family</h1>
            <p>Come hungry, leave happy</p>
            <div class="header-buttons">

                <a href="tel:+91701594864">Call us</a>
            </div>
        </div>
    </section>



    <!--  **********North Indian section******* -->
    <section class="container" id="room">

        <h4 class="text-center  mt-5 pt-3 font-weight-bold text-primary ">Best Continental Restaurants</h4>
        <hr class=" animate__animated  animate__zoomIn  animate__infinite "
            style="width:200px; background-color:red; height: 4px; margin: 4px auto;">
            <p class="text-capitalize mb-3 text-center">"As good as your Dreams"</p>
        <div class="row our-Rooms px-4">
            <!-- first -->



            <?php 
          $sql = "SELECT * FROM `dine_in` WHERE `res_min_desc`= 'Continental' ORDER BY RAND() LIMIT 3";
          $result = mysqli_query($conn, $sql);

          // fetching data

          while ($row = mysqli_fetch_assoc($result)) {
            $restsno = $row['sno'];
            $restname = $row['rest_name'];
            $restminname = $row['res_min_desc'];
            $restloc = $row['location'];
            $restdesc = substr($row['res_desc'], 0, 100);

            echo '


    
            <div class="col-md-4 col-sm-12 kit mb-5">
                <div class="card">
                    <img src="../img/dinein/' . $restname . '.jpg" class="card-img-top mb-3 " alt="' . $restname . '">
                    <div class="card-body">
                        <h5 class="card-title">' . $restname . ' <i class="fa fa-star text-primary"></i> <i
                                class="fa fa-star text-primary"></i> <i class="fa fa-star text-primary"> </i> <i
                                class="fa fa-star text-primary  "></i> <i
                                class="fa fa-star text-primary border-dark"></i></h5>
                        <p class="card-text">' . $restloc . '</p>
                        <p class="card-text">1800 for 2(approx)|Multi-Cuisine, Continental, Italian, North Indian,
                            Oriental</p>
                        <h6>1 offer available</h6>
                        <p>' . $restdesc . '</p>
                        <p class="off mb-2"><img class="icon" src="../assets/icon.png"> 50% Off The Total Bill</p>
                        <a href="/itstourzilla/dinein_booking/index.php?catid=' . $restsno . '" class="btn btn-primary">Book Now</a>
                    </div>
                </div>
                </div>';

                  }?>

        </div>
    </section>

    <!--************* North section End********** -->



    <!-- *************Happy clints start************** -->
    <section class="happyclients">
      <div class="container heading text-center ">
        <h4 class="text-center   pt-3 font-weight-bold text-primary ">Best Italian Restaurants</h4>
        <hr class=" animate__animated  animate__zoomIn  animate__infinite" style="width:200px; background-color:red; height: 4px; margin: 4px auto;">
            <p class="text-capitalize mb-3">"The perfect pasta"</p>
        </div>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner">
                <div class="carousel-item active">

                    <div class="row">


                    <?php 
          $sql = "SELECT * FROM `dine_in` WHERE `res_min_desc`= 'Italian'";
          $result = mysqli_query($conn, $sql);

          // fetching data

          while ($row = mysqli_fetch_assoc($result)) {
            $restsno = $row['sno'];
            $restname = $row['rest_name'];
            $restminname = $row['res_min_desc'];
            $restloc = $row['location'];
            $restdesc = substr($row['res_desc'], 0, 100);

            echo '

                        <!-- first -->
                        <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                            <div class="box">
                                <a href="/itstourzilla/dinein_booking/index.php?catid=' . $restsno . '"><img src="../img/dinein/' . $restname . '.jpg" class="img-fluid img-thumbnail mb-3"></a>
                                <div class="cap p-1">
                                    <center>
                                        <h5 class="card-title mt-3 text-gray-dark font-weight-bold ">' . $restname . ' <i
                                                class="fa fa-star text-primary"></i> <i
                                                class="fa fa-star text-primary"></i> <i class="fa fa-star text-primary">
                                            </i> <i class="fa fa-star "></i> <i class="fa fa-star"></i></h5>
                                        <p class="card-text">' . $restloc . '</p>
                                        <p class="card-text">2000 for 2(approx) | Italian special</p>
                                        <h6 class="text-gray-dark font-weight-bold">1 Coupon Available
                                        </h6>
                                        <p>' . $restdesc . '</p>
                                        <h4 class="off "><img class="icon mb-2" src="../assets/icon.png"> 15% Off The Total
                                            Bill</h4>
                                    </center>
                                    <a href="/itstourzilla/dinein_booking/index.php?catid=' . $restsno . '" class="btn btn-primary mb-4 my-2 ">Book Now</a>
                                </div>
                            </div>
                        </div>';
          }
          ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    <!-- *************Happy clints End************** -->
    
    
    <!--  **********Continental section******* -->
    

    <section class="container" id="room">

        <h4 class="text-center  pt-3 font-weight-bold text-primary ">Best North Indian Restaurants</h4>
        <hr class=" animate__animated  animate__zoomIn  animate__infinite "
            style="width:200px; background-color:red; height: 4px; margin: 4px auto;">
            <p class="text-capitalize mb-3 text-center">"Crisp & Spicy"</p>
        <div class="row our-Rooms px-4">
            <!-- first -->



            <?php 
          $sql = "SELECT * FROM `dine_in` WHERE `res_min_desc`= 'North Indian' ORDER BY RAND() LIMIT 3";
          $result = mysqli_query($conn, $sql);

          // fetching data

          while ($row = mysqli_fetch_assoc($result)) {
            $restsno = $row['sno'];
            $restname = $row['rest_name'];
            $restminname = $row['res_min_desc'];
            $restloc = $row['location'];
            $restdesc = substr($row['res_desc'], 0, 100);

            echo '


    
            <div class="col-md-4 col-sm-12 kit ">
                <div class="card">
                    <img src="../img/dinein/' . $restname . '.jpg" class="card-img-top mb-3 " alt="' . $restname . '">
                    <div class="card-body">
                        <h5 class="card-title">' . $restname . ' <i class="fa fa-star text-primary"></i> <i
                                class="fa fa-star text-primary"></i> <i class="fa fa-star text-primary"> </i> <i
                                class="fa fa-star text-primary  "></i> <i
                                class="fa fa-star text-primary border-dark"></i></h5>
                        <p class="card-text">' . $restloc . '</p>
                        <p class="card-text">1800 for 2(approx)|Multi-Cuisine, Continental, Italian, North Indian,
                            Oriental</p>
                        <h6>1 offer available</h6>
                        <p>' . $restdesc . '</p>
                        <p class="off mb-2"><img class="icon" src="../assets/icon.png"> 50% Off The Total Bill</p>
                        <a href="/itstourzilla/dinein_booking/index.php?catid=' . $restsno . '" class="btn btn-primary">Book Now</a>
                    </div>
                </div>
                </div>';

                  }?>

        </div>
    </section>



    <!--************* Continantal section End********** -->



    <!-- *************Chinese start************** -->
    <section class="happyclients">
      <div class="container heading text-center ">
        <h4 class="text-center  mt-5  pt-3 font-weight-bold text-primary ">Best Chinese Restaurants</h4>
        <hr class=" animate__animated  animate__zoomIn  animate__infinite" style="width:200px; background-color:red; height: 4px; margin: 4px auto;">
            <p class="text-capitalize mb-3">"Taste the difference"</p>
        </div>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner">
                <div class="carousel-item active">

                    <div class="row">


                    <?php 
          $sql = "SELECT * FROM `dine_in` WHERE `res_min_desc`= 'Chinese' ORDER BY RAND() LIMIT 3";
          $result = mysqli_query($conn, $sql);

          // fetching data

          while ($row = mysqli_fetch_assoc($result)) {
            $restsno = $row['sno'];
            $restname = $row['rest_name'];
            $restminname = $row['res_min_desc'];
            $restloc = $row['location'];
            $restdesc = substr($row['res_desc'], 0, 100);

            echo '

                        <!-- first -->
                        <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                            <div class="box">
                                <a href="/itstourzilla/dinein_booking/index.php?catid=' . $restsno . '"><img src="../img/dinein/' . $restname . '.jpg" class="img-fluid img-thumbnail mb-3"></a>
                                <div class="cap p-1">
                                    <center>
                                        <h5 class="card-title mt-3 text-gray-dark font-weight-bold ">' . $restname . ' <i
                                                class="fa fa-star text-primary"></i> <i
                                                class="fa fa-star text-primary"></i> <i class="fa fa-star text-primary">
                                            </i> <i class="fa fa-star "></i> <i class="fa fa-star"></i></h5>
                                        <p class="card-text">' . $restloc . '</p>
                                        <p class="card-text">2000 for 2(approx) | Italian special</p>
                                        <h6 class="text-gray-dark font-weight-bold">1 Coupon Available
                                        </h6>
                                        <p>' . $restdesc . '</p>
                                        <h4 class="off"><img class="icon" src="../assets/icon.png"> 15% Off The Total
                                            Bill</h4>
                                    </center>
                                    <a href="/itstourzilla/dinein_booking/index.php?catid=' . $restsno . '" class="btn btn-primary my-2 mb-2" >Book Now</a>
                                </div>
                            </div>
                        </div>';
          }
          ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- *************Chinese End************** -->








    <!-- *************Contact Us ************ -->
    <div class="container bg-contact" id="contact">

        <div class="container headings text-center">
            <h1 class="text-center font-weight-bold pt-3 mb-3"><i class="fas fa-smile"></i>Feedback Form</h1>
            <p class="text-capitalize pt-1 mb-3 text-dark mt-3">We're Here To Help And Answer Any Question You Might
                Have. We Look Forward To Hearing From You</p>
        </div>

        <div class="form-group">
            <input type="text" class="form-control" placeholder="Enter Your name" id="username" required
                autocomplete="off">
        </div>

        <form action="/action_page.php">
            <div class="form-group">
                <input type="email" class="form-control" placeholder="Enter Your Email address" id="Email" required
                    autocomplete="off">
            </div>

            <form action="/action_page.php">
                <div class="form-group">
                    <input type="number" class="form-control" placeholder="Enter Your Mobile number" id="mobile"
                        required autocomplete="off">
                </div>

                <div class="form-group">
                    <textarea class="form-control" row="4" placeholder="Give your valueable Feedback"
                        id="comment"></textarea>
                </div>


                <div class="d-flex form-button justify-content-center form-button">
                    <button type="submit" class="btn  mb-4 w-40">Submit</button>
                </div><br><br>
            </form>

    </div>

    <!-- ************* End Contact Us ************ -->

    <?php include '../partials/_footer.php';?>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script>
    $(window).scroll(function() {
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