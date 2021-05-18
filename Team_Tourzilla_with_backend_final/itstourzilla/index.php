<!DOCTYPE html>
<html lang="en">

<head>
    <title>Hotels | Restaurant-Table | No Advance Payment!! | TourZilla</title>

    <?php include '../itstourzilla/partials/_favicon.php';?>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.0/animate.min.css" />
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../itstourzilla/css/style.css">
    <link rel="stylesheet" href="../itstourzilla/css/imagehover.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="css/hotel.css">
    <link rel="stylesheet" href="../css/dinein.css">
    <style>
    .scrolled {
        background-color: rgba(0, 0, 0, 0.4) !important;

    }

    nav {
        transition: 0.45s ease-in all !important;
    }
    </style>
</head>

<body>
    <?php include '../itstourzilla/partials/_dbconnect.php';?>

    <?php include '../itstourzilla/partials/_header.php';?>

    <!-- start carausel -->
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel" data-interval=5000>

        <?php include '../itstourzilla/partials/_carousel.php';?>


        <!-- ...............our Services.................. -->

        <section class="text-gray-700 body-font py-3">
            <h1 class="mt-5 text-center headings  " data-aos="fade-in">Our Services</h1>
            <hr class=" animate__animated  animate__zoomIn  animate__infinite "
                style="width:100px; background-color:red; height: 4px; margin: 4px auto;" data-aos="fade-in"><br>

            <div class="container-fluid  px-5  mx-auto ">

                <div class="row ">
                    <div data-aos="zoom-in" class="col-md-4   " style="height: 400px!important;"
                        data-aos="zoom-in">
                        <!-- Card -->
                        <a href="../itstourzilla/hotel">
                            <div class="card booking-card card-ser">

                                <!-- Card image -->

                                <div class="view overlay">
                                    <div class="inner">
                                        <img class="card-img-top" src="../itstourzilla/img/hotel1.jpg"
                                            alt="Card image cap">
                                    </div>
                                    <a href="../itstourzilla/hotel">
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>

                                <!-- Card content -->
                                <div class="card-body">

                                    <!-- Title -->
                                    <h4 class="card-title font-weight-bold"><a href="../itstourzilla/hotel">Hotel
                                            Booking</a></h4>


                                    <p class="card-text"><i class="fa fa-quote-left text-primary"
                                            aria-hidden="true"></i>Big
                                        savings on hotels in 120000 destinations worldwide. Browse hotel reviews and
                                        find
                                        the guaranteed best price on hotels for all budgets.<i
                                            class="fa fa-quote-right text-primary" aria-hidden="true"></i>
                                    </p>
                                </div>
                            </div>
                        </a>
                        <!-- Card -->
                    </div>
                    <div data-aos="zoom-in" class="col-md-4 mb-4 " data-aos="zoom-in">
                        <!-- Card -->
                        <a href="../itstourzilla/dinein">
                            <div class="card booking-card card-ser">

                                <!-- Card image -->
                                <div class="view overlay">
                                    <div class="inner">
                                        <img class="card-img-top" src="../itstourzilla/img/dinner.jpg"
                                            alt="Card image cap">
                                    </div>
                                    <a href="../itstourzilla/dinein">
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>

                                <!-- Card content -->
                                <div class="card-body">

                                    <!-- Title -->
                                    <h4 class="card-title font-weight-bold"><a href="../itstourzilla/dinein">Dine in</a>
                                    </h4>


                                    <p class="card-text"><i class="fa fa-quote-left text-primary"
                                            aria-hidden="true"></i>Find best restaurants nearby offering discounts on
                                        food &
                                        drinks, check out menu, reviews and also book a table through dineout for
                                        free.<i class="fa fa-quote-right text-primary" aria-hidden="true"></i></p>


                                </div>

                            </div>
                        </a>
                        <!-- Card -->
                    </div>
                    <div data-aos="zoom-in" class="col-md-4 mb-5 " data-aos="zoom-in">
                        <!-- Card -->
                        <a href="../itstourzilla/explore">
                            <div class="card booking-card card-ser">

                                <!-- Card image -->
                                <div class="view overlay">
                                    <div class="inner">
                                        <img class="card-img-top" src="../itstourzilla/img/monument.jpg"
                                            alt="Card image cap">
                                    </div>
                                    <a href="../itstourzilla/explore">
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>

                                <!-- Card content -->
                                <div class="card-body">

                                    <!-- Title -->
                                    <h4 class="card-title font-weight-bold"><a
                                            href="../itstourzilla/explore">Explore</a>
                                    </h4>


                                    <p class="card-text"><i class="fa fa-quote-left text-primary"
                                            aria-hidden="true"></i>we
                                        offer comprehensive services for leisure and corporate travel as well as
                                        completely
                                        customized travel packages.<i class="fa fa-quote-right text-primary"
                                            aria-hidden="true"></i></p>


                                </div>

                            </div>
                        </a>
                        <!-- Card -->
                    </div>
                </div>
            </div>
        </section>

        <!-- randomly  Hotel data started -->

        <section class="container" id="room" style="margin-top:0px;!important">
            <h1 class="mt-5 text-center headings  " data-aos="fade-in"  style="font-size:30px;">Hotels Nearby</h1>
            <hr class=" animate__animated  animate__zoomIn  animate__infinite " data-aos="zoom-in"
                style="width:150px; background-color:red; height: 4px; margin: 4px auto;"><br>
            <div class="row our-Rooms px-4">

                <?php 
                    $sql = "SELECT * FROM `hotels` ORDER BY RAND() LIMIT 3";
                        $result = mysqli_query($conn, $sql);

                        // fetching data

                        while ($row = mysqli_fetch_assoc($result)) {
                        $hotsno = $row['sno'];
                        $hotname = $row['hotel'];
                        $hotloc = $row['location'];
                        $hotdesc = substr($row['hotel_desc'], 0, 100);
                        // substr() function is used for slicing character 3 parameter required 1st varable, 2nd start, 3rd last character


                        echo '
                        
                        <div class="col-md-4 col-sm-10 room mx-auto" data-aos="zoom-in">
                        <div class="card" style="width: 23rem; height: 30rem; ">
                        <img src="../itstourzilla/img/hotel/' . $hotname . '.jpg" class="card-img-top " alt="' . $hotname . ' picture">
                        <div class="card-body">
                        <h5 class="card-title">' . $hotname . ' in ' . $hotloc . '</h5>

                        <p class="card-text">' . $hotdesc . '..........</p>
                        <a  href="/itstourzilla/hotel_booking/index.php?catid=' . $hotsno . '" class=" button ">Book Now</a>

                        </div>
                        </div>
                        </div>';
                        }
                        ?>
            </div>
        </section>
        <!-- Randomly hotel data end -->


        <!-- randomly  Dinein data started -->

        <section class="container" id="room">

            <h4 class="text-center  pt-3 font-weight-bold " style="font-size:30px;color:black;">Restaurants Nearby</h4>
            <hr class=" animate__animated  animate__zoomIn  animate__infinite mb-5"
                style="width:150px; background-color:red; height: 4px; margin: 4px auto;">
            <div class="row our-Rooms px-4">
                <!-- first -->


                <?php 
          $sql = "SELECT * FROM `dine_in` ORDER BY RAND() LIMIT 3";
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
                    <img src="../itstourzilla/img/dinein/' . $restname . '.jpg" class="card-img-top mb-3 " alt="' . $restname . '">
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
                        <p class="off mb-2"><img class="icon" src="../itstourzilla/assets/icon.png"> 50% Off The Total Bill</p>
                        <a href="/itstourzilla/dinein_booking/index.php?catid=' . $restsno . '" class="btn btn-primary">Book Now</a>
                    </div>
                </div>
                </div>';

                  }?>

            </div>
        </section>

        <!-- Randomly dinein data end -->


        <!-- randomly  Exlpre data started -->

        <div class="sections">
            <!-- north Section  -->
            <section class="sec-white" id="east" style="margin-bottom:-10px;">
                <h1 class=" text-center headings  " data-aos="zoom-in">Explore India</h1>
                <hr class=" animate__animated  animate__zoomIn  animate__infinite "
                    style="width:130px; background-color:red; height: 4px; margin: 4px auto;"><br>

                <section class=" body-font">
                    <div class="container px-5 pt-5  mx-auto">
                        <div class="flex flex-wrap -m-4 transition">

                            <?php 
                            $sql = "SELECT * FROM `explore` ORDER BY RAND() LIMIT 3";
                            $result = mysqli_query($conn, $sql);

                            // fetching data

                            while ($row = mysqli_fetch_assoc($result)) {
                                $expsno = $row['sno'];
                                $expregion = $row['region'];
                                $expstate = $row['state'];
                                $expdesc = substr($row['state_desc'], 0, 100);

                                echo '


                            <div class="p-4 md:w-1/3 exp-card " data-aos="zoom-in">
                                <div class="h-full border-2 border-gray-200 rounded-lg overflow-hidden">
                                    <img class="lg:h-48 md:h-36 w-full object-cover object-center"
                                    src="../itstourzilla/img/explore/' . $expstate . '.jpg" alt="' . $expstate . '">
                                    <div class="p-6">

                                        <h1 class="title-font text-lg font-medium text-gray-900 mb-3">' . $expstate . '</h1>
                                        <p class="leading-relaxed mb-3">' . $expdesc . '</p>
                                        <div class="flex items-center flex-wrap ">
                                            <a class="text-indigo-500 inline-flex button items-center md:mb-2 lg:mb-0" href="/itstourzilla/travel_booking/index.php?catid=' . $expsno . '">Book Now</a>
                                            

                                            <span
                                                class="text-gray-600 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-300">
                                                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none"
                                                    stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                </svg>1.2K
                                            </span>
                                            <span class="text-gray-600 inline-flex items-center leading-none text-sm">
                                                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none"
                                                    stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                                    <path
                                                        d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                                    </path>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            ';}?>
                        </div>
                    </div>
                </section>
            </section>
        </div>
        <br>
        <br>

        <!-- Randomly Explore India data end -->




        <?php include '../itstourzilla/partials/_mainpagehighlight.php';?>



        <!-- happyclient -->
        <section>
            <!-- clint section -->
            <h1 class="mt-5 pt-3 text-center headings  " data-aos="zoom-in">Reviews </h1>

            <hr class=" animate__animated  animate__zoomIn  animate__infinite "
                style="width:150px; background-color:red; height: 4px; margin: 4px auto;" data-aos="zoom-in"><br>
            <div>
                <div>
                    <div>
                    <?php 
                            $sql = "SELECT * FROM `review` ORDER BY RAND() LIMIT 1";
                            $result = mysqli_query($conn, $sql);

                            // fetching data

                            while ($row = mysqli_fetch_assoc($result)) {
                                $reviewname = $row['full_name'];
                                $reviewdesc = $row['review_desc'];

                                echo '

                        <div class="mx-auto w-50">
                            <center><img class="img-thumbnail rounded-circle mx-auto " src="../itstourzilla/img/review/' . $reviewname . '.jpg"" alt="First slide"style="width:200px!important; height: 200px !important;">
                            </center>
                            <br><br>
                            <p class="text-secondary text-center">' . $reviewdesc . '
                            </p>
                            <br>
                            <span class="text-center d-block mx-auto"><i class="fa fa-star text-primary"></i> <i
                                    class="fa fa-star text-primary"></i> <i class="fa fa-star text-primary"> </i> <i
                                    class="fa fa-star text-primary  "></i> <i
                                    class="fa fa-star text-primary border-dark"></i></span><br>

                            <h3 class="text-center">' . $reviewname . '</h3>
                        </div>';}?>






                    </div>
                </div>
            </div><br>
        </section>
        <!-- .................Contact ........... -->


        <!-- <div class="container-fluid border-dark contact mb-5" id="cont">
            <h1 class="mt- text-center headings  ">Contact</h1>
            <hr class=" animate__animated  animate__zoomIn  animate__infinite "
                style="width:150px; background-color:red; height: 4px; margin: 4px auto;"><br>
            <div class="row  mx-auto " style="width: 75%;box-shadow: 2px 2px 2px black,-3px -3px 2px black; ">
                <div data-aos="zoom-in" class="col-md-5 col-sm-12 center_img  ">
                    <img src="../itstourzilla/img/cont.jpg" style="height:500px; width:500px; margin-top: 40px; ">


                </div>
                <div data-aos="zoom-in" class="col-md-6 col-sm-11 mx-auto py-3  ">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Name</label>
                            <input type="text" class="form-control" id="exampleInputPassword1"
                                placeholder="Enter your name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                else.</small>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Mobile</label>
                            <input type="text" class="form-control" id="exampleInputPassword1"
                                placeholder="Enter your number">
                        </div>
                        <div class="form-group purple-border">
                            <label for="exampleFormControlTextarea4">Message</label>
                            <textarea class="form-control" id="exampleFormControlTextarea4" rows="3"></textarea>
                        </div>


                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-warning btn-block">Submit</button>
                    </form>
                </div>
            </div>
        </div> -->
    </div>
    <!-- .................Contact end........... -->




    <?php include '../itstourzilla/partials/_footer.php';?>





    <!-- js files -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
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