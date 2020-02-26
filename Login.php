 <?php
     session_start ();
     ?>




 <!DOCTYPE html>
 <html>
 <head>
 	<title>LOGIN</title>
 	</head>
 <body>

	<form action="validation.php" method="POST">
   <fieldset style="width: 500px">
   	 <legend>LOGIN</legend>
   	 User Id <br>
   	 	
   	 	<input type="text" name="uname"> <br>
   	 	
   	 	Password <br>
   	 	<input type="Password" name="upassword"> 
   	 	<hr>
   	 	<input type="submit" name="Login" value="Login">
   	 	<u><a href="Registration.php">Register</a></u>      












</fieldset>
</form>
 </body>