<?php
$servername = "localhost";
$username = "sahityak007";
$password = "MNJcvh123@";
$dbname = "kfc_user";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<? include('header.php');?>
<? include('nav.php');?>
<div class="container">
    <div class="row">
<h3 align="center" style="margin-bottom: 10px;">Welcome <?php echo $_POST["name"]; ?><br></h3>
<h3 align="center" style="margin-bottom: 10px;"> Your email address is: <?php echo $_POST["email"];?> <br></h3>
<h3 align="center" style="margin-bottom: 10px;"> Your mobile is: <?php echo $_POST["phone"];?> <br></h3>
<h3 align="center" style="margin-bottom: 10px;"> Your City is: <?php echo $_POST["city"];?> <br></h3>
<h3 align="center" style="margin-bottom: 10px;"> Your PAN is: <?php echo $_POST["pan"];?> <br></h3>
<h3 align="center" style="margin-bottom: 10px;"> Your Address is: <?php echo $_POST["addr"];?> <br></h3>
<h3 align="center" style="margin-bottom: 10px;"> Your State is: <?php echo $_POST["state"];?> <br></h3>
<h3 align="center" style="margin-bottom: 10px;"> Your Best Time to Contact is: <?php echo $_POST["btc"];?> <br></h3>
<h3 align="center" style="margin-bottom: 10px;"> Your Comment is: <?php echo $_POST["comm"];?> <br></h3>
</div>
</div>
</div></div>
<? include('footer.php');?>
<?
if(isset($_POST[name])){
$sql = "INSERT INTO user(name, mail,phone ,state,city,pan, addr,btc,comm)
VALUES('$_POST[name]', '$_POST[email]','$_POST[phone]','$_POST[state]', '$_POST[city]','$_POST[pan]','$_POST[addr]','$_POST[btc]','$_POST[comm]') ";

if (mysqli_query($conn, $sql)) {
    #echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

echo "<script type='text/javascript'>alert(\"Thanks for Your Application. Our representative will Contact you after Reviewing.Please don't fill the form again\");</script>";
}

phpysqli_close($conn);

?>
