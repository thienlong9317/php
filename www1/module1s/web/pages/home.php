 <!-- /.content-header -->
 <?php include "widgets/maincontent.php"; ?>
 <?php include "widgets/monthly_report.php"; ?>
 <!-- /.row -->
 <!-- Main row -->
 <div class="row">
     <!-- Left col -->
     <div class="col-md-8">
         <!-- MAP & BOX PANE -->
         <?php include "widgets/map.php"; ?>
         <!-- /.card -->
         <div class="row">
             <div class="col-md-6">
                 <?php include "widgets/chat.php"; ?>
             </div>
             <!-- /.col -->

             <div class="col-md-6">
                 <!-- USERS LIST -->
                 <?php include "widgets/user.php"; ?>
                 <!--/.card -->
             </div>
             <!-- /.col -->
         </div>
         <!-- /.row -->

         <!-- TABLE: LATEST ORDERS -->
         <div class="card">
             <?php include "widgets/order.php"; ?>
             <!-- /.card-footer -->
         </div>
         <!-- /.card -->
     </div>
     <!-- /.col -->

     <div class="col-md-4">
         <?php include "widgets/stats.php"; ?>
         <?php include "widgets/stats_chart.php"; ?>
         <?php include "widgets/recent_add.php"; ?>
     </div>
     <!-- /.col -->
 </div>
 <!-- /.row -->