<!DOCTYPE html>
<html>
<head>
	<title>Billing Information</title>
	   <style>
   	body {
        text-align: center;
        width: 300px;
        margin-left: 775px;
        margin-bottom: 500px;
        position: absolute;
        bottom: 4px;
               	font-size: 25px;


       	background-color: #7401DF;
       	background-size: 1920px 920px;
       	 background-repeat: no-repeat;
       	 margin-bottom: 450px;
       }
   </style>
</head>
<body>

<form  action="Billing.php" method="POST" >
	<h1>Billing Information</h1>
	<input type="number" name="billed" placeholder="Amount Billed">
	<br>
	<input type="number" name="amount" placeholder="Amount">
		<br>

	<input type="date" name="date" placeholder="Date Paid">
		<br>
  <input type="text" name="info" placeholder="Insurance Information">
	
<br>
 <a href="  login1.php";> Back to Home </a> 
<br>

<button   type="submit"  name="submit">ADD</button>




    
</form>







	


</body>
</html>