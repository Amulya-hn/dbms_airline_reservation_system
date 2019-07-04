<?php
//session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "airline";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if(isset($_POST['nooftick']))
{
	$fno = $_POST['fno'];
 $nooftick = $_POST['nooftick'];
 
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 else{
	 // echo "Connection Successful ";
	$sql = "SELECT * from ticketstatus where ticketstatus.fno='$fno'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	 while($row = $result->fetch_assoc()) {
			if($row["nooftickf"] + $nooftick < 30)
			{
				$x=$row["nooftickf"] + $nooftick;
				//echo $x;
				//while($x <= $nooftick) {
	            //echo "<br> </br>";
				if($nooftick==1)
				{
					 //$sql88 = "UPDATE ticketstatus SET nooftickf='$x'
            //WHERE fno='$fno'";
             mysqli_query($conn,$sql88);
                header('Location: pass.php');
				}
				else if($nooftick==2)
				{
					//$sql89 = "UPDATE ticketstatus SET nooftickf='$x'
            //WHERE fno='$fno'";
             //mysqli_query($conn,$sql89);
					header('Location: pass2a.php');
				}
                else if($nooftick==3)
				{
					//$sql90 = "UPDATE ticketstatus SET nooftickf='$x'
            //WHERE fno='$fno'";
           //  mysqli_query($conn,$sql90);
					header('Location: pass3a.php');
				}
				else if($nooftick==4)
				{
					//$sql91 = "UPDATE ticketstatus SET nooftickf='$x'
            //WHERE fno='$fno'";
            // mysqli_query($conn,$sql91);
					header('Location: pass4a.php');
				}
				else if($nooftick==5)
				{
					//$sql92 = "UPDATE ticketstatus SET nooftickf='$x'
            //WHERE fno='$fno'";
             //mysqli_query($conn,$sql92);
					header('Location: pass5a.php');
				}
				else
				{
					//$sql93 = "UPDATE ticketstatus SET nooftickf='$x'
            //WHERE fno='$fno'";
             //mysqli_query($conn,$sql93);
				//	header('Location: pass5a.php');
				echo "MAXIMUM NUMBER OF TICKETS MUST BE LESSER THAN 5";
				}
			}
			else{
				echo "NUMBER OF TICKETS IN FLIGHT ARE FULL";
			}
	}
}
	// $x = 1; 

//while($x <= $nooftick) {
	//echo "<br> </br>";
    //header
    //$x++;
//} 
	 //
	//$sql= "INSERT INTO admin (pname, pno, fno, nooftick)
//VALUES ('Amulya', 1, 101, '$nooftick')";
//if ($conn->query($sql) === TRUE) {
  //  echo "New record created successfully";
//} else {
  //  echo "Error: " . $sql . "<br>" . $conn->error;
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
else
{
}

?>
<html>
    <!-- $sql = "select * from status where id=(select max(id) from status)";
$result = $conn->query($sql);

    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br>STOCK REMAINING IN CMS(RICE) " .$row["quantity1"]."</br>";
        echo "<br>STOCK REMAINING IN CMS(RAGI) ". $row["quantity2"] ."</br>"; 
        echo "<br>STOCK REMAINING IN CMS(TOOR DAL) ". $row["quantity3"]."</br>";-->
<head>
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
	font-color:red;
	padding: 10px;
}
a
{
color: red;
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
    
<h1>FLIGHT</h1>
<p>Enter the flight details</p>
<b>


<div class="cont">

    <form action="bru1.php" method="post">
	<label for="fno"><b>Enter Flight number</b></label>
<input type="text" class="input-block-level" placeholder="Enter flight number" name="fno" required />
<p> </p>
<label for="nooftick"><b>Enter Number of tickets to be booked</b></label>
<input type="text" class="input-block-level" placeholder="Enter the number" name="nooftick" required />
<p> </p>
<button class="btn btn-large btn-primary" type="submit" name="btn-signup">CONFIRM</button>
</form>
</div>


<b>
</body>
</html>