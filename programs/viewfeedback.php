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
                            <?php   

                                include('connection.php');
                                $tid = $_GET['tid'];
                                $sql = "SELECT * FROM tournaments where id= '".$tid."'";
                                $result = mysqli_query($conn, $sql);

                                if (mysqli_num_rows($result) > 0) {
                                // output data of each row
                                while($row = mysqli_fetch_assoc($result)) 
                                { ?>     
                        

                                <h1 class="box-title" style="color:orangered" ><?php echo $row['tname']?> </h1>
                                             
                              <?php }} ?>  

                            

                              <br><br>     
                                <table class="table">
                            <thead class="thead-dark">
                                            <tr>
                    
                    <th scope="col">Feedbacks</th>
                    </tr>
        
                        </thead>
                        <tbody>
                        <?php
                        include('connection.php');
                        $tid = $_GET['tid'];
                        $sql = "SELECT * FROM feedback where tid= '".$tid."'";
                          $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
        // output data of each row
            while($row = mysqli_fetch_assoc($result)) 
            { ?>
           <tr>
                
                            <td> <?php echo $row['feedback'];?></td>
                         
            
                            </tr>
   
   <?php }
    } ?>



                        
                            
                        </tbody>
                        </table>


   </div>
        </div>
        </div>
            </div>

    </div>
     <?php include('adminfooter.php') ; ?>
   </body>

</html>