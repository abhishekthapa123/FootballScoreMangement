

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
                    <!-- ============================================================== -->
                    <!-- Start Page Content -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="white-box">
                                <h3 class="box-title" >  Register Your Team </h3>
                                <?php
                            
                            if(isset($_GET['msg']))

                            {?>
                            <div class="alert alert-danger" role="alert">
                               <h6>
                               <?php echo $_GET['msg']; ?>
                               </h6> 
                        </div>
                        <?php }?>
                                <form method="POST" action="register.php"enctype= "multipart/form-data">
  <div class="form-group">
  <input type=hidden name="tid" value="<?php echo $_GET['tid'];?>">
    <label for="exampleFormControlInput1">Team Name</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="tname" required>
  </div>
  <label for="exampleFormControlInput1">Voucher</label><br>

  <div>
  <input type="file" name="uploadfile" value="" accept="image/*" required>
   
  </div>
</div>
  <div class="form-group">
  <button class="btn btn-primary" type="submit" >Add Team</button> 
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


