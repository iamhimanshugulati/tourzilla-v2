<?php
$showError = "true";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include '_dbconnect.php';
        $email_id = $_POST["email_id"];
        $email_id = str_replace("<", "&lt;", $email_id);
        $email_id = str_replace(">", "&gt;", $email_id);

        $password = $_POST["password"];
        $password = str_replace("<", "&lt;", $password);
        $password = str_replace(">", "&gt;", $password);

        $sql = "SELECT * FROM `userss` WHERE `email_id` = '$email_id' && `password`='$password'";
        $result = mysqli_query($conn, $sql);
        $numRows = mysqli_num_rows($result);

        if ($numRows == 1) {
            $row = mysqli_fetch_assoc($result);
                // if(password_verify($password, $row['password'])){
                                session_start();
                                $_SESSION['loggedin'] = true;
                                $_SESSION['email_id'] = $email_id;
                                $_SESSION['mob_no'] = $row['mob_no'];
                                $_SESSION['full_name'] = $row['full_name'];
                                


                                // if((isset($_SESSION['role']) && $_SESSION['role'] == "admin")){
                        // echo "logged in Welcome" . $_SESSION['full_name'] . " email id contact number";
                                // header("location: " . $_SERVER["HTTP_REFERER"] . "?login=true");
                                
                        // Complete path to this page
                                
                        // header("location: /itstourzilla/admin/index.php?login=true");
                        // else{
                                header("location: /itstourzilla/index.php?login=true");
                        //     }  
                // }
                // elseif ($numRows ==! 1) {
                //         header("location: /itstourzilla/index.php?login=false&error=Password_do_not_match");
                // }
                
        }
        else {
                header("location: /itstourzilla/index.php?login=false&error=Invalid_Credentials");
        }


}


?>