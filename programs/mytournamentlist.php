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
                                <h3 class="box-title" >  My Tournaments  </h3>
                                <a href="addtournamentform.php">  <button class="btn btn-primary" type="submit" style="margin-left:800px;">Add Tournament</button> </a>
                           
                                <?php
                            
                                if(isset($_GET['msg']))

                                {?>
                                <div class="alert alert-success" role="alert">
                                   <h6>
                                   <?php echo $_GET['msg']; ?>
                                   </h6> 
                            </div>
                            <?php }?>
                                

                            

                              <br><br>     
                                <table class="table">
                            <thead class="thead-dark">
                                            <tr>
                    
                    <th scope="col">Tournaments</th>
                    <th scope="col">Winning Price</th>
                    <th scope="col"> Registration fees</th>
                    <th scope="col"> Date</th>
                    <th scope="col"> Action</th>
                    <th scope="col"> Matches </th>
                    <th scope="col"> Feedback </th>
                    </tr>
        
                        </thead>
                        <tbody>
                        <?php
                        include('connection.php');
                        $user_id= $_SESSION['uid'];
                        $sql = "SELECT * FROM tournaments where flag='1' AND user_id= '".$user_id."'";
                          $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
        // output data of each row
            while($row = mysqli_fetch_assoc($result)) 
            { ?>
           <tr>
                
                            <td> <?php echo $row['tname'];?></td>
                            <td><?php echo $row['winning_price'];?></td>
                            <td><?php echo $row['fees'];?></td>
                            <td><?php echo $row['schedule'];?></td>
                            <td><a href="listregisterteams.php?tid=<?php echo $row['id'];?>">  <button class="btn btn-success" type="submit"> List Register Teams</button> </a></td>
                            <td><a href="listmymatch1.php?tid=<?php echo $row['id'];?>">  <button class="btn btn-warning" type="submit"> Manage</button> </a></td>
                            <td><a href="viewfeedback.php?tid=<?php echo $row['id'];?>">  <button class="btn btn-primary" type="submit"> View Feedback</button> </a></td>

            
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