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
						<section class="col-xl-9 py-3">					
							<article class="bg-white border rounded p-3 result-search">
									<h3 class="result-search-status">Danh sách Playlist của bạn:</h3>
									<hr>
									<ul class="result-search-list">
									<?php for($i = 0; $i < count($rs); $i++) { ?>
										<li class="result-search-item row">
											<a class="col-sm-3" href="?v=<?php echo $rs[$i]->getId(); ?>"><img src="<?php $tmp=$searchService->getSingerById($rs[$i]->getSinger_id()); echo $tmp->getImage(); ?>" class="result-search-image"></a>
											<div class="result-search-infor col-sm-9">
												<a class="result-search-link" href="?v=<?php echo $rs[$i]->getId(); ?>">
													<p class="text-ellipsis"><?php echo $rs[$i]->getNameSong(); ?> - <?php $tmp=$searchService->getSingerById($rs[$i]->getSinger_id()); echo $tmp->getName(); ?></p>
												</a>
												<div class="result-search-intro">
													<p class="mb-0">
														<?php $tmp=$searchService->getVoteSongById($rs[$i]->getId()); echo $tmp->getPoint(); ?> <i class="fas fa-star"></i>
													</p>
													<p class="mb-0 text-ellipsis">
														<?php $tmp=$searchService->getSingerById($rs[$i]->getSinger_id()); echo $tmp->getDetail(); ?>
													</p>
													<p class="composer text-ellipsis" style="display:none;">
														Chế Linh: ...
													</p>
												</div>
											</div>
										</li>
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