<?php session_start();
            if(!isset($_SESSION['id']))
                {
                    
                     header("location:login.php",true);
                    
                }
?>

<html>
	<head>
	<title>
	</title>

	<style type="text/css">
		.rightnav
		{margin-top: 0%;
			
			font-color:white;
			margin-left: 0%;
			width:10%;
			height:100%;
			background-color:;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			
		}
		.rightnav>ul>li>a


{
	color:#1d0a0a;
	
}
		
		
		
	</style>
	
	</head>

	<body>
		<?php include('nav2.html');?>

		<div class="rightnav">
  
  <ul class="nav nav-pills nav-stacked">
    <li class="" style="border-bottom: 1px solid; text-align: center;"><p style="color:#1d0a0a;border-bottom: 1px solid;border-radius: 0px; cursor:none;"> <h3>EVENT</h3></p></li>
    <li><a href="EventCreate.php" "  > New</a></li>
   
    <li><a href="Eventview.php" > View</a></li>
    <li><a href="Notice.php" > Notice</a></li>
     <li><a href="addstudent.php" >Add Student</a></li>
    <li><a href="Attendance.php" > Attendance</a></li>
    
    
    <li><a href="ExternalEvent.php" > External Event Participation</a></li>
    <li><a href="Reports.php" > Reports</a></li>
  </ul>
</div>


	</body>

</html>