<!--Name:Tiraj KC-->
<!--class: CSC 306 -->
<!--prof: John Goodwin -->
<!--Date: Jan 16,2021 -->


<!DOCTYPE html><!-- this is a html version 5 -->
<html><!-- this is where  a html begins  --> 
<head><!-- this is a head  of  the html -->

    <!-- this is attached css -->
   <style>
   	body {
        text-align: center;
        width: 300px;
        margin-left: 775px;
        margin-bottom: 500px;
        position: absolute;
        bottom: 4px;
               	font-size: 25px;


       	background-color: #B45F04;
       	background-size: 1920px 920px;
       	 background-repeat: no-repeat;
       	 margin-bottom: 450px;
       }
   </style>


</head>
<body class="body1"><!-- body of the html -->
<form  class="login" method="POST" action="logincheck.php" >
	 <h1>Login page</h1> <!-- this is our heading of  the  html -->

  <div class="email">  
  <label id="email">Username:</label> 
  <input type="username" id="email" name="username"><br><br>
</div>

<div class="password">
  <label id="pwd">Password:</label>
  <input type="password" id="pwd" name="password"  ><br><br> <!-- this  is a password verification requirement --></div>

  

</br>
<!-- this is link to create a new account -->

</br>
<!-- this is a buuton to submit -->
<div class="button">
<input type="submit" name="btn" name="Login">




</div>
    
</form>

</body><!-- end of the body -->
</html><!-- end of the body -->