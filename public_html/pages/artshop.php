<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/artshop.css">
</head>

<body>
    <?php
    include("../common/header.php");

    ?>
    <?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "wastetoart";
    $conn = mysqli_connect($server, $user, $password, $db) or die('connection failed');

    ?>
    <!-- filter starts -->
    <div class="form">
        <form method="post">

            <div class="formSelect1">
                <label class="label">Type:</label>
                <select class="select2" name="flocation">
                    <option selected value="*">ART</option>
                    <option value="Kathmandu">Kathmandu</option>
                    <option value="Biratnagar">Biratnagar</option>
                    <option value="Pokhara">Pokhara</option>
                </select>
            </div>

            <div class="formSelect1">
                <label class="label">Catagory:</label>
                <select class="select2" name="fstatus">
                    <option selected value="*">METAL</option>
                    <option value="For Rent">PLASTIC</option>
                    <option value="For Sale">WOOD</option>
                </select>
            </div>

            <div class="formSelect1">
                <label class="label">Price Range:</label>
                <div class="select2">
                    <input type="number" class=" select" placeholder="FROM" name="initial_price" style="width: 60px">
                    <input type="number" class="select" placeholder="TO" name="final_price" style="width: 60px">
                </div>
            </div>

            <div class="formSelect1">
                <button type="submit" class="bttn" name="submit">Search</button>
            </div>
        </form>
    </div>

    <!-- product starts -->

    <div class='artcontainer'>
        <?php
        $sql = "select product.*,category.category from product, category where product.category_id=category.id and status=1";
        $res = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($res)) {
            if ($row) {
                $title = $row['name'];
                echo "
        <div class='listing'>
            <div class='listingImage'>
                <a href='./room_detail.php?id='>
                    <img src='../img/product/art/chair.jpg' class='listImg' alt='Rooms Near Me'>
                </a>
            </div>

            <div class='listingBody'>
                <h6 class='listingTitle'> <a href='./index.php?id='>$title</a> </h6>
                <span class='listingPlace'>Electric</span>
            </div>
            <div class='listingBody2'>
                <p class='listingPrice'>Rs.5000<span></span></p>
                <a class='btn' href='./room_detail.php?id='>Details</a>
            </div>
        </div>
        ";
            } else {
                echo "no Result Found";
            }
        }
        ?>
    </div>




    <?php
    include(".././common/footer.php");

    ?>
</body>

</html>