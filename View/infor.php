<!DOCTYPE html>
<html>
	<head>
		<?php require_once('layout/head.php'); ?>
	</head>
	
	<body class="bg-light">
		
		<?php
			//echo var_dump($data->getUserName_id());
			echo $kind;
		?>

		<div class="container-fluid">
			<?php require_once('layout/header.php'); ?>
			 <!-- End Header -->
			
			<div class="row">
				<?php require_once('layout/sidebar.php'); ?>
				<!-- End Siderbar -->
				
				<div class="col-xl-10 col-lg-9">
					<div class="row">
						<section class="col-xl-9">
							<article class="bg-white border rounded p-3 mt-3">
								<h3 class="text-center mb-3">Thông tin</h3>
								<hr>
								
								<div class="row">
									<div class="col-md-3">
										<img class="rounded-circle w-100" src="<?php if ($kind != 'user') echo $data->getImage(); else echo 'View/images/male.png'; ?>">
									</div>
									<div class="col-md-9 pl-5">
<?php if ($kind == 'user') {?>
										<div class="row">
											<h5 class="col-3">Tài khoản</h5>
											<p class="col-9">: <?php echo $data->getUsername_id(); ?></p>
										</div>
										<div class="row">
											<h5 class="col-3">Họ tên</h5>
											<p class="col-9">: <?php echo $data->getName(); ?></p>
										</div>
										<div class="row">
											<h5 class="col-3">Ngày sinh</h5>
											<p class="col-9">: <?php echo $data->getBirthday(); ?></p>
										</div>
										<div class="row">
											<h5 class="col-3">Email</h5>
											<p class="col-9">: <?php echo $data->getEmail(); ?></p>
										</div>
										<div class="row">
											<h5 class="col-3">Giới tính</h5>
											<p class="col-9">: <?php echo $data->getSex(); ?></p>
										</div>
<?php 
}
else {?>
										<div class="row">
											<h5 class="col-3">Họ tên</h5>
											<p class="col-9">: <?php echo $data->getName(); ?></p>
										</div>
										<div class="row">
											<h5 class="col-3">Thông tin</h5>
											<p class="col-9">: <?php echo $data->getDetail(); ?></p>
										</div>
<?php } ?>
									</div>
								</div>
							</article>
							<!-- Show Information -->

<?php if ($kind != 'user') {?>
							<article class="bg-white border rounded p-3 mt-3">
								<h3>Bài hát</h3>
								<hr>
								
							</article>
							<!-- End Introduction music -->
<?php } ?>

<?php if ($kind == 'user') {?>
							<article class="bg-white border rounded p-3 mt-3">
								<h3>Cập nhật thông tin</h3>
								<hr>
								<form class="" method="post">
									<div class="form-group form-row">
										<label class="col-md-3">Họ Tên:</label>
										<input class="col-md-4 form-control" type="text" name="name" 
											value="<?php echo $data->getUsername_id();?>">
									</div>
									
									<div class="form-group form-row">
										<label class="col-md-3">Ngày sinh:</label>
										<input class="col-md-4 form-control" type="date" name="birthday">
									</div>
									
									<div class="form-group form-row">
										<label class="col-md-3">Email:</label>
										<input class="col-md-4 form-control" type="email" name="email"
											value="<?php echo $data->getEmail();?>">
									</div>
									
									<div class="form-group form-row">
										<label class="col-md-3">Giới tính:</label>
										<select class="col-md-4 form-control" name="sex">
											<option value="male" 
												<?php 
													if (!$data->getSex()) {
														echo "selected";
													} else {
												?>
											>Male</option>
											
											<option value="female" 
												<?php echo "selected";}?>
											>Female</option>
										</select>
									</div>
									<input class="btn btn-primary" type="submit" value="Cập nhật">
								</form>
							</article>
							<!-- End Edit Information -->
							
							<article class="bg-white border rounded p-3 mt-3">
								<h3>Đổi mật khẩu</h3>
								<hr>
								<form class="" method="post">
									<div class="form-group form-row">
										<label class="col-md-3">Mật khẩu:</label>
										<input class="col-md-4 form-control" type="password" name="password" placeholder="Mật khẩu..." required>
									</div>
									<div class="form-group form-row">
										<label class="col-md-3">Mật khẩu mới:</label>
										<input class="col-md-4 form-control" type="password" name="newPassword" placeholder="Mật khẩu mới..." required>
									</div>
									<div class="form-group form-row">
										<label class="col-md-3">Nhập lại mật khẩu:</label>
										<input class="col-md-4 form-control" type="password" name="againPassword" placeholder="Mật khẩu mới..." required>
									</div>
									
									<input class="btn btn-primary" type="submit" value="Đổi mật khẩu">
								</form>
							</article>
							<!-- End Edit Password -->
<?php } ?>
						</section>
						<!-- End Content -->
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