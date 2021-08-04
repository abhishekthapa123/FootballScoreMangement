<!DOCTYPE html>
<?php
session_start();
include('connection.php');
?>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<link href ="..//css/logincss.css" rel="stylesheet"> 
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
.div1{
    /* border: 1px solid red; */
    float:left;
    position:relative;
    padding-top:5px;
     margin-left:10px; 
   
}
#register{
  
    position: relative;
  
    padding-left:300px;
    display: block;
    float: right;
}

a{
    color:lightseagreen;
}
.maindiv{
    position: relative;
    
}
</style>
</head>


<body>

<?php
if(isset($_SESSION['username']))
{
    header("Location:adminpannel.php");

}

?>


    <div id="login">
        <h3 class="text-center text-white pt-5">Register form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="registeruser.php" method="post">
                            <h3 class="text-center text-info">Register</h3>
                            
                            <?php

                    if(isset($_GET['msg']))
                    {
                        echo "<span style='color:red;'>".$_GET['msg'] ."<span>" ;
                    }
                        ?>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="username" pattern ="[a-z]{4,}"class="form-control" title="Must contain alphabet and more than 4 letters" required>
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control"pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                            </div>
                         
                          
                            <input type ="hidden">
                            
                            <!-- <div class="form-group"> -->
                                <!-- <label for="password" class="text-info">Type:</label><br> -->
                                <!-- <select name="cars" id="cars"> -->
                                 <!-- <option value="superadmin"> SuperAdmin</option> -->
                                 <!-- <option value="user">User</option> -->
                            <!-- </div>                   -->

                        <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                             
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
        </html>