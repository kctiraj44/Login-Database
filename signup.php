<!DOCTYPE html>
<html>
<head>
	<title>Demographic Information</title>
	   <style>
   	body {
        text-align: center;
        width: 300px;
        margin-left: 775px;
        margin-bottom: 500px;
        position: absolute;
        bottom: 4px;
               	font-size: 25px;


       	background-color: #CA9999;
       	background-size: 1920px 920px;
       	 background-repeat: no-repeat;
       	 margin-bottom: 450px;
       }
   </style>
</head>
<body>
<?php



include_once 'includes.php';

$first =$_POST['first'];
$last =$_POST['last'];
$address=$_POST['address'];                                               
$gender =$_POST['gender'];
$age =$_POST['age'];








$sql ="INSERT INTO  demo (FirstName,LastName,Address, Gender, Age) VALUES 
('$first', '$last','$address','$gender' ,'$age'); ";
mysqli_query($conn, $sql);

header("Location: insert.php?signup=Success");
?>
</body>
</html>





