<!DOCTYPE html>
<html>
	<head>
		<?php require_once('layout/head.php'); ?>
	</head>
	
	<body class="bg-light">
		
		<div class="container-fluid">
			<div class="row bg-black">
                <p class="col-12 text-center display-3 text-primary">Dashboard</p>
            </div>
			<!-- End Header -->

			<div class="row">
                <div class="col-12">
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

            <div class="row">
                <div class="col-12">
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

            <div class="row">
                <div class="col-12">
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

            <div class="row">
                <div class="col-12">
                    <div class="bg-white border rounded p-3 my-3">
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
		</div>


		<?php require_once('layout/loadScript.php'); ?>
		
	</body>
</html>