<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dine-In Booking: TourZilla</title>
    <?php include '../partials/_favicon.php';?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.0/animate.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="../css/dinebooks.css">
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
    <?php include '../partials/_dbconnect.php';?>
    <?php include '../partials/_header.php';?>

    <?php
    $id = $_GET['catid'];
    $sql = "SELECT * FROM `dine_in` WHERE `sno`=$id";
    $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $restname = $row['rest_name'];
            $rest_min_desc = $row['res_min_desc'];
            $rest_desc = $row['res_desc'];
            $rest_loc = $row['location'];
        }
    ?>


    <div id="carouselExampleSlidesOnly" class="carouselslide side" data-ride="carousel">
        <div class="carousel-inner ">
            <div class="carousel-item dine_book active">
                <img src="../img/dinein/<?php echo $restname;?>.jpg" class="d-block w-100 img-fluid" alt="...">
                <div class="carousel-caption ">
                    <h1 class="text-light"><?php echo $restname . ' now in '.  $rest_loc . '!!';?></h1>
                    <p class="text-light"><?php echo $rest_desc;?></p>
                </div>
            </div>
            <div class="carousel-item  dine_book">
                <img src="../img/mm.jpg" class="d-block w-100 img-fluid" alt="...">
                <div class="carousel-caption ">
                    <h1>Find your table for any occasion</h1>
                    <p>Your Diet is a bank account<br>Good food choices for Good investments.</p>
                </div>
            </div>
            <div class="carousel-item  dine_book">
                <img src="../img/dd.jpg" class="d-block w-100 img-fluid" alt="...">
                <div class="carousel-caption ">
                    <h1>Find your table for any occasion</h1>
                    <p>Your Diet is a bank account<br>Good food choices for Good investments.</p>
                </div>
            </div>

        </div>
    </div>

    <!-- start form -->
    <div class="container mt-5 ">
        <div class="row acord" style="height:auto">
            <div class="col-md-6 col-sm-11 mx-auto " id="form">
                <center>
                    <h1 class="formh1 mt-5 pb-5">Please Select your Booking Details</h1>
                </center>

                <?php
    $showAlert = false;

    $method = $_SERVER['REQUEST_METHOD'];
    if ($method == 'POST') {
        // Insert data into db
        $dine_date = $_POST['dine_date'];
        $dinein_num = $_POST['dinein_num'];
        $dinein_sess = $_POST['dinein_sess'];

        $dine_fname = $_POST['f_name'];
        $dine_fname = str_replace("<", "&lt;", $dine_fname);
        $dine_fname = str_replace(">", "&gt;", $dine_fname);
        

        $dine_email = $_POST['email_id'];
        $dine_email = str_replace("<", "&lt;", $dine_email);
        $dine_email = str_replace(">", "&gt;", $dine_email);

        $dine_con = $_POST['contact_num'];
        $dine_con = str_replace("<", "&lt;", $dine_con);
        $dine_con = str_replace(">", "&gt;", $dine_con);

        $dine_boo_desc = $_POST['dinein_book_desc'];
        $dine_boo_desc = str_replace("<", "&lt;", $dine_boo_desc);
        $dine_boo_desc = str_replace(">", "&gt;", $dine_boo_desc);
        
        $rest_names = $_POST['rest_names'];
        $rest_locc = $_POST['rest_locc'];

        
        $sql = "INSERT INTO `dinein_book` (`dine_date`, `dinein_num`, `dinein_sess`, `f_name`, `email_id`, `contact_num`, `dinein_book_desc`, `rest_name`, `rest_loc`) VALUES ('$dine_date', '$dinein_num', '$dinein_sess', '$dine_fname', '$dine_email', '$dine_con', '$dine_boo_desc','$rest_names', '$rest_locc')";
        $result = mysqli_query($conn, $sql);
        $showAlert = true;

        if ($showAlert) {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!!</strong> Your Table has been booked, our team will call you as soon as possible. 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
        }
    }
    ?>

