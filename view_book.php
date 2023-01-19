<?php 

	require "dbwork.php";
	$obj->is_logged_in();

	
		$id = $_GET['id'];
		$book = $obj->get_book($id);	

		
?>

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
					<div class="page-header border-0">
						<h4 class="page-title">View Book</h4>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h2 class="page-title mb-0">Books</h2>
										<div class="ml-auto">
											<a href="uploads/<?php echo $book['books_pdf']; ?>" target="_blank" class="btn btn-primary ml-auto" style="font-size: 12px;">
												Read book
											</a>
											<a href="books_list.php" class="btn btn-primary ml-auto" style="font-size: 12px;">
												<i class="fa fa-arrow-left"></i>
											</a>
										</div>
									</div>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-md-12">
											<div class="book-img text-center">
												<img src="uploads/<?php echo $book['book_cover']; ?>" width="400px" height="400px">
											</div>
										</div>
									</div>
									<h2 align="left" class="mt-5 mb-3">Description</h2>
									<div class="row">
										<table class="table table-bordered">
											<tbody>
												<tr align="center">
													<th><b>Book title:</b></th>
													<td><?php echo $book['title']; ?></td>
												</tr>
												<tr align="center">
													<th><b>Book author:</b></th>
													<td><?php echo $book['author']; ?></td>
												</tr>
												<tr align="center">
													<th><b>Book Category:</b></th>
													<td><?php echo $book['name']; ?></td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="row">
										<div class="col-md-8 text-left row mt-3">
											<h3 class="text-muted col-md-6"></h3>
											<h3 class="col-md-6"></h3>
										</div>
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