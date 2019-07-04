<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "airline";
$conn = new mysqli($servername, $username, $password, $dbname);
if(isset($_POST['username'], $_POST['pwd']))
{
 $username = $_POST['username'];
 $email = $_POST['email'];
 $password = $_POST['pwd'];
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 else{
      $sql = "select email from signup where email like '".$email."';";
 
 $result=mysqli_query($conn, $sql);
 
if (mysqli_num_rows($result)>0)
  {
      echo "<br> THE ENTERED EMAIL ID IS ALREADY REGISTERED.</br>";
	  echo "<br>PRESS THE LINK BELOW TO GO TO SIGN IN PAGE</br>";
	     echo '<a href="signin1.php" class="btn btn-info" role="button">GO TO SIGN-IN PAGE</a>';
  }
  else
  {
    // echo "Connection Successful";
     $sql = "INSERT INTO signup (username, email, password)
     VALUES ('$username', '$email', '$password')";
if(mysqli_query($conn, $sql)){
   // echo "Records inserted successfully.";
   header('Location: bruu.html');
} else{
    echo "YOU HAVE ENTERED INCORRECT DETAILS.";
}
}
 }
}
else
{
}

?>
<html>
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
</html>