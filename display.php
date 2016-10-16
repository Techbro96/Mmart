<html>
<head>
<style>
.card-container{
  padding:0.01em 16px;
}

.card-card{
  box-shadow:0 8px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19)!important;
  color:#fff!important;background-color:#616161!important
}

.card-center{
  text-align: center;
}

.card-section{
  margin-top:16px!important;margin-bottom:16px!important;
}
.card-accept-green{
border:none;display:inline-block;outline:0;padding:6px 16px;vertical-align:middle;overflow:hidden;text-decoration:none!important;color:#fff;background-color:#000;text-align:center;cursor:pointer;white-space:nowrap;
color:#fff!important;background-color:#4CAF50!important;
}
.card-accept-green:hover{
box-shadow:0 8px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
}
.card-reject-red{
border:none;display:inline-block;outline:0;padding:6px 16px;vertical-align:middle;overflow:hidden;text-decoration:none!important;color:#fff;background-color:#000;text-align:center;cursor:pointer;white-space:nowrap;
color:#fff!important;background-color:#f44336!important;
}
.card-reject-red:hover{
  box-shadow:0 8px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
}
</style>
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
<div class="card-container">

  <h2>Search the Doctor Name</h2>

  <form>
  <input type="text" size="30" onkeyup="showResult(this.value)">
  <div id="live"></div>
  </form>

  <div class="card-card" style="width:100%">

    <div class="card-container card-center">
      <h3>Prescription</h3>

      <?php
      $image = $_SESSION['prescription'];
      echo '<img src="images/'.$image.'" alt="Avatar" style="width:80%">';
      ?>

      <div class="card-section">
        <button onclick="window.location.href='update.php'" class="card-accept-green">Accept</button>
        <button onclick="window.location.href='update2.php'" class="card-reject-red">Decline</button>
      </div>
    </div>

  </div>
</div>
</body>
</html>
