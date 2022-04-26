<?php
include('../../db.php');
if (isset($_POST['submit'])) {
    $user = $_SESSION['name'];
    $duration = '6 month';
   
    $emailquery = "select * from subscription where user='$user'";
    $query = mysqli_query($conn, $emailquery);
    $emailcount = mysqli_num_rows($query);
    if ($emailcount = 0) {
        echo "Already Subscribed !";
    } else {
            $query = "insert into subscription(user,duration) values('$user','$duration')";
            $result = mysqli_query($conn, $query) or die('Error occur !');
            header('location:../../users/index.php');
            echo "submited";
       
        }
    }
    elseif(isset($_POST['submit2'])){
        $user = $_SESSION['name'];
    $duration = '1 year';
   
    $emailquery = "select * from subscription where user='$user'";
    $query = mysqli_query($conn, $emailquery);
    $emailcount = mysqli_num_rows($query);
    if ($emailcount = 0) {
        echo "Already Subscribed !";
    } else {
            $query = "insert into subscription(user,duration) values('$user','$duration')";
            $result = mysqli_query($conn, $query) or die('Error occur !');
            header('location:../../users/index.php');

            echo "submited";
       
        }
    }
    else{
        $user = $_SESSION['name'];
    $duration = '2 year';
   
    $emailquery = "select * from subscription where user='$user'";
    $query = mysqli_query($conn, $emailquery);
    $emailcount = mysqli_num_rows($query);
    if ($emailcount = 0) {
        echo "Already Subscribed !";
    } else {
            $query = "insert into subscription(user,duration) values('$user','$duration')";
            $result = mysqli_query($conn, $query) or die('Error occur !');
            header('location:../../users/index.php');

            echo "submited";
       
        }
    }


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>hello from my side</h1>

    <form action="" method="post">
        <input type="submit" value="submit" name="submit">
        <input type="submit" value="submit2" name="submit2">
        <input type="submit" value="submit3" name="submit3">


    </form>

</body>

</html>