<?php
include_once '../partials/_dbconnect.php';
if(isset($_POST['submit']))
{
    $user_id = $_POST['user_id'];
    $result = mysqli_query($conn,"SELECT * FROM `userss` WHERE `email_id`" . $_POST['user_id'] . "'");
    $row = mysqli_fetch_assoc($result);
	$fetch_user_id=$row['email_id'];
	// $email_id=$row['email_id'];
	$password=$row['password'];
	if($user_id==$fetch_user_id) {
        // echo $password;
				$to = $email_id;
                $subject = "Password";
                $txt = "Your password is : $password.";
                $headers = "From: helpdesk@drinkingcode.tech" . \r\n;
                mail($to,$subject,$txt,$headers);
			}
				else{
					echo 'Given Email id is not registered with us';
				}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password: TourZilla</title>
    <?php include '../partials/_favicon.php';?>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.0/animate.min.css" />
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../itstourzilla/css/style.css">
    <link rel="stylesheet" href="../itstourzilla/css/imagehover.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <style>
        .scrolled {
            background-color: rgba(0, 0, 0, 0.4) !important;

        }

        nav {
            transition: 0.45s ease-in all !important;
        }
 input{
 border:1px solid olive;
 border-radius:5px;
 }
 h1{
  color:darkgreen;
  font-size:22px;
  text-align:center;
 }

</style>

</head>
<body>
<?php include '../partials/_dbconnect.php';?>
<?php include '../partials/_header.php';?>
<br><br><br><br><br><br>
<div class="container">
<h1>Forgot Password<h1>
<form action='' method='post'>
<table cellspacing='5' align='center'>
<tr><td>user id:</td><td><input type='text' name='user_id'/></td></tr>
<tr><td></td><td><input type='submit' name='submit' value='Submit'/></td></tr>
</table>
</form></div><br><br><br><br><br>
<?php include '../partials/_footer.php';?>


</body>
</html>