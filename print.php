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
            <a href="index.php" class="dropdown-toggle pull-left" data-toggle="dropdown">
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">MR. <?php echo $_SESSION['name'] ?></span>
            </a>
  
          
          </li>
          <!-- Control Sidebar Toggle Button -->
          
        </ul>
      </div>

    </nav>
  </header>

<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Receipt</h3>

              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>By:User Id</th>
                    <th>Receipt no</th>

                    <th>Amount</th>
                    <th>Month</th>
                    <th>Account no</th>
                    
                    <th>Refrence no</th>
                    

                  </tr>
                  </thead>
                  <tbody>

                  <?php
$payment_id=$_GET['id'];
$query="SELECT `id`, `amount`, `date`, `paid_status`, `by_user`, `p_ref_no`, `account_no` FROM `payments` WHERE id='$payment_id' ";

$res=mysqli_query($con,$query);

while($row=mysqli_fetch_assoc($res)){
?>
                  <tr>
                    <td><?php echo $_SESSION['name'].":".$_SESSION['id'] ?></td>

                    <td><?php echo $row['id'] ?></td>

                    <td><i class="fa fa-inr"></i><?php echo $row['amount'] ?></td>
                    
                    <td><span><?php echo $row['date']; ?></span></td>
                    
                    <td><?php echo $row['account_no'] ?></td>

                    
                    <td><?php echo $row['p_ref_no'] ?></td>
                    <?php }?>

                  </tr>
                  
                  
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            
            <!-- /.box-footer -->
          </div>
          <button id="print" class="btn btn-primary" style="margin:20px;">Print</button>

        
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
    $("#print").click(function(){
      window.print();
    })
  });
</script>

</body>
</html>
