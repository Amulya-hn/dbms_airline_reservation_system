<?php
//session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "airline";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

if(isset($_POST['fromf1']))
{
 $fromf1 = $_POST['fromf1'];
 $tof1 = $_POST['tof1'];
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 else{
    
     
	// $sql = "SELECT * from flight where flight.fromf='$fromf1' and flight.tof='$tof1'";
	//STORED PROCEDURE
	$sql="call procedure1('$fromf1','$tof1')";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo "<br>  </br";
		echo "<br> FLIGHT </br>";
        echo "<br> Flight number : " . $row["fno"]. "</br>";
		echo "<br> Flight name : " . $row["fname"]. "</br>";
		echo "<br> Departure city : " . $row["fromf"]. "</br>";
		echo "<br> Arrival city :" . $row["tof"]. "</br>";
		echo "<br> Departure time :" . $row["dtime"]. "</br>";
		echo "<br> Arrival time :" . $row["atime"]. "</br>";
		echo "<br> Departure date :" . $row["datef"]. "</br>";
		echo "<br> </br>";
		echo '<a href="bru1.php" class="btn btn-info" role="button">BOOK</a>';
		
    }
} else {
    echo "CURRENTLY THERE ARE NO FLIGHTS THAT GOES TO THE SELECTED CITY";
}
   // $sql="SELECT * from flight where flight.from=$from1 and flight.to=$to1";
    //$result = $conn->query($sql);

    // output data of each row
    //while($row = $result->fetch_assoc()) {
      // $result = $conn->query($sql);

    // output data of each row
    //while($row = $result->fetch_assoc()) {
      //  echo "<br>STOCK REMAINING IN CMS(RICE) " .$row["fno"]."</br>";
}
}
else
{
}

?>
<style>
b
{

    margin-bottom: 25px;
}
* {
    box-sizing: border-box;
}
body
{
font-size: 25px;
font-color:red;

}
input[type=text], input[type=password]
{
padding: 10px;
margin:20px;
width: 20%;
}
button
{
	background-color: blue;
	width:10%;
	font-color:black;
	padding: 10px;
}
a
{
background-color: white;
	width:10%;
	font-color:black;
	padding: 5px;
}
regstr
{
width:100%;
text-align: center;
cursor:pointer:
background-color: green;
padding: 16px 20px;
}
[class*="cont"] {
    width: 100%;
}
html {
    /* The image used */
    background-image: url("im57718372.jpg");
     
    /* Full height */
    height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
</head>
<body>
    

<b>


<div class="cont">

</div>
</b>
</body>