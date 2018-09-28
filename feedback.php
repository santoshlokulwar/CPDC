<?php 
	session_start();
    if(!isset($_SESSION['id'])) {
        header("location:login.php",true);            
    }
    include('nav4s.html');
?>
<html>
	<head>
		<title></title>
		<style>
			.main
			{
				margin-top: 10%;
				margin-left: 30%;
				height:60%;
				width:50%;
				background-color:;
			}
			h2 {
				float:left;
				font-size:35px;
				border-bottom:6px solid #4caf50;
				padding:13px 0;
			}
		</style>
	</head>
	<body>
		<form action="feedback.php" method="post">
			<?php 
				include('config.php');
				mysqli_select_db( $conn,"CPDC" );
				$currentdate=date("Y-m-d");
				$q="select * from eventlist where date<='$currentdate'";
				$retval=mysqli_query($conn,$q);
			?>

			<div class="main" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
            	<div style="height:; ">
					<div class="col-sm-2">
            	</div>
            	<div class="col-sm-8">
            		<h2>Feedback Form</h2>
            	</div>
            </div>
            <div>

	            <div class="col-sm-3">
                </div>
                <div class="col-sm-8" style="margin-top: 5%;">
                    <select required id="idselectsem" name="event" style="background:transparent;border:1px solid; font-color:black; color:black; padding: 10px; border-radius: 3px;">
                        <option selected >-Select Event-</option>
                        <?php   while($row = mysqli_fetch_assoc($retval)) { ?>
                            <option value="<?php echo $row['EID']; ?>" ><?php echo $row['Topic']; ?></option>                                               
                        <?php } ?>
                    </select>                            
                </div>
            </div>

            <div style="margin-top: 5%;">
            	<div class="col-sm-3">
            		
            	</div>
            	<div class="col-sm-3" style="margin-top: 5%;">
            		<input type="radio" name="feedbackv" value="Strong" required>Strong
            	</div>
            	<div class="col-sm-3"  style="margin-top: 5%;">
            		<input type="radio" name="feedbackv" value="Moderate" required>Moderate
            	</div>
            	<div class="col-sm-3"  style="margin-top: 5%;">
            		<input type="radio" name="feedbackv" value="Weak" required>Weak
            	</div>
            </div>



            <div >
            	<div class="col-sm-8">
            	</div>
            	<div class="col-sm-4" style="margin-top: 8%;">
            		<input type="submit" name="submit" value="submit" class="btn">
            	</div>	
            </div>



            <?php
    			if(isset($_POST['submit'])) {	
					$event=$_POST['event'];
					$sid=$_SESSION['Sid'];
					$feedv=$_POST['feedbackv'];
					$qchk="select *from feedback_event where SID='$sid' AND EID='$event'";
					$rchk=mysqli_query($conn,$qchk);
					$rowcount=mysqli_num_rows($rchk);
					if($rowcount) {
				        $q="UPDATE feedback_event SET $feedv='1' WHERE SID='$sid' AND EID='$event'";
				        $r=mysqli_query($conn,$q);
				        if($r)
						echo  "<script>alert('Feedback Submited Successfully')</script>";
	 					 else
	 					echo  "<script>alert('Not Submited')</script>";
	 				}else
	 				echo  "<script>alert('You not Appeared For Feedback')</script>";
				}   			 		       
			?>
			</form>
			</div>

			<?php mysqli_close($conn);?>
	</body>
</html>
