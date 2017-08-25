<?php
session_start();
if(!$_SESSION){
      header("Location:login.php");

}
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<?php include "conn.php";
?>
<div class="">

  <header class="main-header">

    <!-- Logo -->
    <a href="#" class="logo" style="height: 53px;">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>E</b>S</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>E</b>society</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class=" user user-menu">
            <a href="#" class="dropdown-toggle pull-left" data-toggle="dropdown">
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">MR. <?php echo $_SESSION['name'] ?></span>
            </a>
	
	        <a href="#" class="dropdown-toggle pull-right" data-toggle="dropdown">
              
              <a class="hidden-xs" style="display: inline;float:right" href="logout.php">Logout</a>
            </a>
          </li>
          <!-- Control Sidebar Toggle Button -->
          
        </ul>
      </div>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  

  <!-- Content Wrapper. Contains page content -->
  <div class="">
    <!-- Content Header (Page header) -->
    

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      
        <!-- /.col -->
      
      <!-- /.row -->

      <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Latest notice</h3>

              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <ul class="products-list product-list-in-box">
                <?php

$query="SELECT * FROM `notice` WHERE 1 ORDER BY id DESC";
$res=mysqli_query($con,$query);

while($row=mysqli_fetch_assoc($res)){
?>

                <li class="item">
                  <div class="product-img">
                    <img src="dist/img/default-50x50.gif" alt="Product Image">
                  </div>
                  <div class="product-info">
                    <a  class="product-title"><?php echo $row['title'];  ?></a>
                      <span class=" pull-right">

                      <?php 
 
  echo $row['date']; 
  ?>
</span>
                    <span class="product-description" style="white-space: normal;text-overflow: clip;">
                    <?php
echo $row['description'];
?>
</span>
                  </div>
                </li>
                <?php

    

}

?>

                <!-- /.item -->
                <!-- /.item -->
              </ul>
            </div>
            
            <!-- /.box-body -->
            
            <!-- /.box-footer -->
			            
            
          </div>

          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Complaints</h3>

              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <ul class="products-list product-list-in-box">
                <?php

$query="SELECT * FROM `complain` WHERE user=\"".$_SESSION['name']."\" ORDER BY id DESC";

$res=mysqli_query($con,$query);

while($row=mysqli_fetch_assoc($res)){
?>

                <li class="item">
                  <div class="product-img">
                    <img src="dist/img/default-50x50.gif" alt="Product Image">
                  </div>
                  <div class="product-info">
                    <a  class="product-title"><?php echo $row['title']; ?></a>
                      
                      <?php if($row["status"]==1) {?>
                      <span class="label label-success">solved</span>
                    <?php }else{
                      ?>
                      <span class="label label-danger">pending</span>

                      <?php


                      } ?>
                      <span class=" pull-right"><?php echo $row['date']; ?></span>
                    <span class="product-description" style="white-space: normal;text-overflow: clip;">
                          <?php echo $row["description"]; ?>
                        </span>
                      <span class="label label-primary">By:<?php echo $row['user']; ?></span>

                      <?php if(!$row['status']){?>

                      <a class="btn btn-primary btn-xs pull-right" href="solved.php?id=<?php echo $row['id']; ?>">solved</a>
                      <?php }?>
                  </div>

                </li>

                <?php

              }
              ?>
 
                <!-- /.item -->
                <!-- /.item -->
              </ul>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <a  id="add_event_btn" class="btn btn-sm btn-info btn-flat pull-left">Add</a>
               <a  id="cancel_event_btn" class="btn btn-sm btn-danger btn-flat pull-right">Cancel</a>
            </div>
            <!-- /.box-footer -->
            <form role="form" id="add_notice" action="register_complaint.php" method="post" >
              <div class="box-body">
              <input type="hidden" name="id" value="<?php echo $_SESSION['name'] ?>">

                <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="text" class="form-control" placeholder="Title" name="title">
                </div>
                
                <div class="form-group">
                  <label for="exampleInputEmail1">Date</label>
                  <input name="date" type="text" class="form-control" placeholder="Date">
                </div>
                
                <div class="form-group">
                  <label for="exampleInputEmail1">Description</label>
                  <textarea name="desc" class="form-control" placeholder="Description"></textarea>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                
              </div>
            </form>  
          </div>
         
          
          <!-- /.row -->
          <!-- /.box -->

        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Maintainance Payment</h3>

              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>Amount</th>
                    <th>Status</th>
                    <th>Month</th>
                    <th>Payment reference no</th>
                    <th>Account no</th>
                    <th>Action</th>


                    
                    

                  </tr>
                  </thead>
                  <tbody>

                   <?php
$query="SELECT * FROM `payments` WHERE by_user='".$_SESSION['id']."' ORDER BY id DESC";
$res=mysqli_query($con,$query);

while($row=mysqli_fetch_assoc($res)){
?>
                  <tr>
                    
                    <td><i class="fa fa-inr"></i><?php echo $row['amount'];  ?></td>
                    <td><span class="label label-success">paid</span></td>
                    <td><span><?php echo $row['date'];  ?></span></td>
                    <td><span><?php echo $row['p_ref_no'];  ?></span></td>
                    <td><span><?php echo $row['account_no'];  ?></span></td>
                    <td><a class="btn btn-primary" target="blank" href="print.php?id=<?php echo $row['id'];  ?>">Print receipt</a></td>

                    
                    

                  </tr>


                <?php

              }
              ?>
                  

                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
              <div class="box-footer clearfix">
              <a  id="add_payment_btn" class="btn btn-sm btn-info btn-flat pull-left">Pay</a>
               <a  id="cancel_payment_btn" class="btn btn-sm btn-danger btn-flat pull-right">Cancel</a>
            </div>
            <!-- /.box-footer -->
            <form role="form" id="add_payment" action="pay.php" method="post" >
              <div class="box-body">
              <input type="hidden" name="id" value="<?php echo $_SESSION['id'] ?>">

                <div class="form-group">
                  <label for="exampleInputEmail1">Amount</label>
                  <input type="text" class="form-control" placeholder="Amount" name="amount">
                </div>
                
                <div class="form-group">
                  <label for="exampleInputEmail1">Account no</label>
                  <input name="account_number" type="text" class="form-control" placeholder="account_number">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Month</label>
                  <input name="month" type="text" class="form-control" placeholder="Month">
                </div>
                
                
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Pay</button>
                
              </div>
            </form>  
            </div>
            <!-- /.box-body -->
            

            

            <!-- /.box-footer -->
          </div>
        </div>
        <!-- /.col -->

        
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- fastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap  -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS -->
<script src="bower_components/Chart.js/Chart.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

<script type="text/javascript">
$(document).ready(function(){
$("#add_notice").hide();
$("#add_event_btn").click(function(){
$("#add_notice").show();
});
$("#cancel_event_btn").click(function(){
$("#add_notice").hide();
});


$("#add_payment").hide();
$("#add_payment_btn").click(function(){
$("#add_payment").show();
});
$("#cancel_payment_btn").click(function(){
$("#add_payment").hide();
});


$("#add_vendor").hide();
$("#vendor_btn").click(function(){
$("#add_vendor").show();
});
$("#vendor_cancel").click(function(){
$("#add_vendor").hide();
});

});
</script></body>
</html>
