<?php
//session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "airline";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
 
if(isset($_POST['cname'],$_POST['card'],$_POST['cvv']))
{
 $card=$_POST['cname'];
 $cname= $_POST['card'];
 $cvv = $_POST['cvv'];
 
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 else
 {
   

    // echo "Connection Successful";
	 
 $sql = "SELECT * from flight where flight.fno=(select fno from admin where admin.pno=(select max(pno) from admin));";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		$a=$row["fno"];
		//$b=$row["fno"];
		
	}
}
 $sql1 = "INSERT INTO payment (name, cardno, cvv, fno)
VALUES ('$cname', '$card', '$cvv', $a)";
mysqli_query($conn,$sql1);


if ($conn->query($sql1) === TRUE) {
   header('Location: last.php');
}
 else {
    echo "YOU HAVE ENTERED INCORRECT PAYMENT DETAILS.";
   echo "CLICK THE BUTTUN BELOW TO GO BACK TO LAST PAGE";
   echo '<a href="pay.php" class="btn btn-info" role="button">GO BACK</a>';
}
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
<p>Enter the payment details</p>
<b>


<div class="cont">

    <form action="pay.php" method="post">
	<p>ENTER CARD DETAILS</p>
<label for="cname"><b>Enter NAME ON CARD</b></label>
<input type="text" maxlength="10" class="input-block-level" placeholder="Enter name" name="cname" required />
<label for="card" ><b>Enter CARD NUMBER</b></label>
<input type="text" class="input-block-level" placeholder="Enter number" name="card" required />
<label for="cvv" ><b>Enter CVV</b></label>
<input type="text" maxlength="3"  class="input-block-level" placeholder="Enter 3 digit cvv" name="cvv" required />


<button class="btn btn-large btn-primary" type="submit" name="btn-signup">CONFIRM</button>
</form>
</div>

<!--<p>Already have an account? <a href="#">Sign in</a>.</p>-->
</b>
</body>
</html>