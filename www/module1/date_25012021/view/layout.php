<!DOCTYPE html>
<html lang="en">
  <head>
  <?php include 'view/widgets/head.php' ?> 
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
      <?php include 'view/widgets/nav.php' ?>
      <?php include 'view/widgets/topnav.php' ?>
        <!-- page content -->
          <div class="right_col" role="main">
          <?php          
          include $view;
          ?>
      </div>
        <!-- /page content -->
        <?php include 'view/widgets/footer.php' ?>       
      </div>
    </div>
    <?php include 'view/widgets/script.php' ?> 
  </body>
</html>