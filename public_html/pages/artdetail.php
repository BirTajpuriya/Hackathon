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
    include("../common/header.php");
    ?>




    <div class="slider">
        <div class="slide">

            <img src='../img/product/art/flower.jpg' class='listImg' alt='Rooms Near Me'>
            <div class='caption'>First Image</div>
        </div>

        <div class='slide'>
            <img src='../img/product/art/flower.jpg' class='listImg' alt='Rooms Near Me' />
            <div class='caption'>Second Image</div>
        </div>

        <div class='slide'>
            <img src='../img/product/art/flower.jpg' class='listImg' alt='Rooms Near Me' />
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
                    <h3>Rs.5000</h3>
                    <span>Per Item</span>
                    <p>Rs.5000/PCS</p>
                </div>
                <button class="button" name="submit">BUY NOW</button>
            </div>
        </div>
        <div class="acr-listing-section">
            <div class="acr-listing-section-body">
                <h1> <?php echo "Lorem Ipsum is simply dummy text of the printing and typesetting industry."; ?> </h1>
                <div class="acr-listing-icons">
                    <div class="acr-listing-icon">
                        <i class="flaticon-bedroom"></i>
                        <span>
                            <?php
                            $furnished = 1;
                            if ($furnished == 1) {
                                echo "<img src='../img/user/logo.png' class='icons' alt='Rooms Near Me' />
                    
                    </span>
                    <span class='acr-listing-icon-value'>Furnished</span>
                    ";
                            }
                            ?>
                    </div>
                    <div class="acr-listing-icon">
                        <i class="flaticon-bathroom"></i>
                        <span>
                            <?php
                            $water = 1;
                            if ($water == 1) {
                                echo "<img src='../img/user/logo.png' class='icons' alt='Rooms Near Me' />
                    
                    </span>
                    <span class='acr-listing-icon-value'>Water</span>
                    ";
                            }
                            ?>
                    </div>
                    <div class="acr-listing-icon">
                        <i class="flaticon-ruler"></i>
                        <span>
                            <?php
                            $electricity = 1;
                            if ($electricity == 1) {
                                echo "<img src='../img/user/logo.png' class='icons' alt='Rooms Near Me' />
                    
                    </span>
                    <span class='acr-listing-icon-value'>Electricity</span>
                    ";
                            }
                            ?>
                    </div>
                </div>
                <p>
                    <?php echo "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."; ?>
                </p>
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