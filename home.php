<?php session_start();
            if(!isset($_SESSION['id']))
                {
                    
                     header("location:login.php",true);
                    
                }
?>


<html>
	<head>
	<title>Home Page</title>

  <style>
.rightnav>ul>li>a


{
	color:#1d0a0a;
	
}
.rightnav
{box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}







  
</style>
	</head>

	<body>
	<?php include('nav2.html');?>
<div>


	<div class="rightnav" style="margin-top: 0%;
			color:red;
			
			margin-left: 0%;
			width:15%;
			height:100%;
			background-color:;float:left;">
  
  <ul class="nav nav-pills nav-stacked " style="margin-left: 0%;">
    
    <li><a href="aboutus.php" ><span class="glyphicon glyphicon-"></span>   About US</a></li>

    
    <li><a href="Event.php" ><span class="glyphicon glyphicon-"></span > Event</a></li>
        <li><a href="Program.php" ><span class="glyphicon glyphicon-"></span> Program</a></li>
         
        <li><a href="contactus.php" ><span class="glyphicon glyphicon-"></span> Contact US</a></li>
    
  </ul>
</div>





<div class="" style="float:right;width:80%;margin-top: 5%;">
 
  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="height:80%;width:80%;margin-left: 10%;">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="Graphic.png" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="login1.jpg" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="Graphic.png" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

</div>

	</body>
</html>