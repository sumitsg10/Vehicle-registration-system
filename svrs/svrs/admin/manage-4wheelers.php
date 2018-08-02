<?php
session_start();
error_reporting(1);
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
if(isset($_GET['del']))
{
$id=$_GET['del'];
$sql = "delete from tbl2wheeler  WHERE id=:id";
$query = $dbh->prepare($sql);
$query -> bindParam(':id',$id, PDO::PARAM_STR);
$query -> execute();
$_SESSION['delmsg']="A deleted";
header('location:manage-2wheelers.php');

}


    ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Vehicle Registration System | Manage 4 Wheelers</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- DATATABLE STYLE  -->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
      <!------MENU SECTION START-->
<?php include('includes/header.php');?>
<!-- MENU SECTION END-->
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Manage 4 Wheelers</h4>
    </div>
     <div class="row">
    <?php if($_SESSION['error']!="")
    {?>
<div class="col-md-6">
<div class="alert alert-danger" >
 <strong>Error :</strong> 
 <?php echo htmlentities($_SESSION['error']);?>
<?php echo htmlentities($_SESSION['error']="");?>
</div>
</div>
<?php } ?>
<?php if($_SESSION['msg']!="")
{?>
<div class="col-md-6">
<div class="alert alert-success" >
 <strong>Success :</strong> 
 <?php echo htmlentities($_SESSION['msg']);?>
<?php echo htmlentities($_SESSION['msg']="");?>
</div>
</div>
<?php } ?>
<?php if($_SESSION['updatemsg']!="")
{?>
<div class="col-md-6">
<div class="alert alert-success" >
 <strong>Success :</strong> 
 <?php echo htmlentities($_SESSION['updatemsg']);?>
<?php echo htmlentities($_SESSION['updatemsg']="");?>
</div>
</div>
<?php } ?>


   <?php if($_SESSION['delmsg']!="")
    {?>
<div class="col-md-6">
<div class="alert alert-success" >
 <strong>Success :</strong> 
 <?php echo htmlentities($_SESSION['delmsg']);?>
<?php echo htmlentities($_SESSION['delmsg']="");?>
</div>
</div>
<?php } ?>

</div>


        </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           4 Wheelers Listing
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>PermitNo.</th>
											<th>VehicleType</th>
											<th>EmpCode</th>
											<th>EmpName</th>
											<th>RegsNo</th>
											<th>ModelNo</th>
											<th>Colour</th>
											<th>MobNum</th>
											<th>Email</th>
											<th>GateValid</th>
											<th>GateUpto</th>
											<th>DLNo</th>
											<th>DLUpto</th>
											<th>InsuranceNum</th>
											<th>InsuranceUpto</th>
											<th>Remarks</th>			
											<th>Creation Date</th>
                                            <th>Updation Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
<?php $sql = "SELECT * from  tbl4wheeler";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
$allMail = '';
if($query->rowCount() > 0)
{
foreach($results as $result)
{ 
$gateExpiry=$result->GatePassValidUpto;
$currentDate=strtotime(date('Y-m-d'));
$days_ago = date('Y-m-d', strtotime('-2 days', strtotime($gateExpiry)));
	if($days_ago == $currentDate)
	{
		$allMail .= $result->EmailId.',';
	}
	
 ?>                                      
		<tr class="odd gradeX">
		<td class="center"><?php echo htmlentities($cnt);?></td>
		<td class="center"><?php echo htmlentities($result->PermitNumber);?></td>
		<td class="center"><?php echo htmlentities($result->VehicleType);?></td>
		<td class="center"><?php echo htmlentities($result->EmpCd);?></td>
		<td class="center"><?php echo htmlentities($result->EmpName);?></td>
		<td class="center"><?php echo htmlentities($result->RegsNo);?></td>
		<td class="center"><?php echo htmlentities($result->ModelNo);?></td>
		<td class="center"><?php echo htmlentities($result->Colour);?></td>
		<td class="center"><?php echo htmlentities($result->MobileNo);?></td>
		<td class="center"><?php echo htmlentities($result->EmailId);?></td>
		<td class="center"><?php echo htmlentities($result->GatePassValidFrom);?></td>


									<td class="center" style="background-color:<?php if(date('Y-m-d')>=$gateExpiry){ echo"red";} else{ } ?>"><?php echo htmlentities($result->GatePassValidUpto);?></td>
									
									<td class="center"><?php echo htmlentities($result->DLNo);?></td>
											<td class="center"><?php echo htmlentities($result->DLUpto);?></td>
											<td class="center"><?php echo htmlentities($result->InsuranceNo);?></td>
											<td class="center"><?php echo htmlentities($result->InsuranceUpto);?></td>
											<td class="center"><?php echo htmlentities($result->Remarks);?></td>
                                            <td class="center"><?php echo htmlentities($result->CreationDate);?></td>
                                            <td class="center"><?php echo htmlentities($result->UpdationDate);?></td>
                                            <td class="center">

                                            <a href="edit-4wheelers.php?twoid=<?php echo htmlentities($result->id);?>"><button class="btn btn-primary"><i class="fa fa-edit "></i> Edit</button> 
                                          <a href="manage-4wheelers.php?del=<?php echo htmlentities($result->id);?>" onclick="return confirm('Are you sure you want to delete?');"" >  <button class="btn btn-danger"><i class="fa fa-pencil"></i> Delete</button>
                                            </td>
                                        </tr>
 <?php $cnt=$cnt+1;}} ?>                                      
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
				
                </div>
            </div>

		<?php
			$allMail .= rtrim($allMail,',');
			if($allMail){
				sendMailToEmp();
			}
			
		function sendMailToEmp($allMail)
		{
			//echo "hello"; die();
			
			$to = $allMail;
            $subject = "Gate Pass Expired Warning";
            // Set content-type header for sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
           // $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        // Additional headers
            $headers .= 'From: JPL<info@jpl.com>' . "\r\n";
           // $headers .= 'Cc: welcome@example.com' . "\r\n";
            //$headers .= 'Bcc:elcome2@example.com' . "\r\n";
           
            $message = "hi user";
			@mail($to,$subject,$headers,$message);

		}
		?>
            
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
    <!-- DATATABLE SCRIPTS  -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
</body>
</html>
<?php } ?>