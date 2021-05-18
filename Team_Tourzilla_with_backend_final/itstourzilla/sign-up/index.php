<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/form.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>Sign-Up: TourZilla</title>
    <?php include '../partials/_favicon.php';?>
</head>

<body class="box">
    <?php include '../partials/_dbconnect.php';?>
    <!-- <?php include '../partials/_header.php';?> -->

    <div class="container mb-5  " data-aos="zoom-in" style="width:90%;">
        <div class="row form mx-auto  shadow mt-5" style="filter: drop-shadow(0px 0px 4px black);border-radius: 10px;">

            <div class="col-md-5 col-sm-11 box_2 sign-h " style="border:none;border-right:1px solid #d3d3d3;">
                <img class="ml-3 img-fluid p-3" src="../images/sign.jpg">
                <p class="text-center " style="margin-top:-30px;">I have already an Account?</p>
        <center><a class="text-center" href="../sign-in/index.php" style="text-decoration:none;">Sign In </a></center>
        <center><a class="text-center btn btn-sm w-25 mt-2" href="../index.php">Back </a></center>
            </div>
            <div class="col-md-7 col-sm-11 sign-b ">
                <form action="/itstourzilla/partials/_handlesignup.php" method="POST" class="p-5">
                    

                        <div class="form-group ">
                            <h2 class="mb-3 pb-3 text-center " style="font-weight: bold;">Sign Up</h2>
                            <div class="form-group ">
                                <label class="text-secondary w-100 " for="exampleInputPassword1" style="margin-right: 190px;">
                                    <i class="fa fa-user"></i>Full Name:</label>
                                <input type="text" id="exampleInputPassword1" name="f_name" required>
                            </div>
                            


                            <label class="text-secondary w-100" for="exampleInputEmail1" style="margin-right: 190px;"><i
                                    class="fa fa-envelope"></i> Email</label>
                            <input type="email" id="exampleInputEmail1" aria-describedby="emailHelp" name="email_id" required>
                            
                          <br><div class="form-group ">
                                <label class="text-secondary w-100 " for="exampleInputPassword1" style="margin-right: 190px;">
                                    <i class="fa fa-user"></i> Contact Number</label>
                                <input type="number" id="exampleInputPassword1" name="contact_no" required>
                            </div>

                        </div>
                        <div class="form-group">
                            <label class="text-secondary w-100" for="exampleInputPassword1" style="margin-right: 170px;">
                                <i class="fa fa-lock"></i> Password</label>
                            <input type="password" id="exampleInputPassword1" name="password" required>
                        </div>
                        <div class="form-group">
                            <label class="text-secondary w-100" for="exampleInputPassword1" style="margin-right: 170px;">
                                <i class="fa fa-lock"></i> Confirm Password</label>
                            <input type="password" id="exampleInputPassword1" name="cpassword" required>
                        </div>
                        <p class="forget-pass"> <i class="fa fa-lock"></i> Forget password ?</p>



                        <button type="submit" class="btn ">Signup</button>
                    

                    <center>
                        <div class="Social-icon  d-flex justify-content-between mt-3 " style="height: auto;width:50%;">
                            <a href=""><img src="../images/facebook.png"></a>
                            <a href=""><img src="../images/twitter.png"></a>
                            <a href=""><img src="../images/linkedin-logo.png"></a>
                            <a href=""><img src="../images/instagram.png"></a>

                        </div>
                    </center>
                </form>
            </div>
        </div>
    </div>

    <!-- <?php include '../partials/_footer.php';?> -->
    <!-- js files -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    AOS.init({
        offset: 300, // offset (in px) from the original trigger point

        duration: 2000,
    });
    </script>
</body>

</html>