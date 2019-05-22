<nav class="col-xl-2 col-lg-3 navbar navbar-expand-lg navbar-dark bg-black">
    <div class="collapse navbar-collapse align-self-start position-fixed" id="navbarSupportedContent">
        <ul class="navbar-nav flex-column bg-black">
            <li class="nav-item py-1">
                <a class="nav-link <?php if(isset($p))if($p=='home') echo 'active'?>" href="."><i class="fas fa-home mr-3"></i>Trang chủ</a>
            </li>
            <li class="nav-item py-1">
                <a href="?page=rank" class="nav-link <?php if(isset($_GET['page']))if($_GET['page']=='rank')echo 'active' ?>"><i class="far fa-list-alt mr-3"></i>Bảng xếp hạng</a>
            </li>
            <li class="nav-item py-1">
                <a class="nav-link <?php if(isset($_GET['page']))if($_GET['page']=='singer')echo 'active' ?>" href="?page=singer"><i class="fas fa-user-friends mr-3"></i>Ca sĩ</a>
            </li>
            <li class="nav-item py-1">
                <a class="nav-link <?php if(isset($_GET['page']))if($_GET['page']=='composer')echo 'active' ?>" href="?page=composer"><i class="fas fa-users mr-3"></i>Nhạc sĩ</a>
            </li>
<!--
            <li class="nav-item py-1">
                <a class="nav-link" href="?page=contact"><i class="fas fa-phone mr-3"></i>Liên hệ</a>
            </li>
-->

<?php if (isset($_SESSION['user'])) { ?>

            <li class="nav-item py-1">
                <h5 class="text-primary">Tài khoản: <span id="nameUser"><?php echo $_SESSION['user']; ?></span></h5>
            </li>
            <li class="nav-item py-1">
                <a class="nav-link <?php if(isset($_GET['page']))if($_GET['page']=='infor')echo 'active' ?>" href="?page=infor&user=<?php echo $_SESSION['user']; ?>"><i class="fas fa-user mr-3"></i>Thông tin cá nhân</a>
            </li>
            <!--
            <li class="nav-item py-1">
                <a class="nav-link" href=""><i class="fas fa-music mr-3"></i>Playlist</a>
            </li>
            -->
        <?php if ($_SESSION['user'] == 'admin') { ?>
            <li class="nav-item py-1">
                <a class="nav-link" href="?page=ad"><i class="fas fa-tachometer-alt mr-3"></i>Dashboard</a>
            </li>
        <?php } ?>
            <li class="nav-item py-1">
                <a class="nav-link" href="?signOut=1"><i class="fas fa-sign-out-alt mr-3"></i>Đăng xuất</a>
            </li>

<?php } else { ?>

            <li class="nav-item py-1">
                <h5 class="text-primary">Bạn chưa đăng nhập</h5>
            </li>
            <li class="nav-item py-1">
                <!-- Button trigger modal Sign In -->
                <button type="button" class="btn btn-primary w-100" data-toggle="modal" data-target="#signInModal">
                    Đăng nhập
                </button>
            </li>
            <li class="nav-item py-1">
                <!-- Button trigger modal Create New Account -->
                <button type="button" class="btn btn-primary w-100" data-toggle="modal" data-target="#newAccountModal">
                        Đăng ký
                </button>
            </li>
    <?php } ?>
        </ul>
    </div>


<?php if (!isset($_SESSION['user'])) { ?>
    <!-- Modal Sign In -->
    <div class="modal fade" id="signInModal" tabindex="-1" role="dialog" aria-labelledby="signInModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="signInModalLabel">Đăng nhập</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <form action="?signin=1" method="POST" >
                            <div class="form-group">
                                <label for="">Tên đăng nhập</label>
                                <input class="form-control" type="text" name="user" required>
                            </div>
                            <div class="form-group">
                                <label class="">Mật khẩu</label>
                                <input class="form-control" type="password" name="pass" required>
                            </div>
                            <p id="resLogin"></p>
                            <input class="btn btn-primary" type="submit" id="btn-signIn" value="Đăng nhập">
                        </form>
                    </div>

                    <div class="modal-footer">
                        <p class="m-auto">Bạn chưa có tài khoản? <span id="changeFormSignUp" class="fade-link">Đăng ký</span></p>
                    </div>
                
            </div>
        </div>
    </div>

    <!-- Modal Create New Account -->
    <div class="modal fade" id="newAccountModal" tabindex="-1" role="dialog" aria-labelledby="newAccountModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="newAccountModalLabel">Đăng ký</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="?signup=1" method="POST">
                        <div class="form-group">
                            <label>Tên đăng nhập</label>
                            <input class="form-control" name="username" type="text" required>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-6">
                                <label>Mật khẩu</label>
                                <input class="form-control" name="password" type="password" required>
                            </div>
                            <div class="form-group col-6">
                                <label>Nhập lại mật khẩu</label>
                                <input class="form-control" name="againPassword" type="password" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Họ và tên</label>
                            <input class="form-control" name="name" type="text" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" name="email" type="email" required>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-6">
                                <label>Ngày sinh</label>
                                <input class="form-control" name="birthday" type="date" required>
                            </div>

                            <div class="form-group col-6">
                                <label>Giới tính</label> 
                                <select class="form-control" name="sex">
                                    <option value="0">Nam</option>
                                    <option value="1">Nữ</option>
                                </select>
                            </div>
                        </div>

                        <button class="btn btn-primary" type="submit">Đăng ký</button>
                    </form>
                </div>
                <div class="modal-footer m-auto">
                    <p class="">Bạn đã có tài khoản? <span id="changeFormSignIn" class="fade-link">Đăng nhập</span></p>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

</nav>