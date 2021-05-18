<!DOCTYPE html>
<html>

<head>
    <title>Explore India with TourZilla</title>
    <?php include '../partials/_favicon.php';?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.0/animate.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="../css/imagehover.min.css">
    <link rel="stylesheet" href="../css/monument.css">
    <style>
    .scrolled {
        background-color: rgba(0, 0, 0, 0.3) !important;

    }
    a{
        text-decoration:none!important;
    }

    .headtext h1:hover {
        color: yellow;
        cursor: pointer;
    }

    nav {
        transition: 0.45s ease-in all !important;
    }

    header {
        background: url('../img/banner.jpg');
        background-size: 100% 100%;
        height: 98vh;
        z-index: -99;
        background-blend-mode: multiply;
        background-color: rgb(79, 82, 241);
    }
    </style>
</head>

<body>
    <?php include '../partials/_dbconnect.php';?>
    <?php include '../partials/_header.php';?>

    <!-- ~~~~~~~~~~~~~~~~header start ~~~~~~~~~~~~~~~~ -->
    <header class="container-fluid">
        <div class="headtext">
            <h1 class="text-white ">Famous Explors in India</h1>
            <p class="text-center animate__animated  In animate__flipInX animate__infinite "" >Save our Monuments , Save our nations pride.</p>
    <center><a class=" btn btn-warning mx-auto mt-3 rounded-2">Explore Now</a></center>
        </div>

    </header>

    <!-- ~~~~~~~~~~~~~~~~header end ~~~~~~~~~~~~~~~~ -->
    <!-- <.........search section............... -->
    <div class="container shadow mx-auto search w-70 py-4" data-aos="zoom-in">
        <form class="mx-auto">
            <div class="form-row   ml-5">
                <div class=" col-md-3 col-11 mb-2">
                    <select class="form-control">
                        <option>Small select</option>
                        <option>Small select</option>
                        <option>Small select</option>
                        <option>Small select</option>
                        <option>Small select</option>
                        <option>Small select</option>
                        <option>Small select</option>
                        <option>Small select</option>
                        <option>Small select</option>

                    </select>
                </div>
                <div class=" col-md-3 col-11 mb-2">
                    <input type="date" class="form-control" placeholder="City">
                </div>
                <div class=" col-md-3 col-11 mb-2">
                    <input type="number" class="form-control" placeholder="Enter no.  of People">
                </div>
                <div class=" col-md-3 col-11 mb-2  ">
                    <input type="submit" class="btn btn-success btn-block px-4 rounded-2" value="Submit">
                </div>
            </div>
        </form>
    </div><br></br>
    <!-- .......subnavbar........ -->
    <div class="container-fluid  bg-dark justify-content-center shadow " data-aos="zoom-in">
        <div class="d-flex bg-dark bar p-3 justify-content-between w-50 mx-auto text-white">
            <a href="#north" class="font-weight-bold justify-content-between">East</a>
            <a href="#west" class="font-weight-bold  justify-content-between">West</a>
            <a href="#south" class="font-weight-bold justify-content-between ">South</a>
            <a href="#east" class="font-weight-bold  justify-content-between">North</a>
        </div>
    </div>
    <!-- .......End subnavbar........ -->

    <?php include '../partials/_explorecon.php';?>

    <!-- End about section -->


    <div class="sections">
        <!-- north Section  -->
        <section class="sec-white" id="east">
            <h1 class="mt-4 pt-5 text-center headings  " data-aos="zoom-in">North India</h1>
            <hr class=" animate__animated  animate__zoomIn  animate__infinite "
                style="width:100px; background-color:red; height: 4px; margin: 4px auto;"><br>

            <section class=" body-font">
                <div class="container px-5 pt-5  mx-auto">
                    <div class="flex flex-wrap -m-4 transition">

                            <?php 
                            $sql = "SELECT * FROM `explore` WHERE `region`= 'North India'";
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
                                    src="../img/explore/' . $expstate . '.jpg" alt="' . $expstate . '">
                                    <div class="p-6">

                                        <h1 class="title-font text-lg font-medium text-gray-900 mb-3">' . $expstate . '</h1>
                                        <p class="leading-relaxed mb-3">' . $expdesc . '</p>
                                        <div class="flex items-center flex-wrap ">
                                            <a class="text-indigo-500 inline-flex button items-center md:mb-2 lg:mb-0" href="/itstourzilla/travel_booking/index.php?catid=' . $expsno . '" style="color:white!important;">Book Now</a>
                                            

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
        <!-- north Section  end -->

        <!-- West Section  -->

        <div class="sections">
        <!-- north Section  -->
        <section class="sec-white" id="east">
            <h1 class="mt-4 pt-5 text-center headings  " data-aos="zoom-in">West India</h1>
            <hr class=" animate__animated  animate__zoomIn  animate__infinite "
                style="width:100px; background-color:red; height: 4px; margin: 4px auto;"><br>

            <section class=" body-font">
                <div class="container px-5 pt-5  mx-auto">
                    <div class="flex flex-wrap -m-4 transition">

                            <?php 
                            $sql = "SELECT * FROM `explore` WHERE `region`= 'West India'";
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
                                    src="../img/explore/' . $expstate . '.jpg" alt="' . $expstate . '">
                                    <div class="p-6">

                                        <h1 class="title-font text-lg font-medium text-gray-900 mb-3">' . $expstate . '</h1>
                                        <p class="leading-relaxed mb-3">' . $expdesc . '</p>
                                        <div class="flex items-center flex-wrap ">
                                            <a class="text-indigo-500 inline-flex button items-center md:mb-2 lg:mb-0" href="/itstourzilla/travel_booking/index.php?catid=' . $expsno . '"  style="color:white!important;">Book Now</a>
                                            

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

        <!-- West Section  end -->

        <!-- South Section  -->

        <div class="sections">
        <!-- north Section  -->
        <section class="sec-white" id="east">
            <h1 class="mt-4 pt-5 text-center headings  " data-aos="zoom-in">South India</h1>
            <hr class=" animate__animated  animate__zoomIn  animate__infinite "
                style="width:100px; background-color:red; height: 4px; margin: 4px auto;"><br>

            <section class=" body-font">
                <div class="container px-5 pt-5  mx-auto">
                    <div class="flex flex-wrap -m-4 transition">

                            <?php 
                            $sql = "SELECT * FROM `explore` WHERE `region`= 'South India'";
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
                                    src="../img/explore/' . $expstate . '.jpg" alt="' . $expstate . '">
                                    <div class="p-6">

                                        <h1 class="title-font text-lg font-medium text-gray-900 mb-3">' . $expstate . '</h1>
                                        <p class="leading-relaxed mb-3">' . $expdesc . '</p>
                                        <div class="flex items-center flex-wrap ">
                                            <a class="text-indigo-500 inline-flex button items-center md:mb-2 lg:mb-0" href="/itstourzilla/travel_booking/index.php?catid=' . $expsno . '"  style="color:white!important;">Book Now</a>
                                            

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

        <!-- South Section  end -->

        <!-- East Section  -->
        <div class="sections">
        <!-- north Section  -->
        <section class="sec-white" id="east">
            <h1 class="mt-4 pt-5 text-center headings  " data-aos="zoom-in">East India</h1>
            <hr class=" animate__animated  animate__zoomIn  animate__infinite "
                style="width:100px; background-color:red; height: 4px; margin: 4px auto;"><br>

            <section class=" body-font">
                <div class="container px-5 pt-5  mx-auto">
                    <div class="flex flex-wrap -m-4 transition">

                            <?php 
                            $sql = "SELECT * FROM `explore` WHERE `region`= 'East India'";
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
                                    src="../img/explore/' . $expstate . '.jpg" alt="' . $expstate . '">
                                    <div class="p-6">

                                        <h1 class="title-font text-lg font-medium text-gray-900 mb-3">' . $expstate . '</h1>
                                        <p class="leading-relaxed mb-3">' . $expdesc . '</p>
                                        <div class="flex items-center flex-wrap ">
                                            <a class="text-indigo-500 inline-flex button items-center md:mb-2 lg:mb-0" href="/itstourzilla/travel_booking/index.php?catid=' . $expsno . '"  style="color:white!important; text-decoration:none!important;">Book Now</a>
                                            

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
        <!-- East Section  end -->
    </div>


    <br><br>
    <br>

    <?php include '../partials/_footer.php';?>

    <!-- js files -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        $(window).scroll(function () {
            $('nav').toggleClass('scrolled', $(this).scrollTop() > 400);
        });
        AOS.init({
            offset: 100, // offset (in px) from the original trigger point

            duration: 1000,
        });
    </script>
</body>

</html>