<!DOCTYPE html>
<html>
	<head>
		<?php require_once('layout/head.php'); ?>
	</head>
	
	<body class="bg-light">
		<?php echo var_dump($data);?>
		<div class="container-fluid">
			<div class="row bg-black">
                <p class="col-12 text-center display-4 text-primary">Dashboard</p>
            </div>
			<!-- End Header -->
<?php if ($kind == 'song') {?>
			<div class="row">
                <div class="col-lg-3">
                    <div class="bg-white border rounded p-3 mt-3">
                        <h3>Thêm bài hát</h3>
                        <hr>
                        <form action="?page=ad&k=song" method="post">
                            <div class="form-group">
                                <label>Tên bài hát</label>
                                <input class="form-control" type="text" name="name" placeholder="Tên Bài hát..." required>
                            </div>
                            <div class="form-group" >
                                <label>Ca sĩ</label>
                                <select class="form-control" name="singer">
                                    <option value="1">Andree</option>
                                    <option value="1">Andree</option>
                                    <option value="1">Andree</option>
                                    <option value="1">Andree</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Nhạc sĩ</label>
                                <select class="form-control" name="compser">
                                    <option value="1">Andree</option>
                                    <option value="1">Andree</option>
                                    <option value="1">Andree</option>
                                    <option value="1">Andree</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Link</label>
                                <input class="form-control" type="text" name="link" placeholder="Link..." required>
                            </div>
                            
                            <button class="btn btn-primary" type="submit">Thêm</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="bg-white border rounded p-3 mt-3">
                        <h3>Bài hát</h3>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tên</th>
                                    <th scope="col">Ca sĩ</th>
                                    <th scope="col">Nhạc sĩ</th>
                                    <th scope="col">Chỉnh sửa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Cho anh fuck em lần cuối</td>
                                    <td>Andree</td>
                                    <td>Andree</td>
                                    <td>
                                        <button class="btn btn-success">Chi tiết</button>
                                        <button class="btn btn-warning">Chỉnh sửa</button>
                                        <button class="btn btn-danger">Xóa</button>   
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Song -->
<?php 
} 
elseif ($kind == 'singer') {
?>
            <div class="row">
                <div class="col-lg-3">
                    <div class="bg-white border rounded p-3 mt-3">
                        <h3>Thêm ca sĩ</h3>
                        <hr>
                        <form>
                            <div class="form-group">
                                <label>Tên ca sĩ</label>
                                <input class="form-control" type="text" name="name" required>
                            </div>
                            <div class="form-group">
                                <label>Ảnh</label>
                                <input class="form-control" type="text" name="">
                            </div>
                            <div class="form-group">
                                <label>Thông tin:</label>
                                <input class="form-control" type="text" name="">
                            </div>
                            <button class="btn btn-primary" type="submit">Thêm</button>
                        </form>
                    </div>
                </div>

                <div class="col-lg-9">
                    <div class="bg-white border rounded p-3 mt-3">
                        <h3>Ca sĩ</h3>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tên</th>
                                    <th scope="col">Ảnh</th>
                                    <th scope="col">Tùy chọn</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Andree</td>
                                    <td>abcxyz.jpg</td>
                                    <td>
                                        <button class="btn btn-success">Chi tiết</button>
                                        <button class="btn btn-warning">Chỉnh sửa</button>
                                        <button class="btn btn-danger">Xóa</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Singer -->
<?php 
}
elseif ($kind == 'composer') {
?>
            <div class="row">
                <div class="col-lg-3">
                    <div class="bg-white border rounded p-3 mt-3">
                        <h3></h3>
                        <hr>
                        <form>
                            <div class="form-group">
                                <label>Tên nhạc sĩ</label>
                                <input class="form-control" type="" name="" >
                            </div>
                            <div class="form-group">
                                <label>Ảnh</label>
                                <input class="form-control" type="" name="" >
                            </div>
                            <div class="form-group">
                                <label>Thông tin</label>
                                <input class="form-control" type="" name="" >
                            </div>
                            <button class="btn btn-primary" type="submit">Thêm</button>
                        </form>
                    </div>
                </div>

                <div class="col-lg-9">
                    <div class="bg-white border rounded p-3 mt-3">
                        <h3>Nhạc sĩ</h3>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tên</th>
                                    <th scope="col">Ảnh</th>
                                    <th scope="col">Tùy chọn</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Andree</td>
                                    <td>abcxiz.jpg</td>
                                    <td>
                                        <button class="btn btn-success">Chi tiết</button>
                                        <button class="btn btn-warning">Chỉnh sửa</button>
                                        <button class="btn btn-danger">Xóa</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Composer -->
<?php 
}
else {
?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="bg-white border rounded p-3 m-3">
                        <h3>Tài khoản</h3>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">User</th>
                                    <th scope="col">Tên</th>
                                    <th scope="col">Ngày sinh</th>
                                    <th scope="col">Giới tính</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Tùy chọn</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Andree</td>
                                    <td>Andree right hand</td>
                                    <td>xx/yy/zzzz</td>
                                    <td>Male</td>
                                    <td>Andree@gmail.com</td>
                                    <td>
                                        <button class="btn btn-warning">Chỉnh sửa</button>
                                        <button class="btn btn-danger">Xóa</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Composer -->
<?php } ?>
		</div>

        <div class="container-fluid mt-3">
            <footer class="row bg-black">
                <p class="col-12 text-center text-white my-3"> © 2019 Eagle | Design by Eagle </p>
            </footer>
        </div>
        <!-- End Footer -->



		<?php require_once('layout/loadScript.php'); ?>
		
	</body>
</html>