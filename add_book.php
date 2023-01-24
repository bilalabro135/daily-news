
<?php 
	require "dbwork.php";
	
	if (isset($_GET['msg']) && $_GET['msg'] == 'error') {
		$msg = $_GET['msg'];
	}
	if (isset($_SESSION['errors_here'])) {
		$errors = $_SESSION['errors_here'];
	}
	$book_cat = $obj->book_category_list();
 ?>

<!DOCTYPE html>
<html lang="en">
<?php require "components/head.php"; ?>
<body>
	<style type="text/css">
		label{
			width: 100%;
			text-align: left;
		}
		input,textarea{
			font-size: 14px !important;
		}
	</style>
	<div class="wrapper">
		<!-- Navbar Header -->
		<?php require("components/admin/navbar.php"); ?>
	
		<!-- Sidebar -->
		<?php require("components/admin/sidebar.php"); ?>

		<div class="main-panel">
			<div class="content" style="margin-top:30px;">
				<div class="page-inner">
					<div class="page-header m-0">
						<h4 class="page-title">Book</h4>
					</div>
					<div class="row">
						<div class="col-md-12">
							<?php if (isset($msg) && ($msg == 'error')) {?>
								<div class="alert alert-danger" style="font-size: 16px;">
									Something went wrong!
								</div>
							<?php } ?>
							<?php if (isset($errors) && (count($errors))) {
								?>
									<div class="alert alert-danger" style="font-size: 16px;">
										<ul>
											<?php foreach ($errors as $key => $error) { ?>
												<li class="text-danger"><?php echo $error; ?></li>
											<?php } ?>
										</ul>
									</div>
									<?php
								}
								unset($_SESSION['errors_here']);
							?>
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Add Book</h4>
										<a href="books_list.php" class="btn btn-primary ml-auto" style="font-size: 12px;">
											<i class="fa fa-arrow-left"></i>&nbsp;
										</a>
									</div>
								</div>
								<form method="POST" action="process.php" enctype="multipart/form-data">
									<div class="card-body">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label for="title">Book title <span class="text-warning">*</span></label>
													<input type="text" required class="form-control" id="title" placeholder="Book name" name="title">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="author">Book author <span class="text-warning">*</span></label>
													<input type="text" required class="form-control" id="author" placeholder="Author name" name="author">
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label for="book_cover">Book cover <span class="text-warning">*</span></label>
													<input type="file" accept=".jpeg,.jpg,.png,.gif" required class="form-control" id="book_cover" name="book_cover">
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label for="book_pdf">Book PDF <span class="text-warning">*</span></label>
													<input type="file" accept=".pdf" required class="form-control" id="book_pdf" name="book_pdf">
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label for="book_category">Book Category <span class="text-warning">*</span></label>
													<select class="form-control" id="book_category" name="book_category" style="height: 35px; font-size: 14px;">
														<option selected disabled>--Please select--</option>
														<?php foreach ($book_cat as $key => $value) {?>
															<option value="<?php echo $value['id'] ?>"><?php echo $value['name']; ?></option>
														<?php } ?>
													</select>
												</div>
											</div>
										</div>
									</div>
									<div class="card-footer py-4">
										<div class="d-flex justify-content-end">
											<button type="reset" class="btn btn-danger" style="font-size: 12px;text-transform: capitalize;">Cancel</button>&nbsp;
											<button type="submit" name="submit_btn" value="add_book" class="btn btn-primary" style="font-size: 12px;text-transform: capitalize;">Submit</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php require "components/admin/foot_script.php"; ?>
</div>
</body>
</html>