<?php
	session_start();
	
	if( isset($_REQUEST['login']))
	{
		$id = $_REQUEST['uidl'];

		$password =  $_REQUEST['password'];
		
		if(empty(trim($id)) || empty(trim($password)))
		{
			echo "Null submission found!";
		}
		else

		

			$file = fopen('userverify.txt', 'r');
			$user = fread($file, filesize('userverify.txt'));
			$data = explode('|', $user);

			if( trim($data[0]) == $id && trim($data[1]) == $password)
			{
				$_SESSION['id'] = $id;
				$_SESSION['password'] = $password;
				if (trim($data[2]=='admin'))
				{
                  header("location:username.php");

				}

                  else 
				{
                  header("location:userhome.php");

				}
              
              else
              {
              	echo "invalid username";
              }
               
           
       }
       else
       {
       	header("location:Login.php")
       }


			
			}
		

	
	
		}		
?>