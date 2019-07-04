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
p
{
	text-align: center;
}
</style>
</head>
<body>
	

<b>




    <form action="last.php" method="post">
	<p>YOUR DETAILS HAVE BEEN SUCCESSFULLY UPDATED.</p>
	<p>THANK YOU!!!</p>
<a href="main.html" class="btn btn-info" role="button">CLICK HERE TO GO TO HOME PAGE</a>

<!--<button class="btn btn-large btn-primary" type="submit" name="btn-signup">CONFIRM</button>-->
</form>


<!--<p>Already have an account? <a href="#">Sign in</a>.</p>-->
</b>
</body>
</html>