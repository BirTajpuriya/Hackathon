<?php
include('../db.php');

$sql="select * from subscription join registration where subscription.user=registration.name";
$res = mysqli_query($conn, $sql);
?>


    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    
    <h2 class="heading-primary">our Pricing</h2>
    <div class="plan-section">
      <div class="plan basic">
        <h2 class="plan-heading">Basic</h2>
        <h3 class="plan-price"><span class="dollar">$</span>99</h3>
        <ul class="plan-features">
          <li class="plan-item">100 GB Storage</li>
          <li class="plan-item">2 Users Allowed</li>
          <li class="plan-item">Send up to 3GB</li>
          <li class="plan-item">Support</li>
        </ul>

        <a href="add_subscription.php" class="btn buy-now" name="submit">Buy Now</a>
      </div>

      <div class="plan pro">
        <h2 class="plan-heading">Professional</h2>
        <h3 class="plan-price"><span class="dollar">$</span>199</h3>
        <ul class="plan-features">
          <li class="plan-item">300 GB Storage</li>
          <li class="plan-item">3 Users Allowed</li>
          <li class="plan-item">Send up to 6 GB</li>
          <li class="plan-item">Support</li>
        </ul>
        <a href="add_subscription.php" class="btn btn-blue" name="submit2">Buy Now</a>

      </div>

      <div class="plan master">
        <h2 class="plan-heading">Master</h2>
        <h3 class="plan-price"><span class="dollar">$</span>299</h3>
        <ul class="plan-features">
          <li class="plan-item">600 GB Storage</li>
          <li class="plan-item">9 Users Allowed</li>
          <li class="plan-item">Send up to 9GB</li>
          <li class="plan-item">Master Support</li>
        </ul>
        <a href="add_subscription.php" class="btn buy-now" name="submit3">Buy Now</a>
       

      </div>
    </div>
    
 