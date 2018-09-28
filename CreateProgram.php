<?php session_start();
			if(!isset($_SESSION['id']))
				{
					
					  header("location:login.php",true);
				}
?>


<html>
	<head>
		<title>Program  CREATE</title>
			<link href="EventCreate.css" rel="stylesheet" type="text/css">
			
	</head>
		<body  style="background: url(''); background-size: cover; color:black;">
			
				
      <?php include('nav2.html');?>
    
					
				<div class="">
				<div class="col-sm-4">
					<a href="Program.php" style="background-color: #f44336;
    color: white;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    width:130px;
    
    margin-top: 1%;
     
    "> <span class="glyphicon glyphicon-arrow-left"></a>
				</div>






				<div class="col-sm-4" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
						<form action="CreateProgram.php" method="POST" onsubmit="return me()">
							<div >
								<div class="col-sm-12">
									<div class="head">

										<h2 style="font-size:30px;">Training Program Details</h2><br>
									</div>
								</div>
									
							<div >		
								<div class="col-sm-6">
										<input type="text" name="topic" placeholder="Name of Training Program" required id="name">
								</div>
								<div class="col-sm-6">
									<input type="text" name="ResourcePerson" placeholder="Name of Training Agency" required id="Agency">
								</div>
							</div>

							<div >		
								<div class="col-sm-6">
										<input type="text" name="Venue" placeholder="Enter Venue" required id="Venue">
								</div>
								<div class="col-sm-6">
									<input type="text" name="forwho" placeholder=" For Who" required id="forwho">
									
								</div>
							</div>

							<div >		
								<div class="col-sm-6">
									<label>Date From</label>
										
								</div>
								<div class="col-sm-6">
									<label>TO</label>
								</div>
							</div>

							<div >		
								<div class="col-sm-6">
									<input type="date" name="datefrom" placeholder="" required id="datefrom" style="margin-top: 0px;padding: 0px;">
										
								</div>
								<div class="col-sm-6">
									<input type="date" name="dateto" placeholder="" required id="dateto" style="margin-top: 0px;padding: 0px;">
								</div>
							</div>


							<div >		
								<div class="col-sm-6">
									<label>Time From</label>
										
								</div>
								<div class="col-sm-6">
									<label>TO</label>
								</div>
							</div>

							<div >		
								<div class="col-sm-6">
									<input type="time" name="timefrom" placeholder="Enter Time" required id="timefrom" style="margin-top: 0px;padding: 0px;">
										
								</div>
								<div class="col-sm-6">
									<input type="time" name="timeto" placeholder="Enter Time" required id="timeto" style="margin-top: 0px;padding: 0px;">

								</div>
							</div>
										
							<div >		
								<div class="col-sm-12">
										<textarea name="Expectedoutcome" required id="Expectedoutcome" rows="3" cols="50" Style="margin-top:10px;" placeholder="Enter Expected Outcome"
										 style="background: none;"></textarea>
								</div>
							</div>
							<div>
								<div class="col-sm-12">
									<textarea name="Objective" required id="objective" rows="3" cols="50" Style="margin-top:10px;" placeholder="Enter objective"
									style="background: none;"></textarea>
								</div>
							</div>


							<div >		
								<div class="col-sm-6 btn">
										
								</div>
								<div class="col-sm-6 btn" >
									<input type="submit" name="submit" value="Create"  id="createevent">	
								</div>
							</div>

										
											
										
											
											
					
								
						</form>
				</div></div>
		</body>
</html>

<?php
if(isset($_POST['submit']))
  {

 include('config.php');
    
    mysqli_select_db($conn,"CPDC");


	$topic=$_POST['topic'];

	$ResourcePerson=$_POST['ResourcePerson'];
	$Venue=$_POST['Venue'];


	
		$datefrom=$_POST['datefrom'];
		$timefrom=$_POST['timefrom'];
		$dateto=$_POST['dateto'];
		$timeto=$_POST['timeto'];
		$forwho=$_POST['forwho'];
		$Expectedoutcome=$_POST['Expectedoutcome'];
		$Objective=$_POST['Objective'];
		$pid="jfug";

		

		


$q="insert into programlist(PID,Nameoftrainingprogram,Nameoftrainingperson,venue,forwho,datefrom,dateto,timefrom,timeto,Expectedoutcome,objective)
 values('$pid','$topic','$ResourcePerson','$Venue','$forwho','$datefrom','$dateto','$timefrom','$timeto','$Expectedoutcome','$Objective')";
 
 $retval=mysqli_query($conn,$q);
 if($retval)
 	echo "y";
 else
 	echo "n";

 mysqli_close($conn);
}
?>
