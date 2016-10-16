<html>
<head>
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<script>
function showResult(str) {
  if (str.length==0) {
    document.getElementById("live").innerHTML="";
    document.getElementById("live").style.border="0px";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("live").innerHTML=this.responseText;
      document.getElementById("live").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","live.php?q="+str,true);
  xmlhttp.send();
}
</script>

</head>
<?php
session_start();
?>

<body>
<div class="w3-container">

  <h2>Search the Doctor Name</h2>

  <form>
  <input type="text" size="30" onkeyup="showResult(this.value)">
  <div id="live"></div>
  </form>

  <div class="w3-card-8 w3-dark-grey" style="width:50%">

    <div class="w3-container w3-center">
      <h3>Prescription/h3>

      <?php
      $image = $_SESSION['prescription'];
      echo '<img src="images/'.$image.'" alt="Avatar" style="width:80%">';
      ?>

      <div class="w3-section">
        <button onclick="window.location.href='update.php'" class="w3-btn w3-green">Accept</button>
        <button onclick="window.location.href='update2.php'" class="w3-btn w3-red">Decline</button>
      </div>
    </div>

  </div>
</div>
</body>
</html>
