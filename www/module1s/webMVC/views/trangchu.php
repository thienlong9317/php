<?php
// include_once("models/PDOConnect.php");
// include_once('libs/func.php');
date_default_timezone_set("Asia/Bangkok");
if (!islogin()) {
    //chuyentrang('login.php');
    $controller->toLogin();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>AdminLTE 3 | Dashboard 2</title>
    <?php
    include "widgets/head.php";
    ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <?php include "widgets/leftnav.php"; ?>
            <?php include "widgets/rightnav.php"; ?>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <?php include "widgets/logo.php"; ?>
            <?php include "widgets/menu.php"; ?>
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <?php
            include "widgets/content_header.php";
            if (isset($view)) {
                include $view;
            }
            // if (isset($a)) {
            //     echo "noidung " . $a;
            // }
            ?>

        </div>
        <!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    <?php include "widgets/footer.php"; ?>

    </div>
    <!-- ./wrapper -->

    <?php include "widgets/script.php"; ?>
</body>

</html>
<?php
ob_end_flush();
?>