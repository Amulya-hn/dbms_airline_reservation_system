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


 $sql = "select email from signup where email like '".$email."';";
 
 $result=mysqli_query($conn, $sql);
 
if (mysqli_num_rows($result)>0)
  {
      $_SESSION['signin']=true;
header('Location: https://amulyanarayan.000webhostapp.com/dsh.php');
  }
else{
    echo " invalid user";
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
border: 1px solid pink;
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
<h1>LOG-IN</h1>
<p>Enter the following details</p>
<div class="cont">
<form action="signin1.php" method="post">
<label for="email"><b>Email</b></label>
<input type="text" placeholder="Enter Email" name="email" required>
<label for="pwd"><b>Password</b></label>
<input type="password" placeholder="Enter Password" name="pwd" required>
<button type="submit">SUBMIT</button>
</form>
</div>
</body>
</html>