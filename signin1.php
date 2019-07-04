<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "airline";
$conn = new mysqli($servername, $username, $password, $dbname);

 if(isset($_POST['email'], $_POST['pwd']))
{
 $email = $_POST['email'];
 $password = $_POST['pwd'];


setcookie('email',$email,time() + (86400 * 7)); // 86400 = 1 day
setcookie('password',$password,time() + (86400 * 7)); // 86400 = 1 day


 $sql = "select email from signup where email like '".$email."' and password like '".$password."';";
 
 $result=mysqli_query($conn, $sql);
 
if (mysqli_num_rows($result)>0)
  {
      $_SESSION['signin']=true;
header('Location: bruu.html');
  }
else{
    echo " INVALID USER OR INCORRECT PASSWORD";
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
<body>
<h1>LOG-IN</h1>
<p>Enter the following details</p>
<div class="cont">
<form action="signin1.php" method="post">
<label for="email"><b>Email</b></label>
<input type="text" placeholder="Enter Email" name="email" required>
<p> </p>
<label for="pwd"><b>Password</b></label>
<input type="password" placeholder="Enter Password" name="pwd" required>
<p> </p>
<button type="submit">SUBMIT</button>
</form>
</div>
</body>
</html>