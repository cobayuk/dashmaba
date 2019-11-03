<?php
   ob_start();
    session_start();
     ob_end_clean();
    if(isset($_SESSION["username"])){
    }else{
        echo header("location:login.php");
    }
?> 
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags-->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="au theme template">
	<meta name="author" content="Hau Nguyen">
	<meta name="keywords" content="au theme template">

	<!-- Title Page-->
	<title>Tab</title>

	<!-- Fontfaces CSS-->
	<link href="css/font-face.css" rel="stylesheet" media="all">
	<link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
	<link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
	<link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

	<!-- Bootstrap CSS-->
	<link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

	<!-- Vendor CSS-->
	<link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
	<link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
	<link href="vendor/wow/animate.css" rel="stylesheet" media="all">
	<link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
	<link href="vendor/slick/slick.css" rel="stylesheet" media="all">
	<link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
	<link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

	<!-- Main CSS-->
	<link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
	<div class="page-wrapper">
		<!-- HEADER MOBILE-->
		<header class="header-mobile d-block d-lg-none">
			<div class="header-mobile__bar">
				<div class="container-fluid">
					<div class="header-mobile-inner">
						<a class="logo" href="index.html">
							<img src="images/icon/logo.png" alt="CoolAdmin" />
						</a>
						<button class="hamburger hamburger--slider" type="button">
							<span class="hamburger-box">
								<span class="hamburger-inner"></span>
							</span>
						</button>
					</div>
				</div>
			</div>
			<nav class="navbar-mobile">
				<div class="container-fluid">
					<ul class="navbar-mobile__list list-unstyled">
						<li>
                            <a href="index">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="exam">
                                <i class="far fa-check-square"></i>Exams</a>
                        </li>
                        <li>
                            <a href="material">
                                <i class="fas fa-calendar-alt"></i>Materi</a>
                        </li>
                        <li>
                            <a href="contact">
                                <i class="fas fa-map-marker-alt"></i>Kontak</a>
                        </li>	
					</ul>
				</div>
			</nav>
		</header>
		<!-- END HEADER MOBILE-->

		<!-- MENU SIDEBAR-->
		<aside class="menu-sidebar d-none d-lg-block">
			<div class="logo">
				<a href="#">
					<img src="images/icon/logo.png" alt="Cool Admin" />
				</a>
			</div>
			<div class="menu-sidebar__content js-scrollbar1">
				<nav class="navbar-sidebar">
					<ul class="list-unstyled navbar__list">
						<li>
                            <a href="index">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="exam">
                                <i class="far fa-check-square"></i>Exams</a>
                        </li>
                        <li>
                            <a href="material">
                                <i class="fas fa-calendar-alt"></i>Materi</a>
                        </li>
                        <li>
                            <a href="contact">
                                <i class="fas fa-map-marker-alt"></i>Kontak</a>
                        </li>	
					</ul>
				</nav>
			</div>
		</aside>
		<!-- END MENU SIDEBAR-->

		<!-- PAGE CONTAINER-->
		<div class="page-container">
			<!-- HEADER DESKTOP-->
			<header class="header-desktop">
				<div class="section__content section__content--p30">
					<div class="container-fluid">
						<div class="header-wrap">
							<form class="form-header" action="" method="POST">
								<input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
								<button class="au-btn--submit" type="submit">
									<i class="zmdi zmdi-search"></i>
								</button>
							</form>
							<div class="header-button">
								<div class="noti-wrap">
									<div class="noti__item js-item-menu">
										<i class="zmdi zmdi-comment-more"></i>
										<span class="quantity">1</span>
										<div class="mess-dropdown js-dropdown">
											<div class="mess__title">
												<p>You have 2 news message</p>
											</div>
											<div class="mess__item">
												<div class="image img-cir img-40">
													<img src="images/icon/avatar-06.jpg" alt="Michelle Moreno" />
												</div>
												<div class="content">
													<h6>Michelle Moreno</h6>
													<p>Have sent a photo</p>
													<span class="time">3 min ago</span>
												</div>
											</div>
											<div class="mess__item">
												<div class="image img-cir img-40">
													<img src="images/icon/avatar-04.jpg" alt="Diane Myers" />
												</div>
												<div class="content">
													<h6>Diane Myers</h6>
													<p>You are now connected on message</p>
													<span class="time">Yesterday</span>
												</div>
											</div>
											<div class="mess__footer">
												<a href="#">View all messages</a>
											</div>
										</div>
									</div>
									<div class="noti__item js-item-menu">
										<i class="zmdi zmdi-notifications"></i>
										<span class="quantity">3</span>
										<div class="notifi-dropdown js-dropdown">
											<div class="notifi__title">
												<p>You have 3 Notifications</p>
											</div>
											<div class="notifi__item">
												<div class="bg-c1 img-cir img-40">
													<i class="zmdi zmdi-email-open"></i>
												</div>
												<div class="content">
													<p>You got a email notification</p>
													<span class="date">April 12, 2018 06:50</span>
												</div>
											</div>
											<div class="notifi__item">
												<div class="bg-c2 img-cir img-40">
													<i class="zmdi zmdi-account-box"></i>
												</div>
												<div class="content">
													<p>Your account has been blocked</p>
													<span class="date">April 12, 2018 06:50</span>
												</div>
											</div>
											<div class="notifi__item">
												<div class="bg-c3 img-cir img-40">
													<i class="zmdi zmdi-file-text"></i>
												</div>
												<div class="content">
													<p>You got a new file</p>
													<span class="date">April 12, 2018 06:50</span>
												</div>
											</div>
											<div class="notifi__footer">
												<a href="#">All notifications</a>
											</div>
										</div>
									</div>
								</div>
								<div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">Logout</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">

                                               <a href="#">Kamu yakin ingin keluar?</a>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="log_out.php">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
							</div>
						</div>
					</div>
				</div>
			</header>
			<!-- END HEADER DESKTOP-->

			<!-- MAIN CONTENT-->
			<div class="main-content">
				<div class="section__content section__content--p30">
					<div class="container-fluid">
						<div class="row">
							<!-- /# column -->
							<div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<h4>Kumpulan Materi Ujian</h4>
									</div>
									<div class="card-body">
										<div class="custom-tab">
											<nav>
												<div class="nav nav-tabs" id="nav-tab" role="tablist">
													<a class="nav-item nav-link active" id="custom-nav-tpa-tab" data-toggle="tab" href="#custom-nav-tpa" role="tab" aria-controls="custom-nav-tpa"
													 aria-selected="true">TPA</a>
													<a class="nav-item nav-link" id="custom-nav-tbi-tab" data-toggle="tab" href="#custom-nav-tbi" role="tab" aria-controls="custom-nav-tbi"
													 aria-selected="false">TBI</a>
													<a class="nav-item nav-link" id="custom-nav-twk-tab" data-toggle="tab" href="#custom-nav-twk" role="tab" aria-controls="custom-nav-twk"
													 aria-selected="false">TWK</a>
													 <a class="nav-item nav-link" id="custom-nav-tiu-tab" data-toggle="tab" href="#custom-nav-tiu" role="tab" aria-controls="custom-nav-tiu"
													 aria-selected="false">TIU</a>
													 <a class="nav-item nav-link" id="custom-nav-tkp-tab" data-toggle="tab" href="#custom-nav-tkp" role="tab" aria-controls="custom-nav-tkp"
													 aria-selected="false">TKP</a>
												</div>
											</nav>
											<div class="tab-content pl-3 pt-2" id="nav-tabContent">
												<div class="tab-pane fade show active" id="custom-nav-tpa" role="tabpanel" aria-labelledby="custom-nav-tpa-tab">
													<p> <a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">Penalaran Bacaan</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">Persamaan Kosakata</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">Aritmatika Sosial</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TPA 4</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TPA 5</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TPA 6</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TPA 7</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TPA 8</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TPA 9</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TPA 10</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TPA 11</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TPA 12</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TPA 13</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TPA 14</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TPA 15</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TPA 16</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TPA 17</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TPA 18</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TPA 19</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TPA 20</a>
													</p>
												</div>
												<div class="tab-pane fade" id="custom-nav-tbi" role="tabpanel" aria-labelledby="custom-nav-tbi-tab">
													<p> <a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TBI 1</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TBI 2</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TBI 3</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TBI 4</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TBI 5</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TBI 6</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TBI 7</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TBI 8</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TBI 9</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TBI 10</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TBI 11</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TBI 12</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TBI 13</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TBI 14</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TBI 15</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TBI 16</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TBI 17</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TBI 18</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TBI 19</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TBI 20</a>
													</p>
												</div>
												<div class="tab-pane fade" id="custom-nav-twk" role="tabpanel" aria-labelledby="custom-nav-twk-tab">
													<p> <a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TWK 1</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TWK 2</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TWK 3</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TWK 4</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TWK 5</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TWK 6</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TWK 7</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TWK 8</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TWK 9</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TWK 10</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TWK 11</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TWK 12</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TWK 13</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TWK 14</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TWK 15</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TWK 16</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TWK 17</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TWK 18</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TWK 19</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TWK 20</a>
													</p>
												</div>
												<div class="tab-pane fade" id="custom-nav-tiu" role="tabpanel" aria-labelledby="custom-nav-tiu-tab">
													<p> <a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TIU 1</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TIU 2</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TIU 3</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TIU 4</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TIU 5</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TIU 6</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TIU 7</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TIU 8</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TIU 9</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TIU 10</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TIU 11</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TIU 12</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TIU 13</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TIU 14</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TIU 15</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TIU 16</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TIU 17</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TIU 18</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TIU 19</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TIU 20</a>
													</p>
												</div>
												<div class="tab-pane fade" id="custom-nav-tkp" role="tabpanel" aria-labelledby="custom-nav-tkp-tab">
													<p> <a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TKP 1</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TKP 2</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TKP 3</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TKP 4</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TKP 5</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TKP 6</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TKP 7</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TKP 8</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TKP 9</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TKP 10</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TKP 11</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TKP 12</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TKP 13</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TKP 14</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TKP 15</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TKP 16</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TKP 17</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TKP 18</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TKP 19</a>
														<a class="btn btn-outline-primary btn-lg btn-block" href="exam" role="button">TKP 20</a>
													</p>
												</div>
											</div>

										</div>
									</div>
								</div>
							</div>
							<!-- /# column -->
							<div><br><br><br><br><<br><br>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END PAGE CONTAINER-->

		</div>

		<!-- Jquery JS-->
		<script src="vendor/jquery-3.2.1.min.js"></script>
		<!-- Bootstrap JS-->
		<script src="vendor/bootstrap-4.1/popper.min.js"></script>
		<script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
		<!-- Vendor JS       -->
		<script src="vendor/slick/slick.min.js">
		</script>
		<script src="vendor/wow/wow.min.js"></script>
		<script src="vendor/animsition/animsition.min.js"></script>
		<script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
		</script>
		<script src="vendor/counter-up/jquery.waypoints.min.js"></script>
		<script src="vendor/counter-up/jquery.counterup.min.js">
		</script>
		<script src="vendor/circle-progress/circle-progress.min.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
		<script src="vendor/chartjs/Chart.bundle.min.js"></script>
		<script src="vendor/select2/select2.min.js">
		</script>

		<!-- Main JS-->
		<script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
