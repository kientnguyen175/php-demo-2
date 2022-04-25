<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Bài viết | Pure PHP Mini Project</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="../../assets/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="../../assets/css/theme.css" type="text/css" />
    <link rel="stylesheet" href="../../assets/css/style.css" type="text/css" />
</head>
<body class="layout-row">
<!-- ############ Aside START-->
<div id="aside" class="page-sidenav no-shrink bg-light nav-dropdown fade" aria-hidden="true">
    <div class="sidenav h-100 modal-dialog bg-light">
        <!-- sidenav top -->
        <div class="navbar">
            <!-- brand -->
            <a href="/" class="navbar-brand ">
                <svg width="32" height="32" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                    <g class="loading-spin" style="transform-origin: 256px 256px">
                        <path d="M200.043 106.067c-40.631 15.171-73.434 46.382-90.717 85.933H256l-55.957-85.933zM412.797 288A160.723 160.723 0 0 0 416 256c0-36.624-12.314-70.367-33.016-97.334L311 288h101.797zM359.973 134.395C332.007 110.461 295.694 96 256 96c-7.966 0-15.794.591-23.448 1.715L310.852 224l49.121-89.605zM99.204 224A160.65 160.65 0 0 0 96 256c0 36.639 12.324 70.394 33.041 97.366L201 224H99.204zM311.959 405.932c40.631-15.171 73.433-46.382 90.715-85.932H256l55.959 85.932zM152.046 377.621C180.009 401.545 216.314 416 256 416c7.969 0 15.799-.592 23.456-1.716L201.164 288l-49.118 89.621z"></path>
                    </g>
                </svg>
                <!-- <img src="../assets/img/logo.png" alt="..."> -->
                <span class="hidden-folded d-inline l-s-n-1x ">Pure PHP</span>
            </a>
            <!-- / brand -->
        </div>
        <!-- Flex nav content -->
        <div class="flex scrollable hover">
            <div class="nav-active-text-primary" data-nav>
                <ul class="nav bg">
                    <li class="nav-header hidden-folded">
                        <span class="text-muted">Main</span>
                    </li>
                    <li>
                        <a href="/">
                            <span class="nav-icon text-primary"><i data-feather='home'></i></span>
                            <span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- ############ Aside END-->
<div id="main" class="layout-column flex">
    <!-- ############ Header START-->
    <div id="header" class="page-header ">
        <div class="navbar navbar-expand-lg">
            <!-- brand -->
            <a href="index.html" class="navbar-brand d-lg-none">
                <svg width="32" height="32" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                    <g class="loading-spin" style="transform-origin: 256px 256px">
                        <path d="M200.043 106.067c-40.631 15.171-73.434 46.382-90.717 85.933H256l-55.957-85.933zM412.797 288A160.723 160.723 0 0 0 416 256c0-36.624-12.314-70.367-33.016-97.334L311 288h101.797zM359.973 134.395C332.007 110.461 295.694 96 256 96c-7.966 0-15.794.591-23.448 1.715L310.852 224l49.121-89.605zM99.204 224A160.65 160.65 0 0 0 96 256c0 36.639 12.324 70.394 33.041 97.366L201 224H99.204zM311.959 405.932c40.631-15.171 73.433-46.382 90.715-85.932H256l55.959 85.932zM152.046 377.621C180.009 401.545 216.314 416 256 416c7.969 0 15.799-.592 23.456-1.716L201.164 288l-49.118 89.621z"></path>
                    </g>
                </svg>
            </a>
            <!-- / brand -->
            <!-- Navbar collapse -->
            <ul class="nav navbar-menu order-1 order-lg-2">
                <li class="nav-item d-none d-sm-block">
                    <a class="nav-link px-2" data-toggle="fullscreen" data-plugin="fullscreen">
                        <i data-feather="maximize"></i>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link px-2" data-toggle="dropdown">
                        <i data-feather="settings"></i>
                    </a>
                    <!-- ############ Setting START-->
                    <div class="dropdown-menu dropdown-menu-center mt-3 w animate fadeIn">
                        <div class="setting px-3">
                            <div class="mb-2 text-muted">
                                <strong>Setting:</strong>
                            </div>
                            <div class="mb-3" id="settingLayout">
                                <label class="ui-check ui-check-rounded my-1 d-block">
                                    <input type="checkbox" name="stickyHeader">
                                    <i></i>
                                    <small>Sticky header</small>
                                </label>
                                <label class="ui-check ui-check-rounded my-1 d-block">
                                    <input type="checkbox" name="stickyAside">
                                    <i></i>
                                    <small>Sticky aside</small>
                                </label>
                                <label class="ui-check ui-check-rounded my-1 d-block">
                                    <input type="checkbox" name="foldedAside">
                                    <i></i>
                                    <small>Folded Aside</small>
                                </label>
                                <label class="ui-check ui-check-rounded my-1 d-block">
                                    <input type="checkbox" name="hideAside">
                                    <i></i>
                                    <small>Hide Aside</small>
                                </label>
                            </div>
                            <div class="mb-2 text-muted">
                                <strong>Color:</strong>
                            </div>
                            <div class="mb-2">
                                <label class="radio radio-inline ui-check ui-check-md">
                                    <input type="radio" name="bg" value="">
                                    <i></i>
                                </label>
                                <label class="radio radio-inline ui-check ui-check-color ui-check-md">
                                    <input type="radio" name="bg" value="bg-dark">
                                    <i class="bg-dark"></i>
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- ############ Setting END-->
                </li>
                <!-- User dropdown menu -->
                <li class="nav-item dropdown">
                    <a href="#" data-toggle="dropdown" class="nav-link d-flex align-items-center px-2 text-color">
                        <span class="avatar w-24" style="margin: -2px;"><img src="../assets/img/a4.jpg" alt="..."></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right w mt-3 animate fadeIn">
                        <a class="dropdown-item" href="javascript:void(0)">
                            <span><?php echo $user->username ?></span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="?controller=login&action=logout">Đăng xuất</a>
                    </div>
                </li>
                <!-- Navarbar toggle btn -->
                <li class="nav-item d-lg-none">
                    <a href="#" class="nav-link px-2" data-toggle="collapse" data-toggle-class data-target="#navbarToggler">
                        <i data-feather="search"></i>
                    </a>
                </li>
                <li class="nav-item d-lg-none">
                    <a class="nav-link px-1" data-toggle="modal" data-target="#aside">
                        <i data-feather="menu"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- ############ Content START-->
    <div id="content" class="flex ">
        <!-- ############ Main START-->
        <?php
            if (isset($page)) require_once ROOT . "/App/Views/$page.php";
        ?>
        <!-- ############ Main END-->
    </div>
    <!-- ############ Content END-->
    <!-- ############ Footer START-->
    <div id="footer" class="page-footer">
        <div class="d-flex p-3">
            <span class="text-sm text-muted flex">Mini project written by pure PHP</span>
            <div class="text-sm text-muted">Nguyễn Đình Tiến</div>
        </div>
    </div>
    <!-- ############ Footer END-->
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
<script>
    let btnDelete = document.querySelectorAll('.btn-delete');
    for (let i = 0; i < btnDelete.length; i++) {
        btnDelete[i].onclick = function (e) {
            let check = confirm('Bạn có chắc muốn xoá bài viết này?');
            if (check) return;
            else e.preventDefault();
        }
    }

    // $(document).ready(function() {
    //     setTimeout(function () {
    //         if ($('.sorting_asc')[0]) {
    //             $('.sorting_asc')[0].click();
    //         }
    //     }, 200);
    // } );
</script>
</body>
</html>
