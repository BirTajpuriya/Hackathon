<?php

include '../../db.php';
if (isset($_POST['submit'])) {
    $username=$_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    if($email==''){
        ?>
        <script>alert('Please Input Email and Password');</script>
        <?php
    }
    else{
        $email_search = "select * from registration where email='$email' ";
        $query = mysqli_query($conn, $email_search);
        $email_count = mysqli_num_rows($query);
        if ($email_count>0) {
            $email_pass = mysqli_fetch_assoc($query);
            $login=true;
           
            $db_pass = $email_pass['password'];
            session_start();
            $_SESSION['loggedin']=true;
            $_SESSION['name']=$username;
            $pass_decode = password_verify($password, $db_pass);
            if ($pass_decode) {
                echo "login success";
                header('location:../../public_html/pages/index.php');
               
            } else {
                echo " wrong password";
            }
        } else {
            echo "Invalid email";
        }
    }
   
}
?>