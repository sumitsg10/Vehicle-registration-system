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

if(isset($_POST['create']))
{
$pernum=$_POST['pernum'];
$vtype=$_POST['vtype'];
$empcd=$_POST['empcd'];
$empname=$_POST['empname'];
$regnum=$_POST['regnum'];
$modnum=$_POST['modnum'];
$clr=$_POST['clr'];
$mobnum=$_POST['mobnum'];
$mailid=$_POST['mailid'];
$gvf=$_POST['gvf'];
$gvu=$_POST['gvu'];
$dlnum=$_POST['dlnum'];
$dlu=$_POST['dlu'];
$insnum=$_POST['insnum'];
$insu=$_POST['insu'];
$rmk=$_POST['rmk'];
$sql="INSERT INTO  tbl4wheeler(PermitNumber,VehicleType,EmpCd,EmpName,RegsNo,ModelNo,Colour,MobileNo,EmailId,GatePassValidFrom,GatePassValidUpto,DLNo,DLUpto,InsuranceNo,InsuranceUpto,Remarks) VALUES(:pernum,:vtype,:empcd,:empname,:regnum,:modnum,:clr,:mobnum,:mailid,:gvf,:gvu,:dlnum,:dlu,:insnum,:insu,:rmk)";
$query = $dbh->prepare($sql);
$query->bindParam(':pernum',$pernum,PDO::PARAM_STR);
$query->bindParam(':vtype',$vtype,PDO::PARAM_STR);
$query->bindParam(':empcd',$empcd,PDO::PARAM_STR);
$query->bindParam(':empname',$empname,PDO::PARAM_STR);
$query->bindParam(':regnum',$regnum,PDO::PARAM_STR);
$query->bindParam(':modnum',$modnum,PDO::PARAM_STR);
$query->bindParam(':clr',$clr,PDO::PARAM_STR);
$query->bindParam(':mobnum',$mobnum,PDO::PARAM_STR);
$query->bindParam(':mailid',$mailid,PDO::PARAM_STR);
$query->bindParam(':gvf',$gvf,PDO::PARAM_STR);
$query->bindParam(':gvu',$gvu,PDO::PARAM_STR);
$query->bindParam(':dlnum',$dlnum,PDO::PARAM_STR);
$query->bindParam(':dlu',$dlu,PDO::PARAM_STR);
$query->bindParam(':insnum',$insnum,PDO::PARAM_STR);
$query->bindParam(':insu',$insu,PDO::PARAM_STR);
$query->bindParam(':rmk',$rmk,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$_SESSION['msg']="4 Wheeler Listed successfully";
header('location:manage-4wheelers.php');
}
else 
{
$_SESSION['error']="Something went wrong. Please try again";
header('location:manage-4wheelers.php');
}

}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Vehicle Registration System | Add 2 Wheeler</title>
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
                <h4 class="header-line">Add 4 Wheeler</h4>
                
                            </div>

</div>
<div class="row">
<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3"">
<div class="panel panel-info">
<div class="panel-heading">
4 Wheeler Info
</div>
<div class="panel-body">
<form role="form" method="post">
<div class="form-group">
<label>Permit No.</label>
<input class="form-control" type="text" name="pernum" autocomplete="off"  required />
</div>
<div class="form-group">
<label>Vehicle Type</label>
<input class="form-control" type="text" name="vtype" autocomplete="off"  required />
</div>
<div class="form-group">
<label>Employee Code</label>
<input class="form-control" type="text" name="empcd" autocomplete="off"  required />
</div>
<div class="form-group">
<label>Employee Name</label>
<input class="form-control" type="text" name="empname" autocomplete="off"  required />
</div>
<div class="form-group">
<label>Registration No.</label>
<input class="form-control" type="text" name="regnum" autocomplete="off"  required />
</div>
<div class="form-group">
<label>Model No.</label>
<input class="form-control" type="text" name="modnum" autocomplete="off"  required />
</div>
<div class="form-group">
<label>Colour</label>
<input class="form-control" type="text" name="clr" autocomplete="off"  required />
</div>
<div class="form-group">
<label>Mobile No.</label>
<input class="form-control" type="number" name="mobnum" autocomplete="off"  required />
</div>
<div class="form-group">
<label>Email Id</label>
<input class="form-control" type="email" name="mailid" autocomplete="off"  required />
</div>
<div class="form-group">
<label>Gate Valid From</label>
<input class="form-control" type="date" name="gvf" autocomplete="off"  required />
</div>
<div class="form-group">
<label>Gate Valid Upto</label>
<input class="form-control" type="date" name="gvu" autocomplete="off"  required />
</div>
<div class="form-group">
<label>DL Number</label>
<input class="form-control" type="text" name="dlnum" autocomplete="off"  required />
</div>
<div class="form-group">
<label>DL Upto</label>
<input class="form-control" type="date" name="dlu" autocomplete="off"  required />
</div>
<div class="form-group">
<label>Insurance No.</label>
<input class="form-control" type="text" name="insnum" autocomplete="off"  required />
</div>
<div class="form-group">
<label>Insurance Upto</label>
<input class="form-control" type="date" name="insu" autocomplete="off"  required />
</div>
<div class="form-group">
<label>Remarks</label>
<input class="form-control" type="text" name="rmk" autocomplete="off"  required />
</div>

<button type="submit" name="create" class="btn btn-info">Add </button>

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
