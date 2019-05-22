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
                                    <a class="nav-link" href="?page=ad"><h5 class="m-0">Bài hát</h5></a>
                                </li>
                                <li class="nav-item <?php if ($kind == 'singer') echo 'active';?>">
                                    <a class="nav-link" href="?page=ad&k=singer"><h5 class="m-0">Ca sĩ</h5></a>
                                </li>
                                <li class="nav-item <?php if ($kind == 'composer') echo 'active';?>">
                                    <a class="nav-link" href="?page=ad&k=composer"><h5 class="m-0">Nhạc sĩ</h5></a>
                                </li>
                                <li class="nav-item <?php if ($kind == 'account') echo 'active';?>">
                                    <a class="nav-link" href="?page=ad&k=account"><h5 class="m-0">Tài khoản</h5></a>
                                </li>
                            </ul>

                            <!-- <form class="form-inline my-2 my-lg-0" action="?page=ad&statistic=week"> -->
                                <a class="btn btn-danger my-2 my-0 mx-1" href="?page=ad&statistic=month">Monthly</a>
                                <a class="btn btn-danger my-2 my-0 mx-1" href="?page=ad&statistic=week">Weekly</a>
                            <!--    <a class="btn btn-danger my-2 my-0 mx-1" href=".">Log Out</a>
                             </form> -->
                        </div>
                    </nav>
                </div>
            </div>
            <!-- End Navbar -->
        </div>

		<div class="container-fluid">
