<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/product.css">
</head>

<body>
    <div class="artcontainer">

    <?php
    $sql = "select product.*,category.category from product, category where product.category_id=category.id and featured_art=1";
    $res = mysqli_query($conn, $sql);
                           while ($row = mysqli_fetch_assoc($res)) { 
    ?>
                             
                                
      <?php  
      $title = $row['name']; 
    //   <img src="./images/<?php echo $row['image'] 
                           
    echo"
    <div class='listing'>
            <div class='listingImage'>
                <a href='./room_detail.php?id=#'>
                    <img src='../img/product/art/chair.jpg' class='listImg' alt='Rooms Near Me'>
                </a>
            </div>

            <div class='listingBody'>
                <h6 class='listingTitle'> <a href='./index.php?id=#'>$title</a> </h6>
                <span class='listingPlace'>Electric</span>
            </div>
            <div class='listingBody2'>
                <p class='listingPrice'>Rs.5000<span></span></p>
                <a class='btn' href='./room_detail.php?id=#'>Details</a>
            </div>
        </div>
    ";
                           }
    ?>    
    </div>
</body>

</html>