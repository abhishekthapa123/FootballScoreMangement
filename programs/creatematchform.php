<?php
 include('connection.php');
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
                                <h3 class="box-title" >  Add Score </h3>
                                <form method="POST" action="creatematch.php">
  <div class="form-group">
    <label for="exampleFormControlInput1">Team A</label>
   
<select class="form-select"name="teamA" aria-label="Default select example">
<?php
   
   $tid =$_GET['tid'];
  $sql=  selectteams("A",$tid);
  $result = mysqli_query($conn, $sql);
    
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
   ?>
  <option value=<?php echo $row['teamname']; ?>><?php echo $row['teamname'];?></option>
  <?php }} ?>
</select>
    </div>
  <div class="form-group">
    <!-- <label for="exampleFormControlInput1">Team A Score</label> -->
    <input type="hidden" class="form-control" id="exampleFormControlInput1" name="teamAscore" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Team B </label>
    <select class="form-select"name="teamB" aria-label="Default select example">
    <?php
    $sql=  selectteams("B",$tid);
  $result = mysqli_query($conn, $sql);
    
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      $teamname = $row['teamname'];
   ?>
  <option value="<?php echo $teamname?>"><?php echo $row['teamname'];?></option>
  <?php }} ?>
</select>
    
     </div>
  <div class="form-group">
    <!-- <label for="exampleFormControlInput1">Team B Score</label> -->
    <input type="hidden" class="form-control" id="exampleFormControlInput1" name="teamBscore" >
  </div>
  <input type="hidden" value="<?php echo $tid; ?>" name="tid">
  <div class="form-group">
  <button class="btn btn-primary" type="submit" >Add Score</button> 
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

<?php

function selectteams($group,$tid)
{
    
$sql = "SELECT teamname FROM teams where flag='1' AND groups='{$group}' AND tid='{$tid}' ";
return $sql;
}




?>









