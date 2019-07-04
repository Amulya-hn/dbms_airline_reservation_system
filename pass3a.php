<?php
//session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "airline";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if(isset($_POST['fno1'],$_POST['pname1'],$_POST['paddress1'],$_POST['pname2'],$_POST['paddress2'],$_POST['pname3'],$_POST['paddress3'],$_POST['cname'],$_POST['card'],$_POST['cvv']))
{
 $fno1=$_POST['fno1'];
 $pname1= $_POST['pname1'];
 $gender1 = $_POST['gender1'];
 $dob1 = $_POST['dob1'];
 $paddress1 = $_POST['paddress1'];
 $pname2= $_POST['pname2'];
 $gender2 = $_POST['gender2'];
 $dob2 = $_POST['dob2'];
 $paddress2 = $_POST['paddress2'];
 $pname3= $_POST['pname3'];
 $gender3 = $_POST['gender3'];
 $dob3 = $_POST['dob3'];
 $paddress3 = $_POST['paddress3'];
  $card=$_POST['card'];
 $cname= $_POST['cname'];
 $cvv = $_POST['cvv'];
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 else
 {
   

        // echo "Connection Successful";
	 
 $sql = "insert into admin(pname, fno)
values ('$pname1','$fno1')";
$sql1 = "insert into admin(pname, fno)
values ('$pname2','$fno1')";
mysqli_query($conn,$sql1);
$sql4 = "insert into admin(pname, fno)
values ('$pname3','$fno1')";
mysqli_query($conn,$sql4);
 //mysqli_query($conn,$sql1);
 $sql2 = "INSERT INTO passenger (pname, gender, dob, paddress)
VALUES ('$pname1', '$gender1', '$dob1', '$paddress1')";
 mysqli_query($conn,$sql2);
  $sql3 = "INSERT INTO passenger (pname, gender, dob, paddress)
VALUES ('$pname2', '$gender2', '$dob2', '$paddress2')";
 mysqli_query($conn,$sql3);
 $sql5 = "INSERT INTO passenger (pname, gender, dob, paddress)
VALUES ('$pname3', '$gender3', '$dob3', '$paddress3')";
 mysqli_query($conn,$sql5);
 $sql100 = "INSERT into payment (name, cardno, cvv, fno)
 VALUES ('$cname', '$card','$cvv','$fno1')";
 mysqli_query($conn,$sql100);
 $sql101 = "INSERT into payment (name, cardno, cvv, fno)
 VALUES ('$cname', '$card','$cvv','$fno1')";
 mysqli_query($conn,$sql101);
 $sql103 = "INSERT into payment (name, cardno, cvv, fno)
 VALUES ('$cname', '$card','$cvv','$fno1')";
 mysqli_query($conn,$sql103);
if($conn->query($sql) === TRUE) {
      header('Location: last.php');
}
 else {
    echo "YOU HAVE ENTERED INCORRECT DETAILS.";
   echo "CLICK THE BUTTUN BELOW TO GO BACK TO LAST PAGE";
   echo '<a href="pass3a.php" class="btn btn-info" role="button">GO BACK</a>';
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
    background-repeat: repeat;
   <!-- background-size: cover;-->
}
</style>
</head>
<body>
    
<h1>FLIGHT</h1>
<p>Enter the passenger details</p>
<b>


<div class="cont">

    <form action="pass3a.php" method="post">
	<p>TICKET FARE = 6000</p>
	<p>ENTER DETAILS OF PASSENGER1</p>
<label for="fno1"><b>Enter Flight number</b></label>
<input type="text" class="input-block-level" placeholder="Enter name" name="fno1" required />
<p> </p>
<label for="pname1"><b>Enter Name of Passenger 1</b></label>
<input type="text" class="input-block-level" placeholder="Enter name" name="pname1" required />
<p> </p>
<label for="gender1"><b>Enter Gender of Passenger 1</b></label>
<input type="text" class="input-block-level" placeholder="Enter f or m" name="gender1" required />
<p> </p>
<label for="dob1"><b>Enter Date Of Birth of Passenger 1</b></label>
<input type="date" class="input-block-level" placeholder="Enter the number" name="dob1" required /> 
<p> </p>
<label for="address1"><b>Enter Address of Passenger 1</b></label>
<input type="text" class="input-block-level" placeholder="Enter the number" name="paddress1" required />

<p>ENTER DETAILS OF PASSENGER2</p>
<label for="pname2"><b>Enter Name of Passenger 2</b></label>
<input type="text" class="input-block-level" placeholder="Enter name" name="pname2" required />
<p> </p>
<label for="gender2"><b>Enter Gender of Passenger 2</b></label>
<input type="text" class="input-block-level" placeholder="Enter f or m" name="gender2" required />
<p> </p>
<label for="dob2"><b>Enter Date Of Birth of Passenger 2</b></label>
<input type="date" class="input-block-level" placeholder="Enter the number" name="dob2" required /> 
<p> </p>
<label for="address2"><b>Enter Address of Passenger 2</b></label>
<input type="text" class="input-block-level" placeholder="Enter the number" name="paddress2" required />
<p>ENTER DETAILS OF PASSENGER3</p>
<label for="pname3"><b>Enter Name of Passenger 3</b></label>
<input type="text" class="input-block-level" placeholder="Enter name" name="pname3" required />
<p> </p>
<label for="gender3"><b>Enter Gender of Passenger 3</b></label>
<input type="text" class="input-block-level" placeholder="Enter f or m" name="gender3" required />
<p> </p>
<label for="dob3"><b>Enter Date Of Birth of Passenger 3</b></label>
<input type="date" class="input-block-level" placeholder="Enter the number" name="dob3" required /> 
<p> </p>
<label for="address3"><b>Enter Address of Passenger 3</b></label>
<input type="text" class="input-block-level" placeholder="Enter the number" name="paddress3" required />
<p> </p>

<p>ENTER CARD DETAILS</p>
<label for="cname"><b>Enter NAME ON CARD</b></label>
<input type="text"  class="input-block-level" placeholder="Enter name" name="cname" required />
<p> </p>
<label for="card" ><b>Enter CARD NUMBER</b></label>
<input type="text"  maxlength="10" class="input-block-level" placeholder="Enter number" name="card" required />
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