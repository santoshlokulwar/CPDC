


<!DOCTYPE html>
<html>
<head>
<link href="login.css" rel="stylesheet" type="text/css">
<meta charset="ISO-8859-1">
<title>LOGIN</title>
<style>
select {
    width: 80%;
    padding: 16px 20px;
    height:80%;
    border: none;
    border-radius: 10px;
    background-color:red;
    background:transparent;
    
  }
  option{
    background: none;
    background:transparent;
  }
</style>
</head>
<body style="background: url('login1.jpg');background-size: cover;color:white;font-color:white;">
  <?php include('nav1.html');?>
  
  
  


    <div >
      <div class="col-sm-4">
      </div>

        <div class="col-sm-4">

                <div class="logindiv" >
                  <form action="login.php" method="post">
                        <h1 style="color:white;">Login</h1>

                     <div class="textbox">

                         <input type="text"  placeholder="User Name" class="space" name="username" id="uname" required style="color:white;">
                    </div>

                      <div class="textbox">
                       <input type="password"  placeholder="Passward" class="space" name="pass" id="passward" required style="color:white;">
                      </div>

                      <select name="type">
                        <option value="admin" selected>Admin</option>
                        <option value="teacher">Teacher</option>
                        <option value="student">Student</option>
                      </select>
                        

                      <div class="derror" ><input type="text" id="error"  value="" readonly disabled></div>
                     <input type="submit" name="submit"  class="btn" value="Sign In" onclick="me()" >
                   </form>
                </div>
       </div>

    </div>

   
</body>
</html>

  
<?php


  include('config.php');
  if(isset($_POST['submit']))
  {
  if($conn)
    { 


      session_start();
      mysqli_select_db( $conn,"CPDC" );

      $uname=$_POST['username'];
      $password=$_POST['pass'];
      

      $type=$_POST['type'];
      $_SESSION['utype']=$type;
      
      $q="select * from Type where Name='username'";
      $q=str_replace('Type',$type,$q);
      $q=str_replace('username',$uname,$q);
      
      $retval=mysqli_query($conn,$q);
    
        $row = mysqli_fetch_assoc($retval);
       
        
      
          
              if($row['Pass']==$password)
                { 
                  $_SESSION['id']=$uname;
                  $_SESSION['utype']=$type;
                  if($type=="admin")

                  header("location:home.php",true);
                  else if($type=="teacher")
                    {$id=$row['TID'];
                      $_SESSION['Tid']=$id;
                    header("location:hometeacher.php",true);
                  }
                  else if($type="student")
                    {$id=$row['SID'];
                      $_SESSION['Sid']=$id;
                    header("location:homestudent.php",true);
                  }
                }
              else
              {

                  header("location:login.php",true);
              
              }
            
          
    mysqli_close($conn);

  }
}
?>

