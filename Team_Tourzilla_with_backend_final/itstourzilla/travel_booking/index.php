<!DOCTYPE html>
<html>

<head>
    <title>Travel Booking: TourZilla</title>
    <?php include '../partials/_favicon.php';?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.0/animate.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/travelbook.css">

    <link rel="stylesheet" href="../css/monument.css">
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

   
        header{background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('../img/taj.jpg');
    background-size: 100% 100%;height: 100vh!important;z-index: -99;
     /* background-blend-mode:multiply;
    background-color:rgb(79, 82, 241);  */
  }

    </style>
</head>

<body>
     <?php include '../partials/_dbconnect.php';?> 

    <?php include '../partials/_header.php';?>

    <!-- <?php
    $id = $_GET['catid'];
    $sql = "SELECT * FROM `explore` WHERE `sno`=$id";
    $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $expstate = $row['state'];
            $expstate_desc = $row['state_desc'];
        }
    ?> -->
    <!-- ~~~~~~~~~~~~~~~~header start ~~~~~~~~~~~~~~~~ -->
    <br>
    <div class="header" style="heigh:100vh;margin-top:-80px!important;">
    <header class="container-fluid  my-5" style="height:100vh;">
        <br><br><br>
        <div class="headtext mt-5">

            <h1 class="text-white ">Plan Your Trip</h1>
            <p class="text-center ">“Traveling – it leaves you speechless, then turns you into a storyteller.”</p>

        </div>

    </header>
    </div>

    <!-- ~~~~~~~~~~~~~~~~header end ~~~~~~~~~~~~~~~~ -->
    <!-- ............form.................. -->
    <div class="container" style="padding: 50px 15px;">
        <div class="row">
            <div class="col-md-12">
                <!-- <img class="lg:h-48 md:h-36 w-full object-cover object-center img-fluid"
                    src="../../img/explore/<?php echo $expstate;?>.jpg" alt="<?php echo $expstate;?>">
                <p><b>Let's Explore <?php echo $expstate;?></b><br />
                    <?php echo $expstate_desc;?> -->
                </p>


            </div>


    <?php
    $showAlert = false;

    $method = $_SERVER['REQUEST_METHOD'];
    if ($method == 'POST') {
        // Insert data into db
        $exp_namee = $_POST['exp_name'];
        $exp_namee = str_replace("<", "&lt;", $exp_namee);
        $exp_namee = str_replace(">", "&gt;", $exp_namee);

        $exp_telephonee = $_POST['exp_telephone'];
        $exp_telephonee = str_replace("<", "&lt;", $exp_telephonee);
        $exp_telephonee = str_replace(">", "&gt;", $exp_telephonee);

        $exp_cityy = $_POST['exp_city'];
        $exp_cityy = str_replace("<", "&lt;", $exp_cityy);
        $exp_cityy = str_replace(">", "&gt;", $exp_cityy);

        $exp_statee = $_POST['exp_state'];
        $exp_statee = str_replace("<", "&lt;", $exp_statee);
        $exp_statee = str_replace(">", "&gt;", $exp_statee);
        

        $exp_pincodee = $_POST['exp_pincode'];
        $exp_pincodee = str_replace("<", "&lt;", $exp_pincodee);
        $exp_pincodee = str_replace(">", "&gt;", $exp_pincodee);

        $exp_countryy = $_POST['exp_country'];
        $exp_countryy = str_replace("<", "&lt;", $exp_countryy);
        $exp_countryy = str_replace(">", "&gt;", $exp_countryy);

        $exp_emaill = $_POST['exp_email'];
        $exp_emaill = str_replace("<", "&lt;", $exp_emaill);
        $exp_emaill = str_replace(">", "&gt;", $exp_emaill);
        
        $exp_travelerss = $_POST['exp_travelers'];
        $exp_travelerss = str_replace("<", "&lt;", $exp_travelerss);
        $exp_travelerss = str_replace(">", "&gt;", $exp_travelerss);

        $exp_travelTypee = $_POST['exp_travelType'];
        $exp_travelTypee = str_replace("<", "&lt;", $exp_travelTypee);
        $exp_travelTypee = str_replace(">", "&gt;", $exp_travelTypee);

        $exp_budgett = $_POST['exp_budget'];
        $exp_budgett = str_replace("<", "&lt;", $exp_budgett);
        $exp_budgett = str_replace(">", "&gt;", $exp_budgett);

        $exp_travelFromCityy = $_POST['exp_travelFromCity'];
        $exp_travelFromCityy = str_replace("<", "&lt;", $exp_travelFromCityy);
        $exp_travelFromCityy = str_replace(">", "&gt;", $exp_travelFromCityy);

        $exp_travelFromStatee = $_POST['exp_travelFromState'];
        $exp_travelFromStatee = str_replace("<", "&lt;", $exp_travelFromStatee);
        $exp_travelFromStatee = str_replace(">", "&gt;", $exp_travelFromStatee);

        $exp_travelFromCountryy = $_POST['exp_travelFromCountry'];
        $exp_travelFromCountryy = str_replace("<", "&lt;", $exp_travelFromCountryy);
        $exp_travelFromCountryy = str_replace(">", "&gt;", $exp_travelFromCountryy);

        $exp_travelFromRegionn = $_POST['exp_travelFromRegion'];
        $exp_travelFromRegionn = str_replace("<", "&lt;", $exp_travelFromRegionn);
        $exp_travelFromRegionn = str_replace(">", "&gt;", $exp_travelFromRegionn);

        $exp_travelPlaceCityy = $_POST['exp_travelPlaceCity'];
        $exp_travelPlaceCityy = str_replace("<", "&lt;", $exp_travelPlaceCityy);
        $exp_travelPlaceCityy = str_replace(">", "&gt;", $exp_travelPlaceCityy);

        $exp_travelPlaceStatee = $_POST['exp_travelPlaceState'];
        $exp_travelPlaceStatee = str_replace("<", "&lt;", $exp_travelPlaceStatee);
        $exp_travelPlaceStatee = str_replace(">", "&gt;", $exp_travelPlaceStatee);

        $exp_travelPlaceCountryy = $_POST['exp_travelPlaceCountry'];
        $exp_travelPlaceCountryy = str_replace("<", "&lt;", $exp_travelPlaceCountryy);
        $exp_travelPlaceCountryy = str_replace(">", "&gt;", $exp_travelPlaceCountryy);

        $exp_travelPlaceRegionn = $_POST['exp_travelPlaceRegion'];
        $exp_travelPlaceRegionn = str_replace("<", "&lt;", $exp_travelPlaceRegionn);
        $exp_travelPlaceRegionn = str_replace(">", "&gt;", $exp_travelPlaceRegionn);

        $startDatee = $_POST['startDate'];
        $startDatee = str_replace("<", "&lt;", $startDatee);
        $startDatee = str_replace(">", "&gt;", $startDatee);

        $endDatee = $_POST['endDate'];
        $endDatee = str_replace("<", "&lt;", $endDatee);
        $endDatee = str_replace(">", "&gt;", $endDatee);

        $descriptionn = $_POST['description'];
        $descriptionn = str_replace("<", "&lt;", $descriptionn);
        $descriptionn = str_replace(">", "&gt;", $descriptionn);

        $exp_namess = $_POST['exp_names'];
        //    
        $sql = "INSERT INTO `exp_book` (`exp_name`, `exp_telephone`, `exp_city`, `exp_state`, `exp_pincode`, `exp_country`, `exp_email`, `exp_travelers`, `exp_travelType`, `exp_budget`, `exp_travelFromCity`, `exp_travelFromState`, `exp_travelFromCountry`, `exp_travelFromRegion`, `exp_travelPlaceCity`, `exp_travelPlaceState`, `exp_travelPlaceCountry`, `exp_travelPlaceRegion`, `startDate`, `endDate`, `description`, `explore_state`) VALUES ('$exp_namee', '$exp_telephonee', '$exp_cityy', '$exp_statee', '$exp_pincodee', '$exp_countryy', '$exp_emaill', '$exp_travelerss', '$exp_travelTypee', '$exp_budgett', '$exp_travelFromCityy', '$exp_travelFromStatee', '$exp_travelFromCountryy', '$exp_travelFromRegionn', '$exp_travelPlaceCityy', '$exp_travelPlaceStatee', '$exp_travelPlaceCountryy', '$exp_travelPlaceRegionn', '$startDatee', '$endDatee', '$descriptionn', '$exp_namess')";
        
        $result = mysqli_query($conn, $sql);
        $showAlert = true;

        if ($showAlert) {
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!! Your trip to ' . $expstate . '</strong> has been booked, our team will call you as soon as possible. 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';
      }
        }
        ?>






    </div>
    <br><br>
    <h6>* All fields are required</h6>


    <form id="requestQuote" class="tripquote" action="<?php echo $_SERVER["REQUEST_URI"];?>" method="POST">
        <fieldset>
            <div class="row">

                <div class="form-group col-md-4"><label for="travelNameFirst">Full Name</label>
                    <input class="form-control" name="exp_name" type="text" placeholder="Your Full Name" required />
                </div>

                <div class="form-group col-md-4"><label for="telephone">Telephone</label>
                    <input class="form-control" name="exp_telephone" type="text" placeholder="Telephone" required />
                </div>

            </div>


            <div class="row">

                <div class="form-group col-md-6"><label for="city">City</label>
                    <input class="form-control" name="exp_city" type="text" placeholder="Your City" required />
                </div>

                <div class="form-group col-md-1"><label for="state">State</label>
                    <input class="form-control" name="exp_state" type="text" placeholder="ST" required />
                </div>

                <div class="form-group col-md-2"><label for="zip">Pin Code</label>
                    <input class="form-control" name="exp_pincode" type="text" placeholder="Your Pin Code" required />
                </div>

                <div class="form-group col-md-3"><label for="country">Country</label>
                    <input class="form-control" name="exp_country" type="text" placeholder="Country" required />
                </div>


            </div>
            <div class="row">
                <div class="form-group col-md-12"><label for="quoteEmail">Email address</label>
                    <input id="email" class="form-control" name="exp_email" required type="email"
                        placeholder="Enter email" aria-describedby="emailHelp" />
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="form-group col-md-3"><label for="travalers">Number of people</label>
                    <input class="form-control" type="number" name="exp_travelers" required min='1' value="1" />
                </div>

                <div class="form-group col-md-6"><label for="travelType">Type of Travel</label>
                    <input class="form-control" name="exp_travelType" type="text" placeholder="Type of Travel"
                        required />
                </div>
                <div class="form-group col-md-3"><label for="budget">Budget estimate</label>
                    <input id="budget" class="form-control" name="exp_budget" type="text" placeholder="Budget in INR"
                        required />
                </div>
            </div>

            <hr>

            <div class="row">

                <div class="form-group col-md-3"><label for="travelFromCity">Travel From</label>
                    <input class="form-control" type="text" name="exp_travelFromCity" placeholder="From City"
                        required />
                </div>

                <div class="form-group col-md-3"><label for="travelFromState">&nbsp;</label>
                    <input class="form-control" type="text" name="exp_travelFromState" placeholder="From State"
                        required />
                </div>

                <div class="form-group col-md-3"><label for="travelFromCountry">&nbsp;</label>
                    <input class="form-control" type="text" name="exp_travelFromCountry" placeholder="From Country"
                        required />
                </div>

                <div class="form-group col-md-3"><label for="travelFromRegion">&nbsp;</label>
                    <input class="form-control" type="text" name="exp_travelFromRegion" placeholder="From Region"
                        required />
                </div>

            </div>

            <hr>

            <div class="row">

                <div class="form-group col-md-3"><label for="travelPlaceCity">Travel To</label>
                    <input class="form-control" type="text" name="exp_travelPlaceCity" placeholder="To City" required />
                </div>

                <div class="form-group col-md-3"><label for="travelPlaceState">&nbsp;</label>
                    <input class="form-control" type="text" name="exp_travelPlaceState" placeholder="To State"
                        required />
                </div>

                <div class="form-group col-md-3"><label for="travelPlaceCountry">&nbsp;</label>
                    <input class="form-control" type="text" name="exp_travelPlaceCountry" placeholder="To Country"
                        required />
                </div>

                <div class="form-group col-md-3"><label for="travelPlaceRegion">&nbsp;</label>
                    <input class="form-control" type="text" name="exp_travelPlaceRegion" placeholder="To Region"
                        required />
                </div>

            </div>

            <hr>


            <div class="form-group" id="Traveldates">
                <div id="travelStart">
                    <div class="form-group"><label for="request">Start Date</label></div>
                    <div class="input-group date">
                        <input type="text" class="form-control" name="startDate" id="startDate" required>
                        <div class="input-group-addon"><span class="iconic iconic-calendar" title="calendar"
                                aria-hidden="true"></span></div>
                    </div>
                </div>
                <div id="travelEnd">
                    <div class="form-group"><label for="request">End Date</label></div>
                    <div class="input-group date">
                        <input type="text" class="form-control" name="endDate" id="endDate" required><span
                            class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" class="form-control" name="description" required rows="3"></textarea>
            </div>
            <input type="hidden" name="exp_names" value="<?php echo $expstate; ?>">

            <button class="btn btn-primary" type="submit">Book Now</button>
        </fieldset>
    </form>
    </div>
    </div>
    <!-- .................form-end............ -->

    <!-- ........footer start.......... -->
    <footer class="footer text-white mt-2 p-1 pt-3">
        <center>
            <p><a href="https://www.facebook.com" target="_blank"><i
                        class="animate__animated  animate__zoomIn  animate__infinite fa fa-facebook text-primary fa-2x ml-3"></i></a>
                <a href="https://www.instagram.com" target="_blank"><i
                        class=" animate__animated  animate__zoomIn  animate__infinite fa fa-instagram text-danger fa-2x ml-3"></i></a>
                <a href="https://twitter.com" target="_blank"><i class=" animate__animated  animate__zoomIn  animate__infinite
                  fa fa-twitter text-info fa-2x ml-3"></i></a>
                <a href="https://in.linkedin.com" target="_blank"><i class="animate__animated  animate__zoomIn  animate__infinite
                        fa fa-linkedin text-primary fa-2x ml-3"></i></a>
            </p>
            <h5 class="text-center">Copyright © 2020, Designed by <a href="/mytourzilla"
                    class="tourcolor font-weight-bolder text-decoration-none text-link footfontsize"
                    rel="noopener noreferrer" target="_blank" class="text-center text-warning">Tour<span
                        class="zillacolor">Zilla</span></a> Team — <a href="http://www.drinkingcode.tech"
                    class="zillacolor font-weight-bolder text-decoration-none text-link footfontsize"
                    rel="noopener noreferrer" target="_blank" class="text-center text-warning">@drinkingcode.tech</a>
            </h5>
        </center>

    </footer>
    <!-- ...........footer end........... -->
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