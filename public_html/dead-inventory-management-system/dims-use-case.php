<?php
$Page='';
$Title='Dead Inventory Management System';
$metaDescription='Detailed use cases of starting a tech company that served enterprise clients ';
?>

<!DOCTYPE html>
<html lang="zxx">
<head>
    <?php include_once('../include/head.php'); ?>
</head>
	<body>

		<!-- Wrapper -->
		<div class="lx-wrapper">
			<!-- Loader -->
			<div class="lx-loader">
                <?php include_once('../include/loader.php'); ?>
			</div>
			<!-- Header -->
			<div class="lx-header lx-header-work">
				<div class="lx-header-logo">
                    <?php include_once('../include/home.php') ?>
				</div>
				<div class="lx-header-menu-mobile">
					<a href="javascript:;"><img alt="alternative title" src="../images/menu.png" /></a>
					<div class="lx-main-menu-mobile">
						<i class="material-icons">close</i>
						<div class="lx-main-menu-mobile-content">
                            <?php include_once('../include/footer.php') ?>
						</div>
					</div>
				</div>
			</div>
			<!-- Main -->
			<div class="lx-main lx-bg-none">
                <div class="row d-background">
				<div class="lx-main-content lx-main-content-work ">
                    <?php include_once('dims-intro.php') ?>
				</div>
                </div>
				<div class="lx-single-work-body">
					<div class="lx-single-work-body-content">
						<div class="lx-prev-work">
							<span>Previous work</span>
							<a href="#">
								<div class="lx-work-thumbnail">
									<img alt="alternative title" src="http://placehold.it/1650x1100" />
									<div class="lx-shadow-thumbnail"></div>
									<h4>Fryerning Hall Barn</h4>
								</div>
							</a>
						</div>
						<div class="lx-next-work">
							<span>Next work</span>
							<a href="#">
								<div class="lx-work-thumbnail">
									<img alt="alternative title" src="http://placehold.it/1650x1100" />
									<h4>Working at Houzz</h4>
								</div>
							</a>
						</div>
						<div class="lx-single-work-title">
							<h2>Introduction</h2>
							<p>Built a fully staffed<br />global serving<br /> technology company</p>
						</div>
						<div class="lx-single-work-body-text">
                            <?php include_once('dims-project.php') ?>
                            <?php include_once('dims-bullets.php') ?>



							<div class="lx-clear-fix"></div>
						</div>
					</div>				
				</div>
			</div>
			<!-- Footer -->
			<div class="lx-footer">
				<div class="lx-footer-content">
                    <?php include_once('../include/footer.php') ?>
				</div>					
			</div>
		</div>

		<!-- JQuery -->
		<script src="../js/jquery-1.12.4.min.js"></script>
		<!-- Swipe Script -->
		<script src="../js/hammer.min.js"></script>
		<!-- Main Script -->
		<script src="../js/script.js"></script>
	</body>
</html>