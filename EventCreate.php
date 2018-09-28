
<?php session_start();
            if(!isset($_SESSION['id']))
                {
                    
                     header("location:login.php",true);
                    
                }
?>

<html>
	<head>
		<title>EVENT CREATE</title>
			<link href="EventCreate.css" rel="stylesheet" type="text/css">
			
			<style type="text/css">
		
		

	</style>
	 
	</head>
		<body  Style="">
			
				
    
      <?php include('nav2.html');?>
    

					
				<div class="main" style="margin-left: 0%;">
				<div class="col-sm-4" style="margin-left: 0%;">

					<a href="Event.php" style="background-color: #f44336;
    color: white;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    width:130px;
    float:;
    margin-top: 1%;
     
    "><span class="glyphicon glyphicon-arrow-left"></span> </a>
		
				</div>






				<div class="col-sm-4" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
						<form action="EventCreate.php" method="post" onsubmit="return me()">
							<div >
								<div class="col-sm-12">
									<div class="head">

										<h1 style="font-size: 30px;">Event Details</h1><br>
									</div>
								</div>
									
							<div >		
								<div class="col-sm-6">
										<input type="text" name="topic" placeholder="Enter Topic" required id="topic">
								</div>
								<div class="col-sm-6">
									<input type="text" name="ResourcePerson" placeholder="Name of Resource Person" required id="Resource Person">
								</div>
							</div>

							<div >		
								<div class="col-sm-6">
										<input type="text" name="Venue" placeholder="Enter Venue" required id="Venue">
								</div>
								<div class="col-sm-6">

									<input type="date" name="date" placeholder="" required id="date">
								</div>
							</div>

							<div >		
								<div class="col-sm-6">
										<input type="time" name="time" placeholder="Enter Time" required id="time">
								</div>
								<div class="col-sm-6">
									<input type="text" name="forwho" placeholder=" For Who" required id="forwho">
								</div>
							</div>
										
							<div >		
								<div class="col-sm-12">
									<textarea name="Expectedoutcome" required id="Expectedoutcome" rows="3" cols="50" Style="margin-top:10px;" placeholder="Enter Expected Outcome"></textarea>
										
								</div>
							</div>
							<div>
								<div class="col-sm-12">
									<textarea name="Objective" required id="objective" rows="3" cols="50" Style="margin-top:10px;" placeholder="Enter objective"></textarea>
									
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


	
		$date=$_POST['date'];
		if($date<date('Y-m-d'))
		{
			echo  "<script>alert('Event Can not created for older date')</script>";
		}
		$time=$_POST['time'];
		$forwho=$_POST['forwho'];
		$Expectedoutcome=$_POST['Expectedoutcome'];
		$Objective=$_POST['Objective'];
		$eid="";

		

		


$q="insert into eventlist(EID,Topic,Nameofresourceperson,venue,date,time,forwho,Expectedoutcome,objective)
 values('$eid','$topic','$ResourcePerson','$Venue','$date','$time','$forwho','$Expectedoutcome','$Objective')";

 $retval=mysqli_query($conn,$q);
 if($retval)
 	echo  "<script>alert('Successfully Event Created')</script>";
 else
 	echo "n";
}
?>





