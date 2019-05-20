<!DOCTYPE html>
<html>
	<head>
		<?php require_once('layout/head.php'); ?>
	</head>
	
	<body class="bg-light">
		
	<?php
		require_once SITE_ROOT."/Model/WatchModel.php";
		$model = new WatchModel();
	?>

		<div class="container-fluid">
			<?php require_once('layout/header.php'); ?>
			<!-- End Header -->
			
			<div class="row">
				<?php require_once('layout/sidebar.php'); ?>
				<!-- End Siderbar -->
				
				<?php 
					$s = $model->getSongDetail($idSong);
				?> 

				<div class="col-xl-10 col-lg-9 pt-3">
					<div class="video-media w-75 m-auto">
						<iframe class="w-100 h-100"src="https://www.youtube.com/embed/<?php echo $s->getLink(); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
					
					<div class="video-infor mt-4 p-3 border rounded bg-white">
					
						<div class="video-header row justify-content-between">
							<h3 class="col-md-6 video-title"><?php echo $s->getNameSong(); ?> - <?php echo $s->getSinger(); ?></h3>
							<div class="col-md-4 video-vote">
								<div class="">
									<h4>Điểm hiện tại: <?php echo number_format($s->getPoint(),1); ?> <i class="fas fa-star"></i></h4>
									<h4 class="vote">Bình chọn: 
										<i class="fas fa-star star-1"><span class="sr-only">1</span></i>
										<i class="fas fa-star star-2"><span class="sr-only">2</span></i>
										<i class="far fa-star star-3"><span class="sr-only">3</span></i>
										<i class="far fa-star star-4"><span class="sr-only">4</span></i>
										<i class="far fa-star star-5"><span class="sr-only">5</span></i>
									</h4>
								</div>
							</div>
						</div> 
						
						<hr style="margin-top: 1em;">
						
						<p class="video-intro">
							<?php echo $s->getSingerDetail(); ?><br>
						</p>
					</div>					
					<!-- End Media -->
					
					<div class="row justify-content-around">
						<div class="col-12 mt-5">
							<h3>Có thể bạn muốn nghe</h3>
							<hr>
						</div>
						<?php 
							$l = $model->getSong();
							for ($i = 0; $i <= 7; $i++) {
						?>
							<div class=" col-xl-3 col-lg-4 col-md-6">
								<a class="card m-2" href="?v=<?php echo $l[$i]->getSong_id(); ?>">
									<img src="<?php echo $l[$i]->getImageSinger(); ?>" class="card-img-top" alt="...">
									<div class="card-body">
									<h5 class="card-title"><?php echo $l[$i]->getNameSong(); ?></h5>
									<p class="card-text"><?php echo $l[$i]->getSinger(); ?></p>
									</div>
								</a>
							</div>
							<?php } ?>
					</div>
					<!-- Next video -->
					
						<div class="row pt-3">
							<?php require_once('layout/footer.php'); ?>
						</div>
					</div>
					<!-- End footer -->
					
				</div>
			</div>
		</div>
		
		<?php require_once('layout/loadScript.php'); ?>
		
		<script src="View/js/script.js"></script>
		
	</body>
</html>