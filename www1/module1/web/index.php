<?php 
ob_start();
include 'libs/funcs.php'; 
if(!islogin())
    chuyentrang('login.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <?php include 'widgets/head.php' ?> 
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
      <?php include 'widgets/nav.php' ?>
      <?php include 'widgets/topnav.php' ?>
        <!-- page content -->
        <div class="right_col" role="main">
        <?php 
        $view = $_GET['page']??'home';
        $path = 'pages/'.$view.'.php';
        if(file_exists($path)){
          include $path;
        }else{
          chuyentrang('404.php');
        }
        ?>
        </div>
        <!-- /page content -->
        <?php include 'widgets/footer.php' ?>       
      </div>
    </div>
    <?php include 'widgets/script.php' ?> 
  </body>
</html>
<?php 
ob_end_flush();
?>