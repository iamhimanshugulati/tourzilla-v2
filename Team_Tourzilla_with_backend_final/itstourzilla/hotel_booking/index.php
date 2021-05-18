<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Hotel Booking: Tourzilla</title>
    <?php include '../partials/_favicon.php';?>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" />

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="../css/booknow.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
    <style>
    .scrolled {
        background-color: rgba(0, 0, 0, 0.4) !important;

    }

    nav {
        transition: 0.45s ease-in all !important;
    }
    </style>
</head>

<body style="background-image: url('../images/back.jpg');">
    <?php include '../partials/_dbconnect.php';?>
    <?php include '../partials/_header.php';?>

    <?php
    $id = $_GET['catid'];
    $sql = "SELECT * FROM `hotels` WHERE `sno`=$id";
    $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $hostname = $row['hotel'];
            $host_desc = $row['hotel_desc'];
            $host_loc = $row['location'];
        }
    ?>



    <!-- <div class="container">
        <img src="../img/dinein/<?php echo $hostname;?>.jpg" class="d-block w-100 img-fluid"
            alt="<?php echo $hostname;?>">
        <div class="container">
            <h1 class="text-light"><?php echo $hostname . ' now in ' .  $host_loc . '!!';?></h1>
            <p class="text-light"><?php echo $host_desc;?></p>
        </div>
    </div>  -->

                            <?php
                                $showAlert = false;

                                $method = $_SERVER['REQUEST_METHOD'];
                                if ($method == 'POST') {
                                    // Insert data into db
                                    
                                    $pincodee = $_POST['pincode'];
                                    $pincodee = str_replace("<", "&lt;", $pincodee);
                                    $pincodee = str_replace(">", "&gt;", $pincodee);

                                    $hot_ch_inn = $_POST['hot_ch_in'];
                                    $hot_ch_outt = $_POST['hot_ch_out'];
                                    $hot_num_roomm = $_POST['hot_num_room'];
                                    $hot_num_adultt = $_POST['hot_num_adult'];
                                    $hot_num_childd = $_POST['hot_num_child'];


                                    $hot_emaill = $_POST['hot_email'];
                                    $hot_emaill = str_replace("<", "&lt;", $hot_emaill);
                                    $hot_emaill = str_replace(">", "&gt;", $hot_emaill);
                                    

                                    $hot_numm = $_POST['hot_num'];
                                    $hot_numm = str_replace("<", "&lt;", $hot_numm);
                                    $hot_numm = str_replace(">", "&gt;", $hot_numm);

                                    $hot_namee = $_POST['hot_name'];
                                    $hot_namee = str_replace("<", "&lt;", $hot_namee);
                                    $hot_namee = str_replace(">", "&gt;", $hot_namee);
                                    
                                    $hot_namess = $_POST['hot_names'];

                                    
                                    $sql = "INSERT INTO `hotel_book` (`hot_pincode`, `hot_ch_in`, `hot_ch_out`, `hot_num_room`, `hot_num_adult`, `hot_num_child`, `hot_email`, `hot_num`, `hot_name`, `hotelname`) VALUES ('$pincodee', '$hot_ch_inn', '$hot_ch_outt', '$hot_num_roomm', '$hot_num_adultt', '$hot_num_childd', '$hot_emaill', '$hot_numm', '$hot_namee', '$hot_namess')";
                                    $result = mysqli_query($conn, $sql);
                                    $showAlert = true;

                                    if ($showAlert) {
                                        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong>Success!! Your Room in' . $hostname . '</strong> has been booked, our team will call you as soon as possible for confirmation. 
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>';
                                    }
                                }
                                ?>


    <div id="booking" class="section" style="margin-top:7%;">
        <div class="section-center">
            <div class="container">
                <div class="row">
                    <div class="booking-form">
                        <div class="form-header">
                            <h1>Make your reservation "<?php echo $hostname;?>"</h1>
                                
                        </div>

                        <?php 
            
            if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                echo '



                        <form action="' . $_SERVER["REQUEST_URI"] . '" method="POST">
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Country, ZIP, city..." name="pincode" required>
                                <span class="form-label">Destination</span>
                            </div>
                            <div class="row">
                                <div class="col-md-6  col-sm-11">
                                    <div class="form-group">
                                        <input class="form-control" type="date" name="hot_ch_in" required>
                                        <span class="form-label">Check In</span>
                                    </div>
                                </div>
                                <div class="col-md-6  col-sm-11">
                                    <div class="form-group">
                                        <input class="form-control" type="date" name="hot_ch_out" required>
                                        <span class="form-label">Check out</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4  col-sm-11">
                                    <div class="form-group">
                                        <select class="form-control" name="hot_num_room" required>
                                            <option value="" selected hidden>No of rooms</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                        <span class="select-arrow"></span>
                                        <span class="form-label">Rooms</span>
                                    </div>
                                </div>
                                <div class="col-md-4  col-sm-11">
                                    <div class="form-group">
                                        <select class="form-control" name="hot_num_adult" required>
                                            <option value="" selected hidden>No of adults</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                        <span class="select-arrow"></span>
                                        <span class="form-label">Adults</span>
                                    </div>
                                </div>
                                <div class="col-md-4  col-sm-11">
                                    <div class="form-group">
                                        <select class="form-control" name="hot_num_child" required>
                                            <option value="" selected hidden>No of children</option>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select>
                                        <span class="select-arrow"></span>
                                        <span class="form-label">Children</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4  col-sm-11">
                                    <div class="form-group">
                                        <input class="form-control" type="email" placeholder="' . $_SESSION['email_id']. '">
                                            <input type="hidden" name="hot_email" value="' . $_SESSION['email_id']. '">
                                        <span class="form-label">Email</span>
                                    </div>
                                </div>
                                <div class="col-md-4  col-sm-11">
                                    <div class="form-group">
                                        <input class="form-control " type="tel" placeholder="' . $_SESSION['mob_no']. '">
                                        <input type="hidden" name="hot_num" value="' . $_SESSION['mob_no']. '">
                                        <span class="form-label">Phone</span>
                                    </div>
                                </div>
                                <div class="col-md-4  col-sm-11">
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="' . $_SESSION['full_name']. '">
                                        <input type="hidden" name="hot_name" value="' . $_SESSION['full_name']. '">
                                        <span class="form-label">Full Name</span>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="hot_names" value="' . $hostname . '">

                            <div class="form-btn">
                                <button class="submit-btn ">Book Now</button>
                            </div><br>
                            <center><a href="../" class="btn btn-lime text-dark text-center mx-auto "
                                    style="background-color: lightblue;border-radius: 50px;">Back</a></center>
                        </form>';}





                        else {

                            echo '


                            
                            <form action="' . $_SERVER["REQUEST_URI"] . '" method="POST">
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Country, ZIP, city..." name="pincode" required>
                                <span class="form-label">Destination</span>
                            </div>
                            <div class="row">
                                <div class="col-md-6  col-sm-11">
                                    <div class="form-group">
                                        <input class="form-control" type="date" name="hot_ch_in" required>
                                        <span class="form-label">Check In</span>
                                    </div>
                                </div>
                                <div class="col-md-6  col-sm-11">
                                    <div class="form-group">
                                        <input class="form-control" type="date" name="hot_ch_out" required>
                                        <span class="form-label">Check out</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4  col-sm-11">
                                    <div class="form-group">
                                        <select class="form-control" name="hot_num_room" required>
                                            <option value="" selected hidden>No of rooms</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                        <span class="select-arrow"></span>
                                        <span class="form-label">Rooms</span>
                                    </div>
                                </div>
                                <div class="col-md-4  col-sm-11">
                                    <div class="form-group">
                                        <select class="form-control" name="hot_num_adult" required>
                                            <option value="" selected hidden>No of adults</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                        <span class="select-arrow"></span>
                                        <span class="form-label">Adults</span>
                                    </div>
                                </div>
                                <div class="col-md-4  col-sm-11">
                                    <div class="form-group">
                                        <select class="form-control" name="hot_num_child" required>
                                            <option value="" selected hidden>No of children</option>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select>
                                        <span class="select-arrow"></span>
                                        <span class="form-label">Children</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4  col-sm-11">
                                    <div class="form-group">
                                        <input class="form-control" type="email" placeholder="Enter your Email"
                                            name="hot_email" required>
                                        <span class="form-label">Email</span>
                                    </div>
                                </div>
                                <div class="col-md-4  col-sm-11">
                                    <div class="form-group">
                                        <input class="form-control" type="tel" placeholder="Enter you Phone"
                                            name="hot_num" required>
                                        <span class="form-label">Phone</span>
                                    </div>
                                </div>
                                <div class="col-md-4  col-sm-11">
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Enter you Full Name"
                                            name="hot_name" required>
                                        <span class="form-label">Full Name</span>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="hot_names" value="' . $hostname . '">

                            <div class="form-btn">
                                <button class="submit-btn ">Book Now</button>
                            </div><br>
                            <center><a href="../" class="btn btn-lime text-dark text-center mx-auto "
                                    style="background-color: lightblue;border-radius: 50px;">Back</a></center>
                        </form>';}?>






                    </div>
                </div>
            </div>
        </div>
    </div><br><br>
    <br>
    <br><br>

    <?php include '../partials/_footer.php';?>

    <!-- <script src="js/jquery.min.js"></script>
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<script>
		$('.form-control').each(function () {
			floatedLabel($(this));
		});

		$('.form-control').on('input', function () {
			floatedLabel($(this));
		});

		function floatedLabel(input) {
			var $field = input.closest('.form-group');
			if (input.val()) {
				$field.addClass('input-not-empty');
			} else {
				$field.removeClass('input-not-empty');
			}
		}
	</script> 
	 <script>
		AOS.init({
		   offset: 100, // offset (in px) from the original trigger point
		   
		   duration: 1000,
		 });
	  </script>  -->

</body>

</html>