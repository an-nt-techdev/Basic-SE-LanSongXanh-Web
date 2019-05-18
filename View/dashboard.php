<!DOCTYPE html>
<html>
	<head>
		<?php require_once('layout/head.php'); ?>
	</head>
	
	<body class="bg-light">
        <div class="container-fluid">
			<div class="row bg-black">
                <p class="col-lg-12 text-center display-4 text-primary">Dashboard</p>
            </div>
			<!-- End Header -->

            <div class="row">
                <div class="col-lg-12 bg-primary">
                    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                        <div class="collapse navbar-collapse" id="navbarText">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item <?php if ($kind == 'song') echo 'active';?>">
                                    <a class="nav-link" href="?page=ad"><h5 class="m-0">Song</h5></a>
                                </li>
                                <li class="nav-item <?php if ($kind == 'singer') echo 'active';?>">
                                    <a class="nav-link" href="?page=ad&k=singer"><h5 class="m-0">Singer</h5></a>
                                </li>
                                <li class="nav-item <?php if ($kind == 'composer') echo 'active';?>">
                                    <a class="nav-link" href="?page=ad&k=composer"><h5 class="m-0">Composer</h5></a>
                                </li>
                                <li class="nav-item <?php if ($kind == 'account') echo 'active';?>">
                                    <a class="nav-link" href="?page=ad&k=account"><h5 class="m-0">Account</h5></a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- End Navbar -->
        </div>

		<div class="container-fluid">
<?php 
    echo var_dump($data[0]);
    if ($kind == 'account') {?>
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
            <!-- User -->
<?php 
} 
elseif ($kind == 'singer') {
?>
            <div class="row">
                <div class="col-lg-3">
                    <div class="bg-white border rounded p-3 mt-3">
                        <h3>Thêm ca sĩ</h3>
                        <hr>
                        <form action="?page=ad&k=singer" method="post">
                            <div class="form-group">
                                <label>Tên ca sĩ</label>
                                <input class="form-control" type="text" name="name" required>
                            </div>
                            <div class="form-group">
                                <label>Ảnh</label>
                                <input class="form-control" type="text" name="linkImage">
                            </div>
                            <div class="form-group">
                                <label>Thông tin:</label>
                                <textarea class="form-control" name=""></textarea>
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
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Nhạc sĩ</label>
                                <select class="form-control" name="composer">
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