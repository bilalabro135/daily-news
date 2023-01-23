<?php 
	require "dbwork.php";

	 if(!(isset($_POST['submit_btn']))) {
	 	header("location:index.php");
	 }
		switch ($_POST['submit_btn']) {
			case 'login_btn':
				$data = $obj->login($_POST);
				if ($data && $data['id'] == 1) {
					header("location:dashboard.php?msg=dashboard");
				}else{
					header("location:login.php?msg=login-failed");
				}
			break;
		
		default:
			header("location:index.php");
		break;
		}

		

 ?>