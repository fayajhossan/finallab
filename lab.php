 <!DOCTYPE html>
 <html>
 <head>
 	<title>REGISTRATION</title>
 	</head>
 <body>
 <form action="validation.php" method="POST">
   <fieldset style="width: 500px">
   	 <legend>REGISTRATION</legend>
   	 ID <br>
   	 	<input type="number" name="uid"> <br>
   	 	Password <br>
   	 	<input type="Password" name="upassword"> <br>
   	 	Confirm Password <br>
   	 	<input type="Password" name="cupassword"><br>
   	 	Name <br>
   	 	<input type="text" name="uname"> <br>
   	 	User Type <br>
   	 	<hr> 
   	 	<input type="radio" name="Usertype">User
   	 	<input type="radio" name="Usertype">Admin <br>
   	 	<hr> 

   	 	<input type="button" name="Signup" value="Signup">
   	 	<u><a href="Login.php">Sign In</a></u> 

   	 	




</fieldset>
</form>
 </body>
 </html>