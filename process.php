<?php 

	require "dbwork.php";


if(isset($_POST['submit_btn'])){
	switch ($_POST['submit_btn']) {
		case 'add_book':
			$result = $obj->add_book($_POST);
			if ($result == 1) {
				header("location:books_list.php");
			}else{
				header("location:add_book.php");
			}
		break;
		case 'update_book_cat':
			$result = $obj->update_book_cat($_POST);
			if ($result == 1) {
				header("location:book_categories.php");
			}else{
				header("location:update_book_cat.php");
			}
		break;
		case 'update_teacher':
			$result = $obj->update_teacher($_POST);
			if ($result == 1) {
				header("location:teacher_list.php");
			}
		break;
		case 'add_student':
			$result = $obj->add_student($_POST);
			if ($result == 1) {
				header("location:students_list.php");
			}
		break;
		case 'add_book_cat':
			$result = $obj->add_book_cat($_POST);
			if ($result == 1) {
				header("location:book_categories.php");
			}else{
				header("location:add_book_cat.php");
			}
		break;
		case 'update_book':
			$result = $obj->update_book($_POST);
			if ($result == 1) {
				header("location:books_list.php");
			}else{
				echo "Sorry! Something Went Wrong";

			}
		break;
		
		// default:
			
		// break;
		}

}else{
	switch ($_GET['submit_btn']) {
		case 'delete_book':
			$id = $_GET['id'];
			$res = $obj->delete_book($id);
			if ($res) {
				header("location:books_list.php");
			}
		break;
		case 'delete_teacher':
			$id = $_GET['id'];
			$res = $obj->delete_teacher($id);
			if ($res) {
				header("location:teacher_list.php");
			}
		break;
		case 'delete_book_cat':
			$id = $_GET['id'];
			$res = $obj->delete_book_cat($id);
			if ($res) {
				header("location:book_categories.php");
			}
		break;
		
		default:
			echo "Sorry! Something Went Wrong";
		break;
	}

}
 ?>