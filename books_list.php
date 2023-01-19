<?php 

	require "dbwork.php";
	$obj->is_logged_in();

	$students = $obj->books_list();

	if (isset($_SESSION['success'])) {
		$success = $_SESSION['success'];
	}
		
?>
<style type="text/css">
	th,td{
		text-align: left;
	}
</style>
<!DOCTYPE html>
<html lang="en">
<?php 
	require "components/head.php";
?>
<body>
	<div class="wrapper">
		<!-- Navbar Header -->
		<?php require("components/admin/navbar.php"); ?>
	
		<!-- Sidebar -->
		<?php require("components/admin/sidebar.php"); ?>

		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header m-0">
						<h4 class="page-title">Books list</h4>
					</div>
					<?php if(isset($success)): ?>
						<div class="alert alert-success">
							<p class="text-dark"><?php echo $success; ?></p>
						</div>
					<?php endif;
					unset($_SESSION['success']);
					?>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h2 class="page-title">Books</h2>
										<a href="add_book.php" class="btn btn-primary ml-auto" style="font-size: 12px;">
											<i class="fa fa-plus"></i>
											Add Book
										</a>
									</div>
								</div>
								<div class="card-body">

									<div class="table-responsive">
										<table id="add-row" class="display table table-striped table-hover">
											<thead>
												<tr>
													<th>#</th>
													<th>Book Title</th>
													<th>Book Cover</th>
													<th style="width: 10%">Action</th>
												</tr>
											</thead>

											<?php 
												foreach ($students as $key => $value) { ?>
													<tr>
														<td><?php echo $value['id']?></td>
														<td><?php echo $value['title']?></td>
														<td><?php echo $value['book_cover']?></td>
														<td>
															<div class="form-button-action">
																<a href="view_book.php?id=<?php echo $value['id']; ?>">
																	<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary p-2 btn-lg" data-original-title="View">
																		<i class="fa fa-eye" style="font-size: 18px;"></i>
																	</button>
																</a>
																<a href="update_book.php?id=<?php echo $value['id']; ?>">
																	<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary p-2 btn-lg" data-original-title="Edit Task">
																		<i class="fa fa-edit" style="font-size: 18px;"></i>
																	</button>
																</a>
																<a href="process.php?id=<?php echo $value['id']?>&submit_btn=delete_book">
																	<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger p-2" data-original-title="Remove">
																		<i class="fas fa-trash-alt text-danger" style="font-size: 18px;"></i>
																	</button>
																</a>
															</div>
														</td>
													</tr>
												<?php } ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
	<?php require "components/admin/foot_script.php"; ?>
</body>
</html>