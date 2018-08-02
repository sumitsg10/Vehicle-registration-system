<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(!$_SESSION['alogin'])
    {?>
<script>
    if (confirm("Unauthorized access !")==true)
	{
		window.location.href='../index.php';
	}else{
		window.location.href='../index.php';
	}
</script>
<?php
//header('location:../index.php');

}
else{ 

if(isset($_POST['update']))
{
	
$usid=intval($_GET['usid']);
$emcd=$_POST['emcd'];
$fname=$_POST['fname'];
$eemail=$_POST['eemail'];
$password=$_POST['password'];
$status=$_POST['status'];
$sql="update  tblusers set EmpCd=:emcd,FullName=:fname,EmailId=:eemail,Password=:password,Status=:status where id=:usid";
$query = $dbh->prepare($sql);
$query->bindParam(':emcd',$emcd,PDO::PARAM_STR);
$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':eemail',$eemail,PDO::PARAM_STR);
$query->bindParam(':password',$password,PDO::PARAM_STR);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->execute();
$_SESSION['updatemsg']="Brand updated successfully";
header('location:manage-users.php');


}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Vehicle Registration System | Edit Users</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
      <!------MENU SECTION START-->
<?php include('includes/header.php');?>
<!-- MENU SECTION END-->
    <div class="content-wra
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Edit Users</h4>
                
                            </div>

</div>
<div class="row">
<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3"">
<div class="panel panel-info">
<div class="panel-heading">
User Info
</div>
 
<div class="panel-body">
<form role="form" method="post">
<?php 
$usid=intval($_GET['usid']);
$sql="SELECT * from tblusers where id=:usid";
$query=$dbh->prepare($sql);
$query-> bindParam(':usid',$usid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
foreach($results as $result)
{               
  ?> 
<div class="form-group">
<label>Employee Code</label>
<input class="form-control" type="text" name="emcd" value="<?php echo htmlentities($result->EmpCd);?>" required />
</div>

<div class="form-group">
<label>Full Name</label>
<input class="form-control" type="text" name="fname" value="<?php echo htmlentities($result->FullName);?>" required />
</div>

<div class="form-group">
<label>E-mail</label>
<input class="form-control" type="email" name="eemail" value="<?php echo htmlentities($result->EmailId);?>" required />
</div>

<div class="form-group">
<label>Password</label>
<input class="form-control" type="text" name="password" value="<?php echo htmlentities($result->Password);?>" required />
</div>

<div class="form-group">
<label>Status</label>
<?php if($result->Status==1) {?>
 <div class="radio">
<label>
<input type="radio" name="status" id="status" value="1" checked="checked">Active
</label>
</div>
<div class="radio">
<label>
<input type="radio" name="status" id="status" value="0">Inactive
</label>
</div>
<?php } else { ?>
<div class="radio">
<label>
<input type="radio" name="status" id="status" value="0" checked="checked">Inactive
</label>
</div>
 <div class="radio">
<label>
<input type="radio" name="status" id="status" value="1">Active
</label>
</div
<?php } ?>
</div>
<?php }} ?>
<button type="submit" name="update" class="btn btn-info">Update </button>

                                    </form>
                            </div>
                        </div>
                            </div>

        </div>
   
    </div>
    </div>
     <!-- CONTENT-WRAPPER SECTION END-->
  <?php include('includes/footer.php');?>
      <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
</body>
</html>
<?php } ?>
