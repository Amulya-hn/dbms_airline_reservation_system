<?php
//session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "airline";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
 
if(isset($_POST['pname1'],$_POST['paddress1'],$_POST['pname2'],$_POST['paddress2']))
{
 $pname1=$_POST['pname1'];
 $paddress1= $_POST['paddress1'];
$pname2=$_POST['pname2'];
 $paddress2= $_POST['paddress2'];
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 else
 {
   
    echo "successful";
   //update passenger set pname='$pname2', paddress='$paddress2' where pname='$pname1' and paddress='$pname1';
 $sql1 = "update passenger set pname='$pname2', paddress='$paddress2' where pname='$pname1' and paddress='$paddress1';";
mysqli_query($conn,$sql1);


if ($conn->query($sql1) === TRUE) {
   header('Location: updatelast.php');
   //echo "done";
}
 else {
    echo "YOU HAVE ENTERED WRONG DETAILS PLEASE PROVIDE PROPER OLD NAME AND ADDRESS.";
   echo "CLICK THE BUTTUN BELOW TO GO BACK TO LAST PAGE";
   echo '<a href="update1.html" class="btn btn-info" role="button">GO BACK</a>';
}
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

</div>
</b>
</body>