<?php 
            
            if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                echo '

                    <form action="' . $_SERVER["REQUEST_URI"] . '" method="POST">
                    <div class="row">
                        <div class="form-group col-md-4">
                            <center><label class="input" for="date">Select Date</label></center>
                            <input type="date" name="dine_date" class="form-control">
                        </div>

                        <div class="form-group col-md-4">
                            <center><label class="input" for="inputState">Select Guest</label></center>
                            <select id="inputState" class="form-control" name="dinein_num">
                                <option selected>Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="6+">6+</option>
                            </select>
                        </div>

                        <div class="form-group col-md-4">
                            <center><label class="input" for="inputState">Select Session</label></center>
                            <select id="inputState" class="form-control" name="dinein_sess">
                                <option selected>Choose...</option>
                                <option value="Break">Breakfast</option>
                                <option value="Lunch">Lunch</option>
                                <option value="Dinner">Dinner</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col">
                            <input type="text" class="form-control" placeholder="' . $_SESSION['full_name']. '" disabled>
                            <input type="hidden" name="f_name" value="' . $_SESSION['full_name']. '">
                        </div>
        
                        
                    </div><br>
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="' . $_SESSION['email_id']. '" disabled>
                            <input type="hidden" name="email_id" value="' . $_SESSION['email_id']. '">

                        </div>
                        <div class="col">

                        <input type="text" class="form-control" placeholder="' . $_SESSION['mob_no']. '" disabled>
                        <input type="hidden" name="contact_num" value="' . $_SESSION['mob_no']. '">
                        
                        </div>
                    </div><br>
                    <div class="form-group">
                        <center><label class="input" for="exampleFormControlTextarea1">Additional requests</label>
                        </center>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                            name="dinein_book_desc" placeholder="Additional comment"></textarea>
                    </div>

                    <input type="hidden" name="rest_names" value="' . $restname . '">
                    <input type="hidden" name="rest_locc" value="' . $rest_loc . '">

                    <center><button class="btn btn-warning" type="submit">Book</button></center>

                </form>';}





                else {

                  echo '
                <form action="' . $_SERVER["REQUEST_URI"] . '" method="POST">
                    <div class="row">
                        <div class="form-group col-md-4">
                            <center><label class="input" for="date">Select Date</label></center>
                            <input type="date" id="birthday" name="dine_date" class="form-control">
                        </div>

                        <div class="form-group col-md-4">
                            <center><label class="input" for="inputState">Select Guest</label></center>
                            <select id="inputState" class="form-control" name="dinein_num">
                                <option selected>Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="6+">6+</option>
                            </select>
                        </div>

                        <div class="form-group col-md-4">
                            <center><label class="input" for="inputState">Select Session</label></center>
                            <select id="inputState" class="form-control" name="dinein_sess">
                                <option selected>Choose...</option>
                                <option value="Break">Breakfast</option>
                                <option value="Lunch">Lunch</option>
                                <option value="Dinner">Dinner</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col">
                            <input type="text" class="form-control" placeholder="Full name" name="f_name" required>
                        </div>
                        
                    </div><br>
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Email Id" name="email_id" required>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Mobile Number" name="contact_num" required>
                        </div>
                    </div><br>
                    <div class="form-group">
                        <center><label class="input" for="exampleFormControlTextarea1">Additional requests</label>
                        </center>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                            name="dinein_book_desc" placeholder="Additional comment"></textarea>
                    </div>

                    <input type="hidden" name="rest_names" value="' . $restname . '">
                    <input type="hidden" name="rest_locc" value="' . $rest_loc . '">

                    <center><button class="btn btn-warning" type="submit">Book</button></center>

                </form>';}
                ?>
            </div>

            <!-- accordion -->



            <div class="col-md-6 col-sm-11 small-accord ">
                <div id="accordion">

                    <div class="card">
                        <div class="card-header">
                            <a class="card-link" data-toggle="collapse" href="#collapseOne">
                                <span><img src="../img/dinner.png" class="img-fluid acod_menu"
                                        style="width: 30px !important;"></span><span
                                    class="ml-4 font-weight-bolder">&nbsp;&nbsp;&nbsp;SPECIAL DISHES </span>


                            </a>
                        </div>
                        <div id="collapseOne" class="collapse show" data-parent="#accordion">
                            <div class="card-body mx-auto">
                                <center>
                                    <div class="row ">
                                        <div class="col-md-6 col-sm-11">
                                            <img src="../img/368875.jpg" class="card-img-top img-fluid" alt="...">
                                        </div>
                                        <div class="col-md-6 col-sm-11">
                                            <img src="../img/ff.jpg" class="card-img-top img-fluid" alt="...">
                                        </div>
                                    </div>
                                </center>
                                <center>
                                    <div class="row ">
                                        <div class="col-md-6 col-sm-11">
                                            <img src="../img/tt.jpg" class="card-img-top img-fluid" alt="...">
                                        </div>
                                        <div class="col-md-6 col-sm-11">
                                            <img src="../img/food.jpg" class="card-img-top img-fluid" alt="...">
                                        </div>
                                    </div>
                                </center>

                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <a class="collapsed card-link menuimg" data-toggle="collapse" href="#collapseTwo">
                                <span><img src="../img/menu.png" class="img-fluid acod_menu"
                                        style="width: 30px !important;"></span><span
                                    class="ml-4 font-weight-bolder">&nbsp;&nbsp;&nbsp;MENU</span>
                        </div>
                        <div id="collapseTwo" class="collapse" data-parent="#accordion">
                            <div class="card-body  mx-auto">
                                <center>
                                    <div class="row menu">
                                        <div class="col-md-4 col-sm-11">
                                            <h3 style="color:red; font-weight: bold;">Breakfast</h3>
                                            <img src="../img/breakf.jpg" class="card-img-top img-fluid" alt="...">
                                        </div>
                                        <div class="col-md-4 col-sm-11">
                                            <h3 style="color:red; font-weight: bold;">Lunch</h3>
                                            <img src="../img/lunch.jpg" class="card-img-top img-fluid" alt="...">
                                        </div>
                                        <div class="col-md-4 col-sm-11">
                                            <h3 style="color:red; font-weight: bold;">Dinner</h3>
                                            <img src="../img/dinner.jpg" class="card-img-top img-fluid" alt="...">
                                        </div>
                                    </div>
                                </center>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>


    </div>

    <?php include '../partials/_footer.php';?>
    <!--End accordion -->




















    <!-- ***********script**************** -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
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