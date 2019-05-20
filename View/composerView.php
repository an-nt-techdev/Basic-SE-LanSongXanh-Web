<!DOCTYPE html>
<html>
	<head>
		<?php require_once('layout/head.php'); ?>
	</head>
	
	<body class="bg-light">
		
		<div class="container-fluid">
			<?php require_once('layout/header.php'); ?>
			 <!-- End Header -->
			
			<div class="row">
				<?php require_once('layout/sidebar.php'); ?>
				<!-- End Siderbar -->
				
				<div class="col-xl-10 col-lg-9">
					<div class="row">
						<section class="col-xl-12 py-3">					
							<p class="search-title" style="display:none;"></p>
							<article class="bg-white border rounded p-3 result-search">
									<h2 class="">Danh sách nhạc sĩ: </h2>
									<hr>
									<ul class="result-search-list">
									<?php foreach($composer as $c) { ?>
										<li class="result-search-item row">
											<a class="col-sm-3" href="?page=infor&composer=<?php echo $c->getId(); ?>"><img src="<?php echo $c->getImage(); ?>" class="result-search-image"></a>
											<div class="result-search-infor col-sm-9">
												<a class="result-search-link" href="?page=infor&composer=<?php echo $c->getId(); ?>">
													<p class="text-ellipsis"><?php echo $c->getName(); ?></p>
												</a>
												<div class="result-search-intro">
													<p class="mb-0 overflow">
                                                        <?php echo $c->getDetail(); ?>
													</p>
												</div>
											</div>
										</li>
                                        <hr>
									<?php } ?>
									</ul>
							</article>
							
						</section>
						<!-- End Content -->
						
						<aside class="col-xl-3">
						
						</aside>
						<!-- End aside -->
					</div>
					<!-- End Main Content -->
					
					<div class="row">					
						<?php require_once('layout/footer.php'); ?>
					</div>
					<!-- End footer -->
					
				</div>
			</div>
		</div>
		
		
		<?php require_once('layout/loadScript.php'); ?>
		
	</body>
</html>