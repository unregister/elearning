<?php
if( isset($_POST['login']) )
{
	$username = trim($_POST['userid']);
	$password = trim($_POST['password']);
	
	if( $username == '' or $password == '' )
	{
		$_login_msg = error("Masukkan User ID dan Password");	
	}
	else
	{
		$password = md5($password);
		$query = "SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password'";
		
		$numrows = NumRows($query);
		if( $numrows > 0 )
		{
			$data = GetRow($query);
			$_SESSION['_login'] = $data;
			
			if( $data['grup_id'] == 1 ){
				header('location:admin.php');	
			}else{
				header('location:index.php');
			}
		}
		else
		{
			$_login_msg = error("User ID atau Password Anda tidak benar");
		}
	}
}