<!DOCTYPE html>
<html>
	<head>
		<?php require_once('layout/head.php'); ?>
	</head>
	
	<body class="bg-light">
		
	<?php 
		require_once SITE_ROOT."/Model/homeModel.php";
		$model = new homeModel();
		$arr = $model->getTop5();
	?>

		<div class="container-fluid">
			<?php require_once('layout/header.php'); ?>
			<!-- End Header -->

			<div class="row">
				<?php require_once('layout/sidebar.php'); ?>
				<!-- End Siderbar -->
				
				<div class="col-xl-10 col-lg-9">
					<div class="row">
						<section class="col-xl-8 py-3">							
							<div id="carouselExampleInterval" class="carousel slide bg-white border rounded" data-ride="carousel">
							  <div class="carousel-inner">

									<div class="carousel-item active" data-interval="10000">
										<a href="?v=4"><img src="View/images/Album/BongDangThienThan.JPG" class="d-block w-100" alt="..."></a>
									</div>
									
									<div class="carousel-item" data-interval="2000">
										<a href="?v=21"><img src="View/images/Album/KhiGiacMoVe.JPG" class="d-block w-100" alt="..."></a>
									</div>
									
									<div class="carousel-item">
										<a href="?v=16"><img src="View/images/Album/MotThoiDaXa.JPG" class="d-block w-100" alt="..."></a>
									</div>

									<div class="carousel-item">
										<a href="?v=11"><img src="View/images/Album/TinhThoiXotXa.JPG" class="d-block w-100" alt="..."></a>
									</div>

							  </div>
							  
							  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							  </a>
							  
							  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							  </a>
							</div>
							<!-- End Slide -->
							
							<article class="mt-3 row justify-content-around bg-white">
								
								<div class="col-12 mt-2">
									<h3>Bài hát mới nhất</h3>
									<hr>
								</div>
								
								<?php 
									$songArr = $model->getSong(); 
									for ($i = 0; $i <= 5; $i++) {
								?>
								
								<div class="col-lg-4 col-md-6">
									<a class="card m-2" href="?v=<?php echo $songArr[$i]->getSong_id(); ?>">
									  <img src="<?php echo $songArr[$i]->getImageSinger(); ?>" class="card-img-top" alt="..." style="width:200px; heigh:150px;">
									  <div class="card-body">
										<h5 class="card-title"><?php echo $songArr[$i]->getNameSong(); ?></h5>
										<p class="card-text"><?php echo $songArr[$i]->getSinger(); ?></p>
									  </div>
									</a>
								</div>

									<?php } ?>
							
							</article>
							<!-- New video -->
							
							<article class="mt-3 row justify-content-around bg-white" style="display:none;">
								
								<div class="col-12 mt-2">
									<h3>Giới thiệu</h3>
									<hr>
								</div>
								
								<div class="col-lg-4 col-md-6">
									<a class="card m-2" href="">
									  <img src="View/images/TaylorSwift-Red.jpg" class="card-img-top" alt="...">
									  <div class="card-body">
										<h5 class="card-title">Red - Taylor Swift</h5>
										<p class="card-text">Taylor Swift</p>
									  </div>
									</a>
								</div>
								
								<div class="col-lg-4 col-md-6">
									<a class="card m-2" href="">
									  <img src="View/images/TaylorSwift-Red.jpg" class="card-img-top" alt="...">
									  <div class="card-body">
										<h5 class="card-title">Red - Taylor Swift</h5>
										<p class="card-text">Taylor Swift</p>
									  </div>
									</a>
								</div>

								<div class="col-lg-4 col-md-6">
									<a class="card m-2" href="">
									  <img src="View/images/TaylorSwift-Red.jpg" class="card-img-top" alt="...">
									  <div class="card-body">
										<h5 class="card-title">Red - Taylor Swift</h5>
										<p class="card-text">Taylor Swift</p>
									  </div>
									</a>
								</div>
								
								<div class="col-lg-4 col-md-6">
									<a class="card m-2" href="">
									  <img src="View/images/TaylorSwift-Red.jpg" class="card-img-top" alt="...">
									  <div class="card-body">
										<h5 class="card-title">Red - Taylor Swift</h5>
										<p class="card-text">Taylor Swift</p>
									  </div>
									</a>
								</div>
								
								<div class="col-lg-4 col-md-6">
									<a class="card m-2" href="">
									  <img src="View/images/TaylorSwift-Red.jpg" class="card-img-top" alt="...">
									  <div class="card-body">
										<h5 class="card-title">Red - Taylor Swift</h5>
										<p class="card-text">Taylor Swift</p>
									  </div>
									</a>
								</div>
								
								<div class="col-lg-4 col-md-6">
									<a class="card m-2" href="">
									  <img src="View/images/TaylorSwift-Red.jpg" class="card-img-top" alt="...">
									  <div class="card-body">
										<h5 class="card-title">Red - Taylor Swift</h5>
										<p class="card-text">Taylor Swift</p>
									  </div>
									</a>
								</div>
							
							</article>
							<!-- Intro video -->
							
						</section>
						<!-- End Content -->
						<aside class="col-xl-4">
							<div class=" my-3 border border-dark rounded bg-white">
								<h3 class="text-center">Top tuần</h3>
								<table class="table rank">
									<tbody>
									<?php for($i = 0; $i <= 4; $i++) { ?>
										<tr>
											<td class="align-middle" scope="row"><b><?php echo $arr[$i]->getTop(); ?></b></td>
											<td>
												<p class="name-song"><a href="?v=<?php echo $arr[$i]->getSong_id(); ?>"><?php echo $arr[$i]->getNameSong(); ?></a></p>
												<p class="singer-song"><a href="?page=infor&singer=<?php echo $arr[$i]->getSinger_id(); ?>"><?php echo $arr[$i]->getSinger(); ?></a></p>
											</td>
											<td class="align-bottom count-view"><?php echo number_format($arr[$i]->getPoint(),1); ?> <i class="fas fa-star"></i></td>
										</tr>
									<?php } ?>
									</tbody>
								</table>
							</div>
							
							<div class="my-3 border border-dark rounded bg-white">
								<h3 class="text-center">Top tháng</h3>
								<table class="table rank">
									<tbody>
									<?php for($i = 0; $i <= 4; $i++) { ?>
										<tr>
											<td class="align-middle" scope="row"><b><?php echo $arr[$i]->getTop(); ?></b></td>
											<td>
												<p class="name-song"><a href="?v=<?php echo $arr[$i]->getSong_id(); ?>"><?php echo $arr[$i]->getNameSong(); ?></a></p>
												<p class="singer-song"><a href="?page=infor&singer=<?php echo $arr[$i]->getSinger_id(); ?>"><?php echo $arr[$i]->getSinger(); ?></a></p>
											</td>
											<td class="align-bottom count-view"><?php echo number_format($arr[$i]->getPoint(),1); ?> <i class="fas fa-star"></i></td>
										</tr>
									<?php } ?>
									</tbody>
								</table>
							</div>
						</aside>
						<!-- End aside -->
					</div>
					<!-- End Main Content -->
					
					<div class="row pt-3">					
						<?php require_once('layout/footer.php'); ?>
					</div>
					<!-- End footer -->
					
				</div>
			</div>
		</div>


		<?php require_once('layout/loadScript.php'); ?>
		
	</body>
</html>