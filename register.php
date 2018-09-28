<html>
	<head>
		<title>REGISTRATION</title>
			<link href="register1.css" rel="stylesheet" type="text/css">
			<script type="text/javascript">

			function me()
						{
  
  								var un= document.getElementById("fname").value;
  								var ln= document.getElementById("lname").value;
 								
								var i;
								var s="First Name is Incorrect";
								for(i=0;i<un.length;i++)
								{
								  if (!((un.charCodeAt(i)>=65&&un.charCodeAt(i)<=90)||(un.charCodeAt(i)>=97&&un.charCodeAt(i)<=122)))
								   {
								       document.getElementById("fnei").value=s;
								       //errorname.setAttribute(value,s);
								      // document.getElementById("fne").innerHTML=s;
								       return false;
								   }else
								   {document.getElementById("fnei").value="";}
								   

								
								}
									var l="last Name is Incorrect";
								for(i=0;i<ln.length;i++)
								{
								  if (!((ln.charCodeAt(i)>=65&&ln.charCodeAt(i)<=90)||(ln.charCodeAt(i)>=97&&ln.charCodeAt(i)<=122)))
								   {
								       document.getElementById("lnei").value=l;
								       //errorname.setAttribute(value,s);
								       //document.getElementById("lne").innerHTML=l;
								       return false;
								       
								   }else
								   {document.getElementById("lnei").value="";}
								}
  
						}
			</script>
			<style>
			.row
			{
				margin-top: 7%;
			}
			</style>

	</head>
<body  style="background: url('login1.jpg'); background-size:cover;color:white;">
			
				
					
					<?php include('nav1.html');?>
					

<div class="">
				<div CLASS="container" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
					<div class='col-sm-3'>
					</div>
								<div class='col-sm-4'>
									<div class="reg">
										<form action="register.php" method="POST" onsubmit="return me()">
										<div class="row1">
											<div class="col-sm-12">
												
									
												<div class="head">

													<h1>Registration Details</h1><br>
												</div>
											</div>
										</div>	
										<div class="row" >
												<div class="col-sm-6">

													<input type="text" name="firstname" placeholder="Enter First Name" required id="fname">
												</div>
												<div class="col-sm-6">
													<input type="text" name="middlename" placeholder="Enter Middle Name" required id="mname">
												</div>
										</div>

										<div class="row">	
												
											<div class="col-sm-6">
												<input type="text" name="lastname" placeholder="Enter Last Name" required id="lname">
											</div>
											<div class="col-sm-6">
												<input type="email" name="email" placeholder="Enter E-mail ID" required>
											</div>
												
										</div>
										
										<div class="row" >
											<div class="col-sm-6">

												<input type="phone" name="phone" placeholder="Enter Phone No" required>
											</div>

											<div class="col-sm-6">
												<input type="password" name="password" placeholder="Enter Password" required>
											</div>
										</div>		
												
											
										
										<div class="row">
											<div class="col-sm-6">
												<input type="number" name="rno" placeholder="Enter Roll No" required>
											</div>
											<div class="col-sm-6">
												<input type="number" name="batch" placeholder="Enter Batch" required>
												
											</div>
										</div>

										<div class="row">
											<div class="col-sm-6">
												<input type="number" name="Academicy" placeholder="Enter Academic Year" required>
											</div>

											<div class="col-sm-6">
											</div>
										</div>	
												
											

										<div class="row" >

											<div class="col-sm-6">
												<select required  name="class" id="idselectclass" style="background:transparent;border:none; font-color:black; color:black;">
													<option selected >-Select Class-</option>
													<option value="FYMCA">FYMCA</option>
													<option value="SYMCA">SYMCA</option>
													<option value="TYMCA">TYMCA</option>
												</select>
											</div>

										 	<div class="col-sm-6">
												<select required id="idselectsem" name="sem" style="background:transparent;border:none; font-color:black; color:black;">
													<option selected >-Select Sem-</option>
													<option value="Sem-1">Sem-1</option>
													<option value="sem-2">sem-2</option>
												</select>
											</div>
										</div>
											
										

										<div class="row" >
											<div class="col-sm-6"> 
											
												<input type="reset" name="clear" value="CLEAR" id="clear" class="">
											</div>

											<div class="col-sm-6">
												<input type="submit" name="submit" value="SUBMIT" id="submit" class="">
											</div>	
											
										</div>
										
									</form>
								</div>
							</div>
						</div>
		</body>
</html>
<?php
if(isset($_POST['submit']))
  {

 include('config.php');
    
    mysqli_select_db($conn,"CPDC");


	$fname=$_POST['firstname'];

	$mname=$_POST['middlename'];
	$lname=$_POST['lastname'];
$name="$fname $mname $lname";

	
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$password=$_POST['password'];
		$rno=$_POST['rno'];
		$batch=$_POST['batch'];
		$class=$_POST['class'];
		$sem=$_POST['sem'];
		$ay=$_POST['Academicy'];
		$sid="$batch$class$rno";

		$qr="select TID From Teacher Where class='$class'";
		$retvalr=mysqli_query($conn,$qr);
		$row = mysqli_fetch_assoc($retvalr);
		$tid=$row['TID'];
		


$q="insert into student(SID,Name,Pass,Class,Batch,Academicyear,semester,Tid) values('$sid','$name','$password','$class','$batch','$ay','$sem','$tid')";

 $retval=mysqli_query($conn,$q);
 if($retval)
 {
 	echo  "<script>alert('Successfully Registered')</script>";
 	
 	
 }
 else
 	echo  "<script>alert('Not Registered')</script>";
}
?>











