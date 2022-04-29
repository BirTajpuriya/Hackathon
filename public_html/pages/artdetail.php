<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/artdetail.css">
</head>

<body>
<?php

$server="localhost";
$user="root";
$password="";
$db="wastetoart";

$conn=mysqli_connect($server,$user,$password,$db) or die('connection failed');

?>
    <?php
    include("../common/header.php");
    ?>
<?php
    $sql = "select product.*,category.category from product, category where product.category_id=category.id and featured_art=1";
    $res = mysqli_query($conn, $sql);
                           while ($row = mysqli_fetch_assoc($res)) {
    ?>


    <div class="slider">
        <div class="slide">
        
    
            <img src='../../users/images/<?php echo $row['image'] ?>' class='listImg' alt='Rooms Near Me'>
            <div class='caption'>First Image</div>
        </div>

        <div class='slide'>
            <img src='../../users/images/<?php echo $row['image'] ?>' class='listImg' alt='Rooms Near Me' />
            <div class='caption'>Second Image</div>
        </div>

        <div class='slide'>
            <img src='../../users/images/<?php echo $row['image'] ?>' class='listImg' alt='Rooms Near Me' />
            <div class='caption'>Third Image</div>
        </div>
    

       


        <!-- buttons -->
        <a class="prev">&#10094;</a>
        <a class="next">&#10095;</a>
    </div>




    <div class="acr-listing-details">
        <div class="acr-listing-section">
            <div class="acr-listing-section-body">
                <div class="acr-listing-section-price">
                    <span>For Sale</span>
                    <h3>Rs.<?php echo $row['price'] ?></h3>
                    <span>Per Item</span>
                </div>
                <button class="button" name="submit">BUY NOW</button>
            </div>
        </div>
        <div class="acr-listing-section">
            <div class="acr-listing-section-body">
                <h1> <?php echo $row['name'] ?> </h1>
               
                <p>
                <?php echo $row['description'] ?>
                </p>
                <?php
    }
        ?>
            </div>
        </div>

        <div class="acr-listing-section">

            <div class="acr-listing-section-body">
                <div class="acr-listing-meta">
                    <div class="row">
                        <div class="col-lg-6 col-md-3 col-sm-3">
                            <div class="acr-listing-meta-item">
                                <span>Contact Number</span>
                                <p>9810556983</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-3 col-sm-3">
                            <div class="acr-listing-meta-item">
                                <span>View</span>
                                <p>Biratnagar</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>


    <?php
    include("../common/footer.php");

    ?>
</body>

</html>

<script>
    const images = document.querySelectorAll(".slide"),
        next = document.querySelector(".next"),
        prev = document.querySelector(".prev");

    let current = 0;

    function changeImage() {
        images.forEach(img => {
            img.classList.remove("show");
            img.style.display = "none";
        });

        images[current].classList.add("show");
        images[current].style.display = "block";
    }

    // Calling first time
    changeImage();

    next.addEventListener("click", function() {
        current++;

        if (current > images.length - 1) {
            current = 0;
        } else if (current < 0) {
            current = images.length - 1;
        }

        changeImage();
    });
    prev.addEventListener("click", function() {
        current--;

        if (current > images.length - 1) {
            current = 0;
        } else if (current < 0) {
            current = images.length - 1;
        }

        changeImage();
    });

    // Auto change in 5 seconds

    setInterval(() => {
        next.click();
    }, 5000);
</script>