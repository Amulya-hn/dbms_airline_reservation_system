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
 $encrypt_pass= md5($password);
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 else{
      $sql = "select email from signup where email like '".$email."';";
 
 $result=mysqli_query($conn, $sql);
 
if (mysqli_num_rows($result)>0)
  {
      echo "email id already present";
  }
  else
  {
     echo "Connection Successful";
     $sql = "INSERT INTO signup (username, email, password)
     VALUES ('$username', '$email', '$encrypt_pass')";
if(mysqli_query($conn, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "Records did not get inserted successfully.";
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
</style>
</head>
<body>

<h1>REGISTER</h1>
<p>Enter the following details</p>
<b>
<div class="cont">
<form action="register.php" method="post">
<label for="email"><b>Email</b></label>
<input type="text" placeholder="Enter Email" name="email" required>
<label for="pwd"><b>Password</b></label>
<input type="password" placeholder="Enter Password" name="pwd" required>
<label for="psw-repeat"><b>Re-Enter Password</b></label>
<input type="password" placeholder="Re-Enter Password" name="psw-repeat" required>
<p>By creating an account you agree to our <a href="#">Terms and Privacy</a></p>
<button type="submit" class="regstr">REGISTER</button>
</div>
<p>Already have an account? <a href="#">Sign in</a>.</p>
<b>
</body>
</html>