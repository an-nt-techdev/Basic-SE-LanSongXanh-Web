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
						<section class="col-xl-6 py-3">
							<article class="bg-white border rounded p-3">
								<h3 class="text-center">Top trong tuần</h3>
								
								<table class="table table-hover table-striped rank">
									<thead>
										<th scope="col" style="text-align:center;">Hạng</th>
										<th scope="col">Tên bài hát</th>
										<th scope="col" style="text-align:center;">Điểm hiện tại</th>
									</thead>
									<tbody>
									<?php 
										require_once SITE_ROOT.'/Model/homeModel.php'; 
										$model = new homeModel();
										$l = $model->getTop10();
										for ($i = 0; $i <= 9; $i++) {
										?>
										<tr>
											<th scope="row" style="text-align:center;"><?php echo $l[$i]->getTop(); ?></th>
											<td>
												<p class="name-song"><a href="?v=<?php echo $l[$i]->getSong_id(); ?>"><?php echo $l[$i]->getNameSong(); ?></a></p>
												<p class="singer-song"><a href="?page=infor&singer=<?php echo $l[$i]->getSinger_id(); ?>"><?php echo $l[$i]->getSinger(); ?></a></p>
											</td>
											<td class="score" style="text-align:center;"><?php echo number_format($l[$i]->getPoint(),2); ?> <i class="fas fa-star"></i></td>
										</tr>
										<?php } ?>
									</tbody>
								</table>
							</article>
						</section>
						<!-- End Top Week -->
						
						<section class="col-xl-6 py-3">
							<article class="bg-white border rounded p-3">
								<h3 class="text-center">Top trong tháng</h3>
								<table class="table table-hover table-striped rank">
									<thead>
										<th scope="col" style="text-align:center;">Hạng</th>
										<th scope="col">Tên bài hát</th>
										<th scope="col" style="text-align:center;">Điểm hiện tại</th>
									</thead>
									<tbody>
									<?php 
										require_once SITE_ROOT.'/Model/homeModel.php'; 
										$model = new homeModel();
										$l = $model->getTop10();
										for ($i = 10; $i <= 19; $i++) {
										?>
										<tr>
											<th scope="row" style="text-align:center;"><?php echo $l[$i]->getTop(); ?></th>
											<td>
												<p class="name-song"><a href="?v=<?php echo $l[$i]->getSong_id(); ?>"><?php echo $l[$i]->getNameSong(); ?></a></p>
												<p class="singer-song"><a href="?page=infor&singer=<?php echo $l[$i]->getSinger_id(); ?>"><?php echo $l[$i]->getSinger(); ?></a></p>
											</td>
											<td class="score" style="text-align:center;"><?php echo number_format($l[$i]->getPoint(),2); ?> <i class="fas fa-star"></i></td>
										</tr>
										<?php } ?>
									</tbody>
								</table>
							</article>
						</section>
						<!-- End Top Month -->
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