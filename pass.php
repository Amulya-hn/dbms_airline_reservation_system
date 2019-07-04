<?php
//session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "airline";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if(isset($_POST['fno'],$_POST['pname'],$_POST['paddress'],$_POST['cname'],$_POST['card'],$_POST['cvv']))
{
 $fno=$_POST['fno'];
 $pname = $_POST['pname'];
 $gender = $_POST['gender'];
 $dob = $_POST['dob'];
 $paddress = $_POST['paddress'];
 $card=$_POST['card'];
 $cname= $_POST['cname'];
 $cvv = $_POST['cvv'];

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 else
 {
   

   //  echo "Connection Successful";

 $sql = "insert into admin(pname, fno)
values ('$pname','$fno')";
// mysqli_query($conn,$sql);
//STORED PROCEDURE
 $sql1 = "INSERT INTO passenger (pname, gender, dob, paddress)
VALUES ('$pname', '$gender', '$dob', '$paddress')";
//$sql1 = "call procedure2('$pname', '$gender', '$dob', '$paddress')";
 mysqli_query($conn,$sql1);
 
$sql10 = "INSERT into payment (name, cardno, cvv, fno)
 VALUES ('$cname', '$card','$cvv','$fno')";
 //$sql10 = "call procedure3('$cname', '$card','$cvv','$fno')";
 mysqli_query($conn,$sql10);
 
if ($conn->query($sql) === TRUE) {
      header('Location: last.php');
}
 else {
    echo "YOU HAVE ENTERED INCORRECT DETAILS.";
   echo "PLEASE ENTER PROPER DETAILS";
   //echo '<a href="pass.php" class="btn btn-info" role="button">GO BACK</a>';
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
   <!-- background-size: cover;-->
}

</style>
</head>
<body>
    
<h1>FLIGHT</h1>
<p>Enter the passenger details</p>
<b>




    <form action="pass.php" method="post">
	<p>TICKET FARE = 6000</p>
	<p>ENTER DETAILS OF PASSENGER</p>
<label for="fno"><b>Enter Flight number</b></label>
<input type="text" class="input-block-level" placeholder="Enter name" name="fno" required />
<p> </p>
<label for="pname"><b>Enter Passenger Name</b></label>
<input type="text" class="input-block-level" placeholder="Enter name" name="pname" required />
<p> </p>
<label for="gender"><b>Enter Gender</b></label>
<input type="text" class="input-block-level" placeholder="Enter f or m" name="gender" required />
<p> </p>
<label for="dob"><b>Enter Date Of Birth</b></label>
<input type="date" class="input-block-level" placeholder="Enter the number" name="dob" required /> 
<p> </p>
<label for="address"><b>Enter Address</b></label>
<input type="text" class="input-block-level" placeholder="Enter the number" name="paddress" required />
<p> </p>
<div class="cont">
<p>ENTER CARD DETAILS</p>
<label for="cname"><b>Enter NAME ON CARD</b></label>
<input type="text" class="input-block-level" placeholder="Enter name" name="cname" required />
<p> </p>
<label for="card" ><b>Enter CARD NUMBER</b></label>
<input type="text"  maxlength="10"  class="input-block-level" placeholder="Enter number" name="card" required />
<p> </p>

<label for="cvv" ><b>Enter CVV</b></label>
<input type="password" maxlength="3"  class="input-block-level" placeholder="Enter 3 digit cvv" name="cvv" required />

<p> </p>


<button class="btn btn-large btn-primary" type="submit" name="btn-signup">CONFIRM</button>
</form>
</div>

<!--<p>Already have an account? <a href="#">Sign in</a>.</p>-->
</b>
</body>
</html>