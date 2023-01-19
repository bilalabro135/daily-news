
<?php 
	require "dbwork.php";
	
	if (isset($_GET['msg']) && $_GET['msg'] == 'error') {
		$msg = $_GET['msg'];
	}
	if (isset($_SESSION['errors_here'])) {
		$errors = $_SESSION['errors_here'];
	}
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
						<h4 class="page-title">Book Category</h4>
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
										<h4 class="card-title">Add Category</h4>
										<a href="book_categories.php?msg=book_category" class="btn btn-primary ml-auto" style="font-size: 12px;">
											<i class="fa fa-arrow-left"></i>&nbsp;
										</a>
									</div>
								</div>
								<form method="POST" action="process.php" enctype="multipart/form-data">
									<div class="card-body">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label for="category">Category name<span class="text-warning">*</span></label>
													<input type="text" required class="form-control" id="category" placeholder="Category Name" name="name">
												</div>
											</div>
										</div>
									</div>
									<div class="card-footer py-4">
										<div class="d-flex justify-content-end">
											<button type="reset" class="btn btn-danger" style="font-size: 12px;text-transform: capitalize;">Cancel</button>&nbsp;
											<button type="submit" name="submit_btn" value="add_book_cat" class="btn btn-primary" style="font-size: 12px;text-transform: capitalize;">Submit</button>
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