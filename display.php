<html>
<head>
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

</head>
<?php 
session_start();
?>
<body>
<div class="w3-container">

  <h2>Card Example</h2>

  <div class="w3-card-8 w3-dark-grey" style="width:50%">

    <div class="w3-container w3-center">
      <h3>Friend Request</h3>

      <?php 
      $image = $_SESSION['prescription']; 
      echo '<img src="'.$image.'" alt="Avatar" style="width:80%">';
      ?>

      <div class="w3-section">
        <button class="w3-btn w3-green">Accept</button>
        <button class="w3-btn w3-red">Decline</button>
      </div>
    </div>

  </div>
</div>
</body>
</html>