<?php /* Account */ if ($kind == 'account') {?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="bg-white border rounded p-3 m-3">
                        <h3>Tài khoản</h3>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Ranking</th>
                                    <!-- <th scope="col">Ngày sinh</th>
                                    <th scope="col">Giới tính</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Tùy chọn</th> -->
                                </tr>
                            </thead>
                            <tbody>
    <?php foreach ($listAccount as $account) { ?>
                                <tr>
                                    <th scope="row"></th>
                                    <td><?php echo $account->getUsername(); ?></td>
                                    <td><?php echo $account->getRanking(); ?></td>
                                    <!-- <td>
                                        <button class="btn btn-warning">Chỉnh sửa</button>
                                        <button class="btn btn-danger">Xóa</button>
                                    </td> -->
                                </tr>
    <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Account -->
<?php } /* Singer */ elseif ($kind == 'singer') { ?>
            <div class="row">
                <div class="col-lg-3">
                    <div class="bg-white border rounded p-3 mt-3">
                        <h3>Thêm ca sĩ</h3>
                        <hr>
                        <form action="?page=ad&k=singer&a=true" method="post">
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
                                <textarea class="form-control" name="detail"></textarea>
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
    <?php foreach ($listSinger as $singer) { ?>
                                <tr>
                                    <th scope="row"><?php echo $singer->getId(); ?></th>
                                    <td><?php echo $singer->getName(); ?></td>
                                    <td><?php echo $singer->getImage(); ?></td>
                                    <td>
                                        <button class="btn btn-success" type="button" data-toggle="modal" data-target="#ModalSinger<?php echo $singer->getId(); ?>">Chi tiết</button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="ModalSinger<?php echo $singer->getId(); ?>" tabindex="-1" role="dialog" aria-labelledby="ModalLabelSinger<?php echo $singer->getId(); ?>" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="ModalLabelSinger<?php echo $singer->getId(); ?>">Thông tin ca sĩ</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row justify-content-center">
                                                            <img class="col-6" alt="<?php echo $singer->getName(); ?>" 
                                                                src="<?php echo str_replace('/View', 'View', $singer->getImage()); ?>">
                                                        </div>
                                                        <div class="row m-3">
                                                            <h5 class="col-3">Tên</h5>
                                                            <p class="col-9"><?php echo $singer->getName(); ?></p>
                                                        </div>
                                                        <div class="row m-3">
                                                            <h5 class="col-3">Thông tin</h5>
                                                            <p class="col-9"><?php echo $singer->getDetail(); ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <button class="btn btn-warning" type="button" data-toggle="modal" data-target="#EditSinger<?php echo $singer->getId(); ?>">Chỉnh sửa</button>

                                        <!-- Modal edit -->
                                        <div class="modal fade" id="EditSinger<?php echo $singer->getId(); ?>" tabindex="-1" role="dialog" aria-labelledby="EditLabelSinger<?php echo $singer->getId(); ?>" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <form action="?page=ad&k=singer&u=true" method="post">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" name="" value="<?php echo $singer->getId(); ?>">Cập nhật ca sĩ</h5>
                                                            <input type="hidden" name="id" value="<?php echo $singer->getId(); ?>">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="form-group form-row m-3">
                                                                <label class="col-3">Tên</label>
                                                                <input class="col-9 form-control" name="name" value="<?php echo $singer->getName(); ?>">
                                                            </div>
                                                            <div class="form-group form-row m-3">
                                                                <label class="col-3">Link Ảnh</label>
                                                                <input class="col-9 form-control" name="linkImage" value="<?php echo $singer->getImage(); ?>">
                                                            </div>
                                                            <div class="form-group form-row m-3">
                                                                <label class="col-3">Thông tin</label>
                                                                <textarea class="col-9 form-control" name="detail"><?php echo $singer->getDetail(); ?></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-danger" name="id" value="<?php echo $singer->getId(); ?>">Cập nhật</button>
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                       
                                    </td>
                                </tr>
    <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Singer -->
<?php } /* Composer */ else if ($kind == 'composer') { ?>
            <div class="row">
                <div class="col-lg-3">
                    <div class="bg-white border rounded p-3 mt-3">
                        <h3>Thêm nhạc sĩ</h3>
                        <hr>
                        <form action="?page=ad&k=composer&a=true" method="post">
                            <div class="form-group">
                                <label>Tên nhạc sĩ</label>
                                <input class="form-control" type="text" name="name" required>
                            </div>
                            <div class="form-group">
                                <label>Ảnh</label>
                                <input class="form-control" type="text" name="linkImage">
                            </div>
                            <div class="form-group">
                                <label>Thông tin:</label>
                                <textarea class="form-control" name="detail"></textarea>
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
    <?php foreach ($listComposer as $composer) { ?>
                                <tr>
                                    <th scope="row"><?php echo $composer->getId(); ?></th>
                                    <td><?php echo $composer->getName(); ?></td>
                                    <td><?php echo $composer->getImage(); ?></td>
                                    <td>
                                        <button class="btn btn-success" type="button" data-toggle="modal" data-target="#ModalComposer<?php echo $composer->getId(); ?>">Chi tiết</button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="ModalComposer<?php echo $composer->getId(); ?>" tabindex="-1" role="dialog" aria-labelledby="ModalLabelComposer<?php echo $composer->getId(); ?>" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="ModalLabelComposer<?php echo $composer->getId(); ?>">Thông tin nhạc sĩ</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row justify-content-center">
                                                            <img class="col-7" alt="<?php echo $composer->getName(); ?>" 
                                                                src="<?php echo str_replace('/View', 'View', $composer->getImage()); ?>">
                                                        </div>
                                                        <div class="row m-3">
                                                            <h5 class="col-3">Tên</h5>
                                                            <p class="col-9"><?php echo $composer->getName(); ?></p>
                                                        </div>
                                                        <div class="row m-3">
                                                            <h5 class="col-3">Thông tin</h5>
                                                            <p class="col-9"><?php echo $composer->getDetail(); ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="btn btn-warning" type="button" data-toggle="modal" data-target="#EditComposer<?php echo $composer->getId(); ?>">Chỉnh sửa</button>

                                        <!-- Modal Edit -->
                                        <div class="modal fade" id="EditComposer<?php echo $composer->getId(); ?>" tabindex="-1" role="dialog" aria-labelledby="EditLabelComposer<?php echo $composer->getId(); ?>" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <form action="?page=ad&k=composer&u=true" method="post">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" name="" value="<?php echo $composer->getId(); ?>">Cập nhật nhạc sĩ</h5>
                                                            <input type="hidden" name="id" value="<?php echo $composer->getId(); ?>">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="form-gorup form-row m-3">
                                                                <label class="col-3">Tên</label>
                                                                <input class="col-9 form-control" name="name" value="<?php echo $composer->getName(); ?>">
                                                            </div>
                                                            <div class="form-gorup form-row m-3">
                                                                <label class="col-3">Link Image</label>
                                                                <input class="col-9 form-control" name="linkImage" value="<?php echo $composer->getImage(); ?>">
                                                            </div>
                                                            <div class="form-gorup form-row m-3">
                                                                <label class="col-3">Thông tin</label>
                                                                <textarea type="text" class="col-9 form-control" name="detail"><?php echo $composer->getDetail(); ?></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-danger" name="id" value="<?php echo $composer->getId();?>">Cập nhật</button>
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                    </td>
                                </tr>
    <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Composer -->
<?php } /* Song */ else { ?>
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
    <?php foreach ($listSinger as $singer) { ?>
                                    <option value="<?php echo $singer->getId()?>">
                                        <?php echo $singer->getName();?>
                                    </option>
    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Nhạc sĩ</label>
                                <select class="form-control" name="composer">
    <?php foreach ($listComposer as $composer) { ?>
                                    <option value="<?php echo $composer->getId()?>">
                                        <?php echo $composer->getName();?>
                                    </option>
    <?php } ?>
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
                                    <th scope="col">Tên bài hát</th>
                                    <th scope="col">Ca sĩ</th>
                                    <th scope="col">Nhạc sĩ</th>
                                    <th scope="col">Chỉnh sửa</th>
                                </tr>
                            </thead>
                            <tbody>
    <?php 
        require_once SITE_ROOT."/Services/ArtistService.php";
        $ser = new ArtistService();
        foreach ($listSong as $song) { 
    ?>
                                <tr>
                                    <th><?php echo $song->getId(); ?></th>
                                    <td><?php echo $song->getNameSong(); ?></td>
                                    <td><?php $tmp = $ser->getSingerById($song->getSinger_id()); echo $tmp->getName(); ?></td>
                                    <td><?php $tmp = $ser->getComposerById($song->getComposer_id()); echo $tmp->getName(); ?></td>
                                    <td>
                                        <!--<button class="btn btn-warning">Chỉnh sửa</button>-->
                                        <a class="btn btn-danger" 
                                            href="?page=ad&removeId=<?php echo $song->getId(); ?>">
                                            Xóa
                                        </a>
                                    </td>
                                </tr>
    <?php } ?>
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