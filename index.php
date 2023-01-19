<?php 
	session_start();
	if (isset($_SESSION['user'])) {
		header("location:dashboard.php");
	}

 ?>
<!DOCTYPE html>
<html>
<?php include('components/head.php'); ?>

<body>
	<?php include('components/navbar.php') ?>
	<section class="news-slider">
		<div id="google_translate_element"></div>
		<div id="carouselExampleControls" class="carousel slide" data-mdb-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<a href="#">
						<p><b>Lorem ipsum dolor</b>: sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua.</p>
					</a>
				</div>
				<div class="carousel-item">
					<a href="#">
						<p><b>Lorem ipsum dolor</b>: sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua.</p>
					</a>
				</div>
				<div class="carousel-item">
					<a href="#">
						<p><b>Lorem ipsum dolor</b>: sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua.</p>
					</a>
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleControls" data-mdb-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleControls" data-mdb-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
			<div class="urgent-alert">
				<a href="#">Urgent</a>
			</div>
		</div>
	</section>
	<section class="headlines-blog">
		<div class="container">
			<div class="blog-inner">
				<div class="row">
					<div class="col-md-6 right-line">
						<div class="col-left">
							<div class="head-link">
								<a href="#">
									<div class="row">
										<div class="col-md-3">
											<i class="fa fa-angle-left"></i>
										</div>
										<div class="col-md-9 text-right">
											News Sports
										</div>
									</div>
								</a>
							</div>
							<div class="video-blog">
								<div class="video">
									<div class="blog-main">
										<a href="#">
											<img src="assets/img/FVC4_LJWIAIJ0VY.jpg" width="100%">
											<p>Watch Messi's skill when he was a child..and the rest you all know</p>
										</a>
										<small class="hours">13 hours ago <i class="far fa-clock"></i></small>
										<a href="#"><small>Yakoora</small></a>
									</div>
									<div class="other-blogs ">
										<div class="d-flex flex-row-reverse">
											<div class="col-md-4">
												<img src="assets/img/muslic-pic.webp">
											</div>
											<div class="col-md-8 p-0">
												<a href="#">
													<p>Excuse me, Mbappe.. you are not the innocent angel</p>
												</a>
												<p>
													<small class="hours">13 hours ago <i class="far fa-clock"></i></small>
													<a href="#"><small>Hey Football</small></a>
												</p>
											</div>
										</div>
									</div>
									<div class="other-blogs">
										<div class="d-flex flex-row-reverse">
											<div class="col-md-4">
												<img src="assets/img/mbappe.jpg">
											</div>
											<div class="col-md-8 p-0">
												<a href="#">
													<p>Al-Nasr sacrifices 3 big stars for "Ronaldo's eyes"... Surprising Al Muammar</p>
												</a>
												<p>
													<small class="hours">3 hours ago <i class="far fa-clock"></i></small>
													<a href="#"><small>Saudi site</small></a>
												</p>
											</div>
										</div>
									</div>
									<div class="other-blogs">
										<div class="d-flex flex-row-reverse">
											<div class="col-md-4">
												<img src="assets/img/team.jpg">
											</div>
											<div class="col-md-8 p-0">
												<a href="#">
													<p>With names.. Real Madrid sacrifices seven players to sign 3 stars</p>
												</a>
												<p>
													<small class="hours">5 hours ago <i class="far fa-clock"></i></small>
													<a href="#"><small>Hey Football</small></a>
												</p>
											</div>
										</div>
									</div>
									<div class="other-blogs">
										<div class="d-flex flex-row-reverse">
											<div class="col-md-4">
												<img src="assets/img/1-1582708.jpeg">
											</div>
											<div class="col-md-8 p-0">
												<a href="#">
													<p>The Saudi Women's League.. Tunisian stars grab the limelight</p>
												</a>
												<p>
													<small class="hours">one hour ago <i class="far fa-clock"></i></small>
													<a href="#"><small>Sky News Arabia - Sports</small></a>
												</p>
											</div>
										</div>
									</div>
									<div class="other-blogs">
										<div class="d-flex flex-row-reverse">
											<div class="col-md-4">
												<img src="assets/img/1-1582693.jpg">
											</div>
											<div class="col-md-8 p-0">
												<a href="#">
													<p>After the celebration clips.. "Star Wars" is coming to Paris between Messi and Mbappe</p>
												</a>
												<p>
													<small class="hours">one hour ago <i class="far fa-clock"></i></small>
													<a href="#"><small>Sky News Arabia - Sports</small></a>
												</p>
											</div>
										</div>
									</div>
									<div class="more-btn">
										<a href="#">MORE SPORTS NEWS</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 left-line">
						<div class="col-right">
							<div class="head-link">
								<a href="#">
									<div class="row">
										<div class="col-md-3">
											<i class="fa fa-angle-left"></i>
										</div>
										<div class="col-md-9 text-right">
											Global sources - the most traded
										</div>
									</div>
								</a>
							</div>
							<div class="video-blog">
								<div class="video">
									<div class="blog-main">
										<a href="#">
											<img src="assets/img/Screenshot_20221222-115429.png" width="100%">
											<p>A fiery surprise in Ronaldo's contract with the Saudi victory</p>
										</a>
										<small class="hours">13 hours ago <i class="far fa-clock"></i></small>
										<a href="#"><small>Yakoora</small></a>
									</div>
									<div class="other-blogs">
										<div class="d-flex flex-row-reverse">
											<div class="col-md-4">
												<img src="assets/img/FkiQPBQXoBo23Q8.jpg">
											</div>
											<div class="col-md-8 p-0">
												<a href="#">
													<p>Excuse me, Mbappe.. you are not the innocent angel</p>
												</a>
												<p>
													<small class="hours">13 hours ago <i class="far fa-clock"></i></small>
													<a href="#"><small>Hey Football</small></a>
												</p>
											</div>
										</div>
									</div>
									<div class="other-blogs">
										<div class="d-flex flex-row-reverse">
											<div class="col-md-4">
												<img src="assets/img/63a3a1a14c59b73c573b6ea8.jpg">
											</div>
											<div class="col-md-8 p-0">
												<a href="#">
													<p>Al-Nasr sacrifices 3 big stars for "Ronaldo's eyes"... Surprising Al Muammar</p>
												</a>
												<p>
													<small class="hours">3 hours ago <i class="far fa-clock"></i></small>
													<a href="#"><small>Saudi site</small></a>
												</p>
											</div>
										</div>
									</div>
									<div class="other-blogs">
										<div class="d-flex flex-row-reverse">
											<div class="col-md-4">
												<img src="assets/img/63a314db4c59b73c573b6df0.png">
											</div>
											<div class="col-md-8 p-0">
												<a href="#">
													<p>With names.. Real Madrid sacrifices seven players to sign 3 stars</p>
												</a>
												<p>
													<small class="hours">5 hours ago <i class="far fa-clock"></i></small>
													<a href="#"><small>Hey Football</small></a>
												</p>
											</div>
										</div>
									</div>
									<div class="other-blogs">
										<div class="d-flex flex-row-reverse">
											<div class="col-md-4">
												<img src="assets/img/63a311034c59b76e9a556e06.png">
											</div>
											<div class="col-md-8 p-0">
												<a href="#">
													<p>The Saudi Women's League.. Tunisian stars grab the limelight</p>
												</a>
												<p>
													<small class="hours">one hour ago <i class="far fa-clock"></i></small>
													<a href="#"><small>Sky News Arabia - Sports</small></a>
												</p>
											</div>
										</div>
									</div>
									<div class="other-blogs">
										<div class="d-flex flex-row-reverse">
											<div class="col-md-4">
												<img src="assets/img/63a2afd64c59b7555118567f.jpg">
											</div>
											<div class="col-md-8 p-0">
												<a href="#">
													<p>After the celebration clips.. "Star Wars" is coming to Paris between Messi and Mbappe</p>
												</a>
												<p>
													<small class="hours">one hour ago <i class="far fa-clock"></i></small>
													<a href="#"><small>Sky News Arabia - Sports</small></a>
												</p>
											</div>
										</div>
									</div>
									<div class="more-btn">
										<a href="#">MORE WORLD NEWS</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="blog-inner" style="margin-top: 60px;">
				<div class="row">
					<div class="col-md-6 right-line">
						<div class="col-left">
							<div class="head-link">
								<a href="#">
									<div class="row">
										<div class="col-md-3">
											<i class="fa fa-angle-left"></i>
										</div>
										<div class="col-md-9 text-right">
											News Sports
										</div>
									</div>
								</a>
							</div>
							<div class="video-blog">
								<div class="video">
									<div class="blog-main">
										<a href="#">
											<img src="assets/img/FVC4_LJWIAIJ0VY.jpg" width="100%">
											<p>Watch Messi's skill when he was a child..and the rest you all know</p>
										</a>
										<small class="hours">13 hours ago <i class="far fa-clock"></i></small>
										<a href="#"><small>Yakoora</small></a>
									</div>
									<div class="other-blogs">
										<div class="d-flex flex-row-reverse">
											<div class="col-md-4">
												<img src="assets/img/مسلي-آل-معمر1664815513.webp">
											</div>
											<div class="col-md-8 p-0">
												<a href="#">
													<p>Excuse me, Mbappe.. you are not the innocent angel</p>
												</a>
												<p>
													<small class="hours">13 hours ago <i class="far fa-clock"></i></small>
													<a href="#"><small>Hey Football</small></a>
												</p>
											</div>
										</div>
									</div>
									<div class="other-blogs">
										<div class="d-flex flex-row-reverse">
											<div class="col-md-4">
												<img src="assets/img/mbappe.jpg">
											</div>
											<div class="col-md-8 p-0">
												<a href="#">
													<p>Al-Nasr sacrifices 3 big stars for "Ronaldo's eyes"... Surprising Al Muammar</p>
												</a>
												<p>
													<small class="hours">3 hours ago <i class="far fa-clock"></i></small>
													<a href="#"><small>Saudi site</small></a>
												</p>
											</div>
										</div>
									</div>
									<div class="other-blogs">
										<div class="d-flex flex-row-reverse">
											<div class="col-md-4">
												<img src="assets/img/team.jpg">
											</div>
											<div class="col-md-8 p-0">
												<a href="#">
													<p>With names.. Real Madrid sacrifices seven players to sign 3 stars</p>
												</a>
												<p>
													<small class="hours">5 hours ago <i class="far fa-clock"></i></small>
													<a href="#"><small>Hey Football</small></a>
												</p>
											</div>
										</div>
									</div>
									<div class="other-blogs">
										<div class="d-flex flex-row-reverse">
											<div class="col-md-4">
												<img src="assets/img/1-1582708.jpeg">
											</div>
											<div class="col-md-8 p-0">
												<a href="#">
													<p>The Saudi Women's League.. Tunisian stars grab the limelight</p>
												</a>
												<p>
													<small class="hours">one hour ago <i class="far fa-clock"></i></small>
													<a href="#"><small>Sky News Arabia - Sports</small></a>
												</p>
											</div>
										</div>
									</div>
									<div class="other-blogs">
										<div class="d-flex flex-row-reverse">
											<div class="col-md-4">
												<img src="assets/img/1-1582693.jpg">
											</div>
											<div class="col-md-8 p-0">
												<a href="#">
													<p>After the celebration clips.. "Star Wars" is coming to Paris between Messi and Mbappe</p>
												</a>
												<p>
													<small class="hours">one hour ago <i class="far fa-clock"></i></small>
													<a href="#"><small>Sky News Arabia - Sports</small></a>
												</p>
											</div>
										</div>
									</div>
									<div class="more-btn">
										<a href="#">MORE SPORTS NEWS</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 left-line">
						<div class="col-right">
							<div class="head-link">
								<a href="#">
									<div class="row">
										<div class="col-md-3">
											<i class="fa fa-angle-left"></i>
										</div>
										<div class="col-md-9 text-right">
											Global sources - the most traded
										</div>
									</div>
								</a>
							</div>
							<div class="video-blog">
								<div class="video">
									<div class="blog-main">
										<a href="#">
											<img src="assets/img/Screenshot_20221222-115429.png" width="100%">
											<p>Watch Messi's skill when he was a child..and the rest you all know</p>
										</a>
										<small class="hours">13 hours ago <i class="far fa-clock"></i></small>
										<a href="#"><small>Yakoora</small></a>
									</div>
									<div class="other-blogs">
										<div class="d-flex flex-row-reverse">
											<div class="col-md-4">
												<img src="assets/img/FkiQPBQXoBo23Q8.jpg">
											</div>
											<div class="col-md-8 p-0">
												<a href="#">
													<p>Excuse me, Mbappe.. you are not the innocent angel</p>
												</a>
												<p>
													<small class="hours">13 hours ago <i class="far fa-clock"></i></small>
													<a href="#"><small>Hey Football</small></a>
												</p>
											</div>
										</div>
									</div>
									<div class="other-blogs">
										<div class="d-flex flex-row-reverse">
											<div class="col-md-4">
												<img src="assets/img/63a3a1a14c59b73c573b6ea8.jpg">
											</div>
											<div class="col-md-8 p-0">
												<a href="#">
													<p>Al-Nasr sacrifices 3 big stars for "Ronaldo's eyes"... Surprising Al Muammar</p>
												</a>
												<p>
													<small class="hours">3 hours ago <i class="far fa-clock"></i></small>
													<a href="#"><small>Saudi site</small></a>
												</p>
											</div>
										</div>
									</div>
									<div class="other-blogs">
										<div class="d-flex flex-row-reverse">
											<div class="col-md-4">
												<img src="assets/img/63a314db4c59b73c573b6df0.png">
											</div>
											<div class="col-md-8 p-0">
												<a href="#">
													<p>With names.. Real Madrid sacrifices seven players to sign 3 stars</p>
												</a>
												<p>
													<small class="hours">5 hours ago <i class="far fa-clock"></i></small>
													<a href="#"><small>Hey Football</small></a>
												</p>
											</div>
										</div>
									</div>
									<div class="other-blogs">
										<div class="d-flex flex-row-reverse">
											<div class="col-md-4">
												<img src="assets/img/63a311034c59b76e9a556e06.png">
											</div>
											<div class="col-md-8 p-0">
												<a href="#">
													<p>The Saudi Women's League.. Tunisian stars grab the limelight</p>
												</a>
												<p>
													<small class="hours">one hour ago <i class="far fa-clock"></i></small>
													<a href="#"><small>Sky News Arabia - Sports</small></a>
												</p>
											</div>
										</div>
									</div>
									<div class="other-blogs">
										<div class="d-flex flex-row-reverse">
											<div class="col-d-4">
												<img src="assets/img/63a2afd64c59b7555118567f.jpg">
											</div>
											<div class="col-md-8 p-0">
												<a href="#">
													<p>After the celebration clips.. "Star Wars" is coming to Paris between Messi and Mbappe</p>
												</a>
												<p>
													<small class="hours">one hour ago <i class="far fa-clock"></i></small>
													<a href="#"><small>Sky News Arabia - Sports</small></a>
												</p>
											</div>
										</div>
									</div>
									<div class="more-btn">
										<a href="#">MORE WORLD NEWS</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="blog-inner" style="margin-top: 60px;">
				<div class="row">
					<div class="col-md-6 right-line">
						<div class="col-left">
							<div class="head-link">
								<a href="#">
									<div class="row">
										<div class="col-md-3">
											<i class="fa fa-angle-left"></i>
										</div>
										<div class="col-md-9 text-right">
											News Sports
										</div>
									</div>
								</a>
							</div>
							<div class="video-blog">
								<div class="video">
									<div class="blog-main">
										<a href="#">
											<img src="assets/img/FVC4_LJWIAIJ0VY.jpg" width="100%">
											<p>Watch Messi's skill when he was a child..and the rest you all know</p>
										</a>
										<small class="hours">13 hours ago <i class="far fa-clock"></i></small>
										<a href="#"><small>Yakoora</small></a>
									</div>
									<div class="other-blogs">
										<div class="d-flex flex-row-reverse">
											<div class="col-md-4">
												<img src="assets/img/مسلي-آل-معمر1664815513.webp">
											</div>
											<div class="col-md-8 p-0">
												<a href="#">
													<p>Excuse me, Mbappe.. you are not the innocent angel</p>
												</a>
												<p>
													<small class="hours">13 hours ago <i class="far fa-clock"></i></small>
													<a href="#"><small>Hey Football</small></a>
												</p>
											</div>
										</div>
									</div>
									<div class="other-blogs">
										<div class="d-flex flex-row-reverse">
											<div class="col-md-4">
												<img src="assets/img/mbappe.jpg">
											</div>
											<div class="col-md-8 p-0">
												<a href="#">
													<p>Al-Nasr sacrifices 3 big stars for "Ronaldo's eyes"... Surprising Al Muammar</p>
												</a>
												<p>
													<small class="hours">3 hours ago <i class="far fa-clock"></i></small>
													<a href="#"><small>Saudi site</small></a>
												</p>
											</div>
										</div>
									</div>
									<div class="other-blogs">
										<div class="d-flex flex-row-reverse">
											<div class="col-md-4">
												<img src="assets/img/team.jpg">
											</div>
											<div class="col-md-8 p-0">
												<a href="#">
													<p>With names.. Real Madrid sacrifices seven players to sign 3 stars</p>
												</a>
												<p>
													<small class="hours">5 hours ago <i class="far fa-clock"></i></small>
													<a href="#"><small>Hey Football</small></a>
												</p>
											</div>
										</div>
									</div>
									<div class="other-blogs">
										<div class="d-flex flex-row-reverse">
											<div class="col-md-4">
												<img src="assets/img/1-1582708.jpeg">
											</div>
											<div class="col-md-8 p-0">
												<a href="#">
													<p>The Saudi Women's League.. Tunisian stars grab the limelight</p>
												</a>
												<p>
													<small class="hours">one hour ago <i class="far fa-clock"></i></small>
													<a href="#"><small>Sky News Arabia - Sports</small></a>
												</p>
											</div>
										</div>
									</div>
									<div class="other-blogs">
										<div class="d-flex flex-row-reverse">
											<div class="col-md-4">
												<img src="assets/img/1-1582693.jpg">
											</div>
											<div class="col-md-8 p-0">
												<a href="#">
													<p>After the celebration clips.. "Star Wars" is coming to Paris between Messi and Mbappe</p>
												</a>
												<p>
													<small class="hours">one hour ago <i class="far fa-clock"></i></small>
													<a href="#"><small>Sky News Arabia - Sports</small></a>
												</p>
											</div>
										</div>
									</div>
									<div class="more-btn">
										<a href="#">MORE SPORTS NEWS</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 left-line">
						<div class="col-right">
							<div class="head-link">
								<a href="#">
									<div class="row">
										<div class="col-md-3">
											<i class="fa fa-angle-left"></i>
										</div>
										<div class="col-md-9 text-right">
											Global sources - the most traded
										</div>
									</div>
								</a>
							</div>
							<div class="video-blog">
								<div class="video">
									<div class="blog-main">
										<a href="#">
											<img src="assets/img/Screenshot_20221222-115429.png" width="100%">
											<p>Watch Messi's skill when he was a child..and the rest you all know</p>
										</a>
										<small class="hours">13 hours ago <i class="far fa-clock"></i></small>
										<a href="#"><small>Yakoora</small></a>
									</div>
									<div class="other-blogs">
										<div class="d-flex flex-row-reverse">
											<div class="col-md-4">
												<img src="assets/img/FkiQPBQXoBo23Q8.jpg">
											</div>
											<div class="col-md-8 p-0">
												<a href="#">
													<p>Excuse me, Mbappe.. you are not the innocent angel</p>
												</a>
												<p>
													<small class="hours">13 hours ago <i class="far fa-clock"></i></small>
													<a href="#"><small>Hey Football</small></a>
												</p>
											</div>
										</div>
									</div>
									<div class="other-blogs">
										<div class="d-flex flex-row-reverse">
											<div class="col-md-4">
												<img src="assets/img/63a3a1a14c59b73c573b6ea8.jpg">
											</div>
											<div class="col-md-8 p-0">
												<a href="#">
													<p>Al-Nasr sacrifices 3 big stars for "Ronaldo's eyes"... Surprising Al Muammar</p>
												</a>
												<p>
													<small class="hours">3 hours ago <i class="far fa-clock"></i></small>
													<a href="#"><small>Saudi site</small></a>
												</p>
											</div>
										</div>
									</div>
									<div class="other-blogs">
										<div class="d-flex flex-row-reverse">
											<div class="col-md-4">
												<img src="assets/img/63a314db4c59b73c573b6df0.png">
											</div>
											<div class="col-md-8 p-0">
												<a href="#">
													<p>With names.. Real Madrid sacrifices seven players to sign 3 stars</p>
												</a>
												<p>
													<small class="hours">5 hours ago <i class="far fa-clock"></i></small>
													<a href="#"><small>Hey Football</small></a>
												</p>
											</div>
										</div>
									</div>
									<div class="other-blogs">
										<div class="d-flex flex-row-reverse">
											<div class="col-md-4">
												<img src="assets/img/63a311034c59b76e9a556e06.png">
											</div>
											<div class="col-md-8 p-0">
												<a href="#">
													<p>The Saudi Women's League.. Tunisian stars grab the limelight</p>
												</a>
												<p>
													<small class="hours">one hour ago <i class="far fa-clock"></i></small>
													<a href="#"><small>Sky News Arabia - Sports</small></a>
												</p>
											</div>
										</div>
									</div>
									<div class="other-blogs">
										<div class="d-flex flex-row-reverse">
											<div class="col-md-4">
												<img src="assets/img/63a2afd64c59b7555118567f.jpg">
											</div>
											<div class="col-md-8 p-0">
												<a href="#">
													<p>After the celebration clips.. "Star Wars" is coming to Paris between Messi and Mbappe</p>
												</a>
												<p>
													<small class="hours">one hour ago <i class="far fa-clock"></i></small>
													<a href="#"><small>Sky News Arabia - Sports</small></a>
												</p>
											</div>
										</div>
									</div>
									<div class="more-btn">
										<a href="#">MORE WORLD NEWS</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="blog-inner" style="margin-top: 60px;">
				<div class="row">
					<div class="col-md-6 right-line">
						<div class="col-left">
							<div class="head-link">
								<a href="#">
									<div class="row">
										<div class="col-md-3">
											<i class="fa fa-angle-left"></i>
										</div>
										<div class="col-md-9 text-right">
											News Sports
										</div>
									</div>
								</a>
							</div>
							<div class="video-blog">
								<div class="video">
									<div class="blog-main">
										<a href="#">
											<img src="assets/img/FVC4_LJWIAIJ0VY.jpg" width="100%">
											<p>Watch Messi's skill when he was a child..and the rest you all know</p>
										</a>
										<small class="hours">13 hours ago <i class="far fa-clock"></i></small>
										<a href="#"><small>Yakoora</small></a>
									</div>
									<div class="other-blogs">
										<div class="d-flex flex-row-reverse">
											<div class="col-md-4">
												<img src="assets/img/مسلي-آل-معمر1664815513.webp">
											</div>
											<div class="col-md-8 p-0">
												<a href="#">
													<p>Excuse me, Mbappe.. you are not the innocent angel</p>
												</a>
												<p>
													<small class="hours">13 hours ago <i class="far fa-clock"></i></small>
													<a href="#"><small>Hey Football</small></a>
												</p>
											</div>
										</div>
									</div>
									<div class="other-blogs">
										<div class="d-flex flex-row-reverse">
											<div class="col-md-4">
												<img src="assets/img/mbappe.jpg">
											</div>
											<div class="col-md-8 p-0">
												<a href="#">
													<p>Al-Nasr sacrifices 3 big stars for "Ronaldo's eyes"... Surprising Al Muammar</p>
												</a>
												<p>
													<small class="hours">3 hours ago <i class="far fa-clock"></i></small>
													<a href="#"><small>Saudi site</small></a>
												</p>
											</div>
										</div>
									</div>
									<div class="other-blogs">
										<div class="d-flex flex-row-reverse">
											<div class="col-md-4">
												<img src="assets/img/team.jpg">
											</div>
											<div class="col-md-8 p-0">
												<a href="#">
													<p>With names.. Real Madrid sacrifices seven players to sign 3 stars</p>
												</a>
												<p>
													<small class="hours">5 hours ago <i class="far fa-clock"></i></small>
													<a href="#"><small>Hey Football</small></a>
												</p>
											</div>
										</div>
									</div>
									<div class="other-blogs">
										<div class="d-flex flex-row-reverse">
											<div class="col-md-4">
												<img src="assets/img/1-1582708.jpeg">
											</div>
											<div class="col-md-8 p-0">
												<a href="#">
													<p>The Saudi Women's League.. Tunisian stars grab the limelight</p>
												</a>
												<p>
													<small class="hours">one hour ago <i class="far fa-clock"></i></small>
													<a href="#"><small>Sky News Arabia - Sports</small></a>
												</p>
											</div>
										</div>
									</div>
									<div class="other-blogs">
										<div class="d-flex flex-row-reverse">
											<div class="col-md-4">
												<img src="assets/img/1-1582693.jpg">
											</div>
											<div class="col-md-8 p-0">
												<a href="#">
													<p>After the celebration clips.. "Star Wars" is coming to Paris between Messi and Mbappe</p>
												</a>
												<p>
													<small class="hours">one hour ago <i class="far fa-clock"></i></small>
													<a href="#"><small>Sky News Arabia - Sports</small></a>
												</p>
											</div>
										</div>
									</div>
									<div class="more-btn">
										<a href="#">MORE SPORTS NEWS</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 left-line">
						<div class="col-right">
							<div class="head-link">
								<a href="#">
									<div class="row">
										<div class="col-md-3">
											<i class="fa fa-angle-left"></i>
										</div>
										<div class="col-md-9 text-right">
											Global sources - the most traded
										</div>
									</div>
								</a>
							</div>
							<div class="video-blog">
								<div class="video">
									<div class="blog-main">
										<a href="#">
											<img src="assets/img/Screenshot_20221222-115429.png" width="100%">
											<p>Watch Messi's skill when he was a child..and the rest you all know</p>
										</a>
										<small class="hours">13 hours ago <i class="far fa-clock"></i></small>
										<a href="#"><small>Yakoora</small></a>
									</div>
									<div class="other-blogs">
										<div class="d-flex flex-row-reverse">
											<div class="col-md-4">
												<img src="assets/img/FkiQPBQXoBo23Q8.jpg">
											</div>
											<div class="col-md-8 p-0">
												<a href="#">
													<p>Excuse me, Mbappe.. you are not the innocent angel</p>
												</a>
												<p>
													<small class="hours">13 hours ago <i class="far fa-clock"></i></small>
													<a href="#"><small>Hey Football</small></a>
												</p>
											</div>
										</div>
									</div>
									<div class="other-blogs">
										<div class="d-flex flex-row-reverse">
											<div class="col-md-4">
												<img src="assets/img/63a3a1a14c59b73c573b6ea8.jpg">
											</div>
											<div class="col-md-8 p-0">
												<a href="#">
													<p>Al-Nasr sacrifices 3 big stars for "Ronaldo's eyes"... Surprising Al Muammar</p>
												</a>
												<p>
													<small class="hours">3 hours ago <i class="far fa-clock"></i></small>
													<a href="#"><small>Saudi site</small></a>
												</p>
											</div>
										</div>
									</div>
									<div class="other-blogs">
										<div class="d-flex flex-row-reverse">
											<div class="col-md-4">
												<img src="assets/img/63a314db4c59b73c573b6df0.png">
											</div>
											<div class="col-md-8 p-0">
												<a href="#">
													<p>With names.. Real Madrid sacrifices seven players to sign 3 stars</p>
												</a>
												<p>
													<small class="hours">5 hours ago <i class="far fa-clock"></i></small>
													<a href="#"><small>Hey Football</small></a>
												</p>
											</div>
										</div>
									</div>
									<div class="other-blogs">
										<div class="d-flex flex-row-reverse">
											<div class="col-md-4">
												<img src="assets/img/63a311034c59b76e9a556e06.png">
											</div>
											<div class="col-md-8 p-0">
												<a href="#">
													<p>The Saudi Women's League.. Tunisian stars grab the limelight</p>
												</a>
												<p>
													<small class="hours">one hour ago <i class="far fa-clock"></i></small>
													<a href="#"><small>Sky News Arabia - Sports</small></a>
												</p>
											</div>
										</div>
									</div>
									<div class="other-blogs">
										<div class="d-flex flex-row-reverse">
											<div class="col-md-4">
												<img src="assets/img/63a2afd64c59b7555118567f.jpg">
											</div>
											<div class="col-md-8 p-0">
												<a href="#">
													<p>After the celebration clips.. "Star Wars" is coming to Paris between Messi and Mbappe</p>
												</a>
												<p>
													<small class="hours">one hour ago <i class="far fa-clock"></i></small>
													<a href="#"><small>Sky News Arabia - Sports</small></a>
												</p>
											</div>
										</div>
									</div>
									<div class="more-btn">
										<a href="#">MORE WORLD NEWS</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="blog-inner" style="margin-top: 60px;">
				<div class="row">
					<div class="col-md-6 right-line">
						<div class="col-left">
							<div class="head-link">
								<a href="#">
									<div class="row">
										<div class="col-md-3">
											<i class="fa fa-angle-left"></i>
										</div>
										<div class="col-md-9 text-right">
											News Sports
										</div>
									</div>
								</a>
							</div>
							<div class="video-blog">
								<div class="video">
									<div class="blog-main">
										<a href="#">
											<img src="assets/img/FVC4_LJWIAIJ0VY.jpg" width="100%">
											<p>Watch Messi's skill when he was a child..and the rest you all know</p>
										</a>
										<small class="hours">13 hours ago <i class="far fa-clock"></i></small>
										<a href="#"><small>Yakoora</small></a>
									</div>
									<div class="other-blogs">
										<div class="d-flex flex-row-reverse">
											<div class="col-md-4">
												<img src="assets/img/مسلي-آل-معمر1664815513.webp">
											</div>
											<div class="col-md-8 p-0">
												<a href="#">
													<p>Excuse me, Mbappe.. you are not the innocent angel</p>
												</a>
												<p>
													<small class="hours">13 hours ago <i class="far fa-clock"></i></small>
													<a href="#"><small>Hey Football</small></a>
												</p>
											</div>
										</div>
									</div>
									<div class="other-blogs">
										<div class="d-flex flex-row-reverse">
											<div class="col-md-4">
												<img src="assets/img/mbappe.jpg">
											</div>
											<div class="col-md-8 p-0">
												<a href="#">
													<p>Al-Nasr sacrifices 3 big stars for "Ronaldo's eyes"... Surprising Al Muammar</p>
												</a>
												<p>
													<small class="hours">3 hours ago <i class="far fa-clock"></i></small>
													<a href="#"><small>Saudi site</small></a>
												</p>
											</div>
										</div>
									</div>
									<div class="other-blogs">
										<div class="d-flex flex-row-reverse">
											<div class="col-md-4">
												<img src="assets/img/team.jpg">
											</div>
											<div class="col-md-8 p-0">
												<a href="#">
													<p>With names.. Real Madrid sacrifices seven players to sign 3 stars</p>
												</a>
												<p>
													<small class="hours">5 hours ago <i class="far fa-clock"></i></small>
													<a href="#"><small>Hey Football</small></a>
												</p>
											</div>
										</div>
									</div>
									<div class="other-blogs">
										<div class="d-flex flex-row-reverse">
											<div class="col-md-4">
												<img src="assets/img/1-1582708.jpeg">
											</div>
											<div class="col-md-8 p-0">
												<a href="#">
													<p>The Saudi Women's League.. Tunisian stars grab the limelight</p>
												</a>
												<p>
													<small class="hours">one hour ago <i class="far fa-clock"></i></small>
													<a href="#"><small>Sky News Arabia - Sports</small></a>
												</p>
											</div>
										</div>
									</div>
									<div class="other-blogs">
										<div class="d-flex flex-row-reverse">
											<div class="col-md-4">
												<img src="assets/img/1-1582693.jpg">
											</div>
											<div class="col-md-8 p-0">
												<a href="#">
													<p>After the celebration clips.. "Star Wars" is coming to Paris between Messi and Mbappe</p>
												</a>
												<p>
													<small class="hours">one hour ago <i class="far fa-clock"></i></small>
													<a href="#"><small>Sky News Arabia - Sports</small></a>
												</p>
											</div>
										</div>
									</div>
									<div class="more-btn">
										<a href="#">MORE SPORTS NEWS</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 left-line">
						<div class="col-right">
							<div class="head-link">
								<a href="#">
									<div class="row">
										<div class="col-md-3">
											<i class="fa fa-angle-left"></i>
										</div>
										<div class="col-md-9 text-right">
											Global sources - the most traded
										</div>
									</div>
								</a>
							</div>
							<div class="video-blog">
								<div class="video">
									<div class="blog-main">
										<a href="#">
											<img src="assets/img/Screenshot_20221222-115429.png" width="100%">
											<p>Watch Messi's skill when he was a child..and the rest you all know</p>
										</a>
										<small class="hours">13 hours ago <i class="far fa-clock"></i></small>
										<a href="#"><small>Yakoora</small></a>
									</div>
									<div class="other-blogs">
										<div class="d-flex flex-row-reverse">
											<div class="col-md-4">
												<img src="assets/img/FkiQPBQXoBo23Q8.jpg">
											</div>
											<div class="col-md-8 p-0">
												<a href="#">
													<p>Excuse me, Mbappe.. you are not the innocent angel</p>
												</a>
												<p>
													<small class="hours">13 hours ago <i class="far fa-clock"></i></small>
													<a href="#"><small>Hey Football</small></a>
												</p>
											</div>
										</div>
									</div>
									<div class="other-blogs">
										<div class="d-flex flex-row-reverse">
											<div class="col-md-4">
												<img src="assets/img/63a3a1a14c59b73c573b6ea8.jpg">
											</div>
											<div class="col-md-8 p-0">
												<a href="#">
													<p>Al-Nasr sacrifices 3 big stars for "Ronaldo's eyes"... Surprising Al Muammar</p>
												</a>
												<p>
													<small class="hours">3 hours ago <i class="far fa-clock"></i></small>
													<a href="#"><small>Saudi site</small></a>
												</p>
											</div>
										</div>
									</div>
									<div class="other-blogs">
										<div class="d-flex flex-row-reverse">
											<div class="col-md-4">
												<img src="assets/img/63a314db4c59b73c573b6df0.png">
											</div>
											<div class="col-md-8 p-0">
												<a href="#">
													<p>With names.. Real Madrid sacrifices seven players to sign 3 stars</p>
												</a>
												<p>
													<small class="hours">5 hours ago <i class="far fa-clock"></i></small>
													<a href="#"><small>Hey Football</small></a>
												</p>
											</div>
										</div>
									</div>
									<div class="other-blogs">
										<div class="d-flex flex-row-reverse">
											<div class="col-md-4">
												<img src="assets/img/63a311034c59b76e9a556e06.png">
											</div>
											<div class="col-md-8 p-0">
												<a href="#">
													<p>The Saudi Women's League.. Tunisian stars grab the limelight</p>
												</a>
												<p>
													<small class="hours">one hour ago <i class="far fa-clock"></i></small>
													<a href="#"><small>Sky News Arabia - Sports</small></a>
												</p>
											</div>
										</div>
									</div>
									<div class="other-blogs">
										<div class="d-flex flex-row-reverse">
											<div class="col-md-4">
												<img src="assets/img/63a2afd64c59b7555118567f.jpg">
											</div>
											<div class="col-md-8 p-0">
												<a href="#">
													<p>After the celebration clips.. "Star Wars" is coming to Paris between Messi and Mbappe</p>
												</a>
												<p>
													<small class="hours">one hour ago <i class="far fa-clock"></i></small>
													<a href="#"><small>Sky News Arabia - Sports</small></a>
												</p>
											</div>
										</div>
									</div>
									<div class="more-btn">
										<a href="#">MORE WORLD NEWS</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="blog-inner" style="margin-top: 60px;">
				<div class="row">
					<div class="col-md-6 right-line">
					</div>
					<div class="col-md-6 left-line">
						<div class="col-right">
							<div class="head-link">
								<a href="#">
									<div class="row">
										<div class="col-md-3">
											<i class="fa fa-angle-left"></i>
										</div>
										<div class="col-md-9 text-right">
											Global sources - the most traded
										</div>
									</div>
								</a>
							</div>
							<div class="video-blog">
								<div class="video">
									<div class="blog-main">
										<a href="#">
											<img src="assets/img/Screenshot_20221222-115429.png" width="100%">
											<p>Watch Messi's skill when he was a child..and the rest you all know</p>
										</a>
										<small class="hours">13 hours ago <i class="far fa-clock"></i></small>
										<a href="#"><small>Yakoora</small></a>
									</div>
									<div class="other-blogs">
										<div class="d-flex flex-row-reverse">
											<div class="col-md-4">
												<img src="assets/img/FkiQPBQXoBo23Q8.jpg">
											</div>
											<div class="col-md-8 p-0">
												<a href="#">
													<p>Excuse me, Mbappe.. you are not the innocent angel</p>
												</a>
												<p>
													<small class="hours">13 hours ago <i class="far fa-clock"></i></small>
													<a href="#"><small>Hey Football</small></a>
												</p>
											</div>
										</div>
									</div>
									<div class="other-blogs">
										<div class="d-flex flex-row-reverse">
											<div class="col-md-4">
												<img src="assets/img/63a3a1a14c59b73c573b6ea8.jpg">
											</div>
											<div class="col-md-8 p-0">
												<a href="#">
													<p>Al-Nasr sacrifices 3 big stars for "Ronaldo's eyes"... Surprising Al Muammar</p>
												</a>
												<p>
													<small class="hours">3 hours ago <i class="far fa-clock"></i></small>
													<a href="#"><small>Saudi site</small></a>
												</p>
											</div>
										</div>
									</div>
									<div class="other-blogs">
										<div class="d-flex flex-row-reverse">
											<div class="col-md-4">
												<img src="assets/img/63a314db4c59b73c573b6df0.png">
											</div>
											<div class="col-md-8 p-0">
												<a href="#">
													<p>With names.. Real Madrid sacrifices seven players to sign 3 stars</p>
												</a>
												<p>
													<small class="hours">5 hours ago <i class="far fa-clock"></i></small>
													<a href="#"><small>Hey Football</small></a>
												</p>
											</div>
										</div>
									</div>
									<div class="other-blogs">
										<div class="d-flex flex-row-reverse">
											<div class="col-md-4">
												<img src="assets/img/63a311034c59b76e9a556e06.png">
											</div>
											<div class="col-md-8 p-0">
												<a href="#">
													<p>The Saudi Women's League.. Tunisian stars grab the limelight</p>
												</a>
												<p>
													<small class="hours">one hour ago <i class="far fa-clock"></i></small>
													<a href="#"><small>Sky News Arabia - Sports</small></a>
												</p>
											</div>
										</div>
									</div>
									<div class="other-blogs">
										<div class="d-flex flex-row-reverse">
											<div class="col-md-4">
												<img src="assets/img/63a2afd64c59b7555118567f.jpg">
											</div>
											<div class="col-md-8 p-0">
												<a href="#">
													<p>After the celebration clips.. "Star Wars" is coming to Paris between Messi and Mbappe</p>
												</a>
												<p>
													<small class="hours">one hour ago <i class="far fa-clock"></i></small>
													<a href="#"><small>Sky News Arabia - Sports</small></a>
												</p>
											</div>
										</div>
									</div>
									<div class="more-btn">
										<a href="#">MORE WORLD NEWS</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<footer class="footer-final">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="text-center">
						<a href="#">
							<i class="fa-brands fa-facebook-f"></i>
						</a>
					</div>
				</div>
				<div class="col-md-3">
					<div class="text-center">
						<a href="#">
							<i class="fa-brands fa-twitter"></i>
						</a>
					</div>
				</div>
				<div class="col-md-3">
					<div class="text-center">
						<a href="#">
							<i class="fa-brands fa-instagram"></i>
						</a>
					</div>
				</div>
				<div class="col-md-3">
					<div class="text-center">
						<a href="#">
							<i class="fa-solid fa-globe"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<?php include('components/script.php') ?>
</body>

</html>