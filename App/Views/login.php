<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Đăng nhập | Pure PHP Mini Project</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="../../assets/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="../../assets/css/theme.css" type="text/css" />
    <link rel="stylesheet" href="../../assets/css/style.css" type="text/css" />
</head>
<body class="layout-row">
<div class="d-flex flex-column flex">
    <div class="row no-gutters h-100">
        <div class="col-md-6 bg-primary" style="">
            <div class="p-3 p-md-5 d-flex flex-column h-100">
                <h4 class="mb-3 text-white">Pure PHP Mini Project</h4>
                <div class="text-fade">Bootstrap 4 Web Application</div>
                <div class="d-flex flex align-items-center justify-content-center">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div id="content-body">
                <div class="p-3 p-md-5">
                    <h5>Chào mừng trở lại</h5>
                    <p>
                        <small class="text-muted">Đăng nhập để quản lý hệ thống</small>
                    </p>
                    <form method="post" role="form" action="?controller=login&action=postLogin">
                        <div class="form-group">
                            <label>Tên đăng nhập</label>
                            <input type="text" name="username" class="form-control" placeholder="Hãy nhập tên đăng nhập" required>
                        </div>
                        <div class="form-group">
                            <label>Mật khẩu</label>
                            <input type="password" name="password" class="form-control" placeholder="Hãy nhập mật khẩu" required>
                        </div>
                        <div class="form-group text-danger mb-2">
                            <?php
                                if (isset($error)) echo $error;
                            ?>
                        </div>
                        <div class="checkbox mb-1">
                            <label class="ui-check">
                                <input type="checkbox" name="remember">
                                <i></i> Ghi nhớ
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary mb-4">Đăng nhập</button>
                        <div>Bạn chưa có tài khoản?
                            <a href="?controller=login&action=getRegister" class="text-primary">Đăng ký</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- build:js ../assets/js/site.min.js -->
<!-- jQuery -->
<script src="../../libs/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../../libs/popper.js/dist/umd/popper.min.js"></script>
<script src="../../libs/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- ajax page -->
<script src="../../libs/pjax/pjax.min.js"></script>
<script src="../../assets/js/ajax.js"></script>
<!-- lazyload plugin -->
<script src="../../assets/js/lazyload.config.js"></script>
<script src="../../assets/js/lazyload.js"></script>
<script src="../../assets/js/plugin.js"></script>
<!-- scrollreveal -->
<script src="../../libs/scrollreveal/dist/scrollreveal.min.js"></script>
<!-- feathericon -->
<script src="../../libs/feather-icons/dist/feather.min.js"></script>
<script src="../../assets/js/plugins/feathericon.js"></script>
<!-- theme -->
<script src="../../assets/js/theme.js"></script>
<script src="../../assets/js/utils.js"></script>
<!-- endbuild -->
</body>
</html>
