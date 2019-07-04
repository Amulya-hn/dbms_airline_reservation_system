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
 $nooftick = $_POST['nooftick'];
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 else{
    
     echo "Connection Successful";
	$sql= "INSERT INTO admin (pname, pno, fno, nooftick)
VALUES ('Amulya', 1, 102, '$nooftick')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
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
border: 1px solid lightpink;
    margin-bottom: 25px;
}
* {
    box-sizing: border-box;
}
.cont
{
    padding: 16px;
    background-color: white;
}
input[type=text], input[type=password]
{
padding: 20px;
margin:15px;
width: 100%;
}
body
{
font-size: 20px;
font-colour: yellow;
background-color: pink;
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
</style>
</head>
<body>
    
<h1>FLIGHT</h1>
<p>Enter the flight details</p>
<b>


<div class="cont">

    <form action="bru1.php" method="post">
<label for="nooftick"><b>Enter Number to tickets to be booked</b></label>
<input type="text" class="input-block-level" placeholder="Enter the number" name="nooftick" required />

<button class="btn btn-large btn-primary" type="submit" name="btn-signup">CONFIRM</button>
</form>
</div>


<b>
</body>
</html>