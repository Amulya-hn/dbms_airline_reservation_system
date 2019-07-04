<?php
//session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "airline";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

if(isset($_POST['paddress1']))
{
 $pname1 = $_POST['pname1'];
 $paddress1 = $_POST['paddress1'];

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 else{
    
     
	// $sql = "SELECT * from flight where flight.fromf='$fromf1' and flight.tof='$tof1'";
	//STORED PROCEDURE
	$sql="call procedure3('$pname1','$paddress1')";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo "<br>  </br";
		echo "<br> PASSENGER DETAILS </br>";
        echo "<br> Passenger number : " . $row["pno"]. "</br>";
		echo "<br> Passenger name : " . $row["pname"]. "</br>";
		echo "<br> Gender : " . $row["gender"]. "</br>";
		echo "<br> DOB :" . $row["dob"]. "</br>";
		echo "<br> Address :" . $row["paddress"]. "</br>";
		//echo "<br> Flight number :" . $row["fno"]. "</br>";
		//echo "<br> Card number :" . $row["cardno"]. "</br>";
		//echo "<br> </br>";
		//echo '<a href="bru1.php" class="btn btn-info" role="button">BOOK</a>';
		
    }
} else {
    echo "INCORRECT DETAILS";
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
<a href="last.php" class="btn btn-info" role="button">CLICK HERE TO GO BACK</a>
<p>   </p>
</div>
</b>
</body>