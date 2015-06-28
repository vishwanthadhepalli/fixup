<html>
<head>
<?php //data.php
error_reporting(E_ALL);

require_once 'login.php'; 
//get values from form
echo 'hello';
if(isset($_POST['Model']))
{
$Model=$_POST['Model'];
}
//$Model        = $_POST['Model'];
$Service        = $_POST['Service'];	
$Area           = $_POST['Area']; 
$Date       = $_POST['Date'];
// Insert data into mysql
$sql="INSERT INTO firstvalue (Model,Service,Area,Date)
VALUES ('$Model', '$Service', '$Area', '$Date')";
echo $Model;
if($query=mysql_query($sql))
{
echo 'success';
}
/*
$result = mysql_query($sql);
echo $result;
// if successfully insert data into database, displays message "Successful".
if($result){
echo "Beep! Beep!";
}
else {
echo "ERROR";
}
*/
// close mysql
mysql_close();
?> 
</head>
<body>
</body>
</html>
