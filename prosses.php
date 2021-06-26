<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = 'motors';
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn){
    die ("connection failed: ".mysql_connect_error());
}
echo"connected successfully";

$motor1 = $_POST["motor1"];
$motor2 = $_POST["motor2"];
$motor3 = $_POST["motor3"];
$motor4 = $_POST["motor4"];
$motor5 = $_POST["motor5"];
$motor6 = $_POST["motor6"];

 if (isset($_POST['save'])) {
 echo"<br>";
 $my_query = "";
 
 $my_query = "select * from values_of_motors WHERE 1";
 $result = mysqli_query($conn, $my_query);

 $my_query= "INSERT INTO values_of_motors(motor1,motor2,motor3,motor4,motor5,motor6) values('$motor1','$motor2','$motor3','$motor4','$motor5','$motor6')";
 $result = mysqli_query($conn, $my_query);

 if ($result){
      echo "item successfully Added!";
 }
 else {
	echo"ERROR:unable to past <br>";
}
}
else if (isset($_POST['on'])){
echo "<br>";
$my_query ="";
 
$my_query = "select * from values_of_motors WHERE 1";
 $result = mysqli_query($conn, $my_query);

 $my_query = "INSERT INTO values_of_motors(onbutton) values(1)";
 $result = mysqli_query($conn, $my_query);

 if ($result){
      echo "item successfully Added!";
 }
 else {
	echo"ERROR:unable to past <br>";
}	
}
else if (isset($_POST['off'])){
echo "<br>";
$my_query ="";
 
$my_query = "select * from values_of_motors WHERE 1";
 $result = mysqli_query($conn, $my_query);

 $my_query = "INSERT INTO values_of_motors(offbutton) values(0)";
 $result = mysqli_query($conn, $my_query);

 if ($result){
      echo "item successfully Added!";
 }
 else {
	echo"ERROR:unable to past <br>";
}	
}
?>
 