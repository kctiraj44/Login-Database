
<!DOCTYPE html>
<html>
<head>
	<title>LoginCheck</title>
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
if ($_POST["username"]=="helper"  &&  $_POST["password"]=="000")
{


session_start();

$_SESSION["Login"]="YES";
echo "<h1> you are logged in Correctly  </h1>";
 echo "<h3> Choose the following options </h3>";

// <!-- here we go -->
   


   echo "<li>  <a href='insert.php';>  Demographic Information </a>   </li>";
   
                               
      echo " <li>  <a href='Medication.php';> Medication Dispensed </a>  </li>";
   

       echo " <li> <a href='Billing.php';> Billing Information </a>  </li> ";

   



  

}
else
{
	echo "<h3> You have wrong information  </h3>" ;
	echo " <h1> Enter the correct username and Password </h1>";
}

?>

</body>
</html>



