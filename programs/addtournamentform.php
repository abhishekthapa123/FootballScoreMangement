<?php
session_start();
if(!isset($_SESSION['username']))
{
    header("Location:loginform.php");
}
include('adminheader.php')
?>
<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
      <?php include('adminnavbar.php');?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php  include('adminsidebar.php'); ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"></h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <li><a href="#" class="fw-normal"></a></li>
                            </ol>
                           
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                <?php
                            
                            if(isset($_GET['msg']))

                            {?>
                            <div class="alert alert-danger" role="alert">
                               <h6>
                               <?php echo $_GET['msg']; ?>
                               </h6> 
                        </div>
                        <?php }?>
                            


                    <!-- ============================================================== -->
                    <!-- Start Page Content -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="white-box">
                                <h3 class="box-title" >  Add Tournaments </h3>
                                <form method="POST" action="addtournament.php">
  <div class="form-group">
    <label for="exampleFormControlInput1">Tournament Name</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="tname" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Winning Price</label>
    <input type="number" class="form-control" id="exampleFormControlInput1" name="wprice" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Registration Fees</label>
    <input type="number" class="form-control" id="exampleFormControlInput1" name="rfees" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Date</label>
    <input type="date" class="form-control" id="exampleFormControlInput1" name="date" required>
  </div>
  <div class="form-group">
  <button class="btn btn-primary" type="submit" >Add Tournament</button> 
  </div>
</form>
        </div>
                                    </div>
                                    </div>
                                    </div>

                            </div>
                            <?php include('adminfooter.php') ; ?>
                        </body>

                        </html>