<!DOCTYPE html>
<html>
<body>
<?php
echo "<h2>Welcome to FleaMarket!</h2>";
echo "Welcome ", $_POST["name"], "<br>";
echo "Your email address is: ", $_POST["email"], "<br>"; 
/*$con=mysqli_connect("localhost","fleamarket.sys","FleaMarket!234","fleamarket"); 
// Check connection 
if (mysqli_connect_errno($con)) 
{ 
    echo "Failed to connect to MySQL: " . mysqli_connect_error(); 
}
else 
{ 
    echo "Connected to MySql DB - fleamarket"; 
} 
mysqli_close($con);*/
?>
</body>
</html>
