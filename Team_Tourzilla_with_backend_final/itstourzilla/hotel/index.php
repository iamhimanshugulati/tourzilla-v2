<!DOCTYPE html>
<html>

<head>
    <title>Hotels: TourZilla</title>
    <?php include '../partials/_favicon.php';?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.0/animate.min.css" />
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="../css/imagehover.min.css">
    <link rel="stylesheet" href="../css/monument.css">
    <link rel="stylesheet" href="../css/hotel.css">
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

    <!-- ~~~~~~~~~~~~~~~~header start ~~~~~~~~~~~~~~~~ -->
    <header class="container-fluid ">
        <div class="headtext">
            <h1 class="text-white heading animate__animated  In animate__flipInX animate__infinite ">Top Hotels in the
                City</h1>
            <p class="text-center">Come, stay and enjoy your day</p>

        </div>

    </header>

    <!-- ~~~~~~~~~~~~~~~~header end ~~~~~~~~~~~~~~~~ -->
    <!-- <.........search section............... -->
    <div class="container shadow mx-auto search " style="width:80%;" data-aos="zoom-in">
        <form class="mx-auto">
            <div class="form-row   ml-5">

                <div class=" col-md-2 col-11 mb-2 ">
                    <h3 class="text-secondary text-center pb-4 ">Check In Date:</h3>
                    <input type="date" class="form-control" placeholder="City">
                </div>
                <div class=" col-md-2 col-11 mb-2 ">
                    <h3 class="text-secondary text-center pb-4 ">Check OutDate:</h3>
                    <input type="date" class="form-control" placeholder="City">
                </div>
                <div class=" col-md-2 col-11 mb-2">
                    <h3 class="text-secondary text-center pb-4 ">Adults:</h3>
                    <select class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>

                    </select>
                </div>
                <div class=" col-md-2 col-11 mb-2">
                    <h3 class="text-secondary text-center pb-4 ">Children:</h3>
                    <select class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>

                    </select>
                </div>
                <div class=" col-md-2 col-11 mb-2">
                    <h3 class="text-secondary text-center pb-4 ">Rooms:</h3>
                    <select class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>



                    </select>
                </div>
                <!-- customer section -->
                <div class=" col-md-2 col-11 " style="margin-top:43px;">

                    <input type="submit" class="btn btn-outline-success btn-block px-4 rounded-2 " value="Book Now">
                </div>
            </div>
        </form>
    </div><br></br>
    <section class="container customer my-5">
        <div class="row">
            <div class="col-md-6 col-sm-11" data-aos="zoom-in">
                <div class="bg-primary box_1">

                </div>
                <img src="../assets/hotel/customer1.png" class=" box_2" style="width: 578px; height: 400px;">
            </div>
            <div class="col-md-6 col-sm-11" data-aos="zoom-in">
                <div class="cust-cont" style="width: 600px;">
                    <h1 class="  headings  ">About Our Hotels</h1>
                    <hr class=" animate__animated  animate__zoomIn  animate__infinite "
                        style="width:200px; background-color:red; height: 4px; margin: 4px 25px;"><br>
                    <h2>Make the customer the hero of your story</h2>
                    <ul style="list-style-type:disc">
                        <li>At the hotel entry points, both the guests’ as well as staff’s body temperature will be
                            monitored. Anyone with temperature above 99.1 degree Celsius shall be refused entry.</li>
                        <li> Hotels have masks and sanitisers in every room for guest use. </li>
                        <li> As per the government indicative, the hotel staff would have the Arogya Setu app on their
                            phones.</li>
                        <li> Every member of the staff would wear face masks and gloves during service.</li>
                        <li> The floors of every room and the common area would be cleaned with hospital-grade
                            disinfectants.</li>
                        <li> To avoid less external contact, the hotel would make in-room dining options available with
                            minimal contact service by serving you in sanitised, disposable crockery and cutlery.</li>
                        <li> The hotel staff would ensure that social distancing is maintained at all times.</li>
                        <br><br>

                    </ul>
                    <a href="#" class="btn btn-primary btn-lg">Learn More</a>
                </div>

            </div>
        </div>
    </section>

    <!-- ...............coustomer end................ -->
    <!-- ...............our rooms................ -->
    <section class="container" id="room">
        <h1 class="mt-4 pt-5 text-center headings  " data-aos="zoom-in">Our Rooms</h1>
        <hr class=" animate__animated  animate__zoomIn  animate__infinite " data-aos="zoom-in"
            style="width:150px; background-color:red; height: 4px; margin: 4px auto;"><br>



        <div class="row our-Rooms px-4">

            <?php 
          $sql = "SELECT * FROM `hotels`";
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
          <img src="../img/hotel/' . $hotname . '.jpg" class="card-img-top " alt="' . $hotname . ' picture">
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



    <!-- <div class="col-md-4 col-sm-10 room mx-auto" data-aos="zoom-in">
            <div class="card" style="width: 23rem; height: 30rem;">
                <img src="../assets/hotel/room2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's
                        content.</p>
                    <a href="booknow.html" class=" button ">Book Now</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-10 room mx-auto" data-aos="zoom-in">
            <div class="card" style="width: 23rem; height: 30rem;">
                <img src="../assets/hotel/room3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's
                        content.</p>
                    <a href="booknow.html" class=" button ">Book Now</a>
                </div>
            </div>
        </div>
        </div>
        <div class="row our-Rooms px-4 pt-4 ">
            <div class="col-md-4 col-sm-10 room mx-auto" data-aos="zoom-in">
                <div class="card" style="width: 23rem; height: 30rem; ">
                    <img src="../assets/hotel/room4.jpg" class="card-img-top " alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's
                            content.</p>
                        <a class=" button ">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-10 room mx-auto" data-aos="zoom-in">
                <div class="card" style="width: 23rem; height: 30rem;">
                    <img src="../assets/hotel/room5.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's
                            content.</p>
                        <a href="booknow.html" class="btn button ">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-10 room mx-auto" data-aos="zoom-in">
                <div class="card" style="width: 23rem; height: 30rem;">
                    <img src="../assets/hotel/room6.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's
                            content.</p>
                        <a href="booknow.html" class=" button ">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- ...............our rooms end................ -->
    <br>

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
    AOS.init({
        offset: 100, // offset (in px) from the original trigger point

        duration: 1000,
    });
    </script>

</body>

</html>