<?php 
	session_start(); 
	
	if (isset($_GET['msg'])) {
		$url = $_GET['msg'];
	}
?>
	<style type="text/css">
		a p{
			font-weight: 300 !important;
		}
	</style>
	<div class="sidebar" style="padding: 70px 0 0 0;">			
			<div class="sidebar-background"></div>
			<div class="sidebar-wrapper scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="assets/img/newspaper logo.png" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									<?php print_r( $_SESSION['user']['name']); ?>
									<span class="user-level">Administrator</span>
								</span>
							</a>
							<div class="clearfix"></div>

							<!-- <div class="collapse in" id="collapseExample">
								<ul class="nav">
									<li>
										<a href="#profile">
											<span class="link-collapse">My Profile</span>
										</a>
									</li>
									<li>
										<a href="#edit">
											<span class="link-collapse">Edit Profile</span>
										</a>
									</li>
									<li>
										<a href="#settings">
											<span class="link-collapse">Settings</span>
										</a>
									</li>
								</ul>
							</div> -->
						</div>
					</div>
					<ul class="nav">
						<li class="nav-item <?php if($url == 'dashboard'): echo 'active'; endif?>">
							<a href="dashboard.php?msg=dashboard">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
							</a>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Components</h4>
						</li>
						<li class="nav-item <?php if($url == 'books'): echo 'active'; endif?>">
							<a href="books_list.php?msg=books">
								<i class="fas fa-layer-group layer_focus"></i>
								<p>Books</p>
							</a>
						</li>
						<li class="nav-item <?php if($url == 'book_category'): echo 'active'; endif?>">
							<a href="book_categories.php?msg=book_category">
								<i class="fas fa-pen-square layer_focus"></i>
								<p>Book Categories</p>
							</a>
						</li>

						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Setting</h4>
						</li>
						<li class="nav-item <?php if($url == 'users'): echo 'active'; endif?>">
							<a href="users.php?msg=users">
								<i class="fas fa-user layer_focus"></i>
								<p>Users</p>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>