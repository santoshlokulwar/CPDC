
<?php session_start();
            if(!isset($_SESSION['id']))
                {
                    
                      header("location:login.php",true);
                }
?>

<form action="Attendance.php" method="post">
<?php include('nav2.html');
include('config.php');
mysqli_select_db( $conn,"CPDC" );
$currentdate=date("Y-m-d");
$q="select * from eventlist where date<='$currentdate'";
$retval=mysqli_query($conn,$q);

            ?>


            <div class="main" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
            <div style="margin-top:2%; margin-right: 5%;">
                            <div class="col-sm-4">
                            </div>
                           <div class="col-sm-8" style="margin-top: 10%;">
                                                            <select required id="idselectsem" name="event" style="background:transparent;border:1px solid; font-color:black; color:black; padding: 10px;">
                                                                  <option selected >-Select Event-</option>
                                                              <?php   while($row = mysqli_fetch_assoc($retval)) { ?>
                                                              
                                                                <option value="<?php echo $row['EID']; ?>" ><?php echo $row['Topic']; ?></option>
                                                                
                                                                <?php } ?>
                                                            </select>
                                                            
                            </div>
                        

















<div class="col-sm-4">
</div>


<div class=" table-responsive col-sm-12" style="width:60%;float:;margin-top: 3%;margin-right: 1%; ">
            <table class="table table-striped table-hover " id="studtable" disable="true" style="border:1px solid;">
                <tbody>
                    <tr Style="background-color:#202727a8;color:#000000;">
                        <th>Sr.No.</th>
                        <th>SID</th>
                        <th>NAME &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                        &nbsp;</th>
                        <th>Select</th>
                       
                    </tr>
<?php 
$ay=date("Y");
$y=substr($ay,2);
$y++;
$q="select * from student where academicyear='$ay$y'";
$retval=mysqli_query($conn,$q);

        while($row = mysqli_fetch_assoc($retval)) { ?>
                        <tr>
                            <td><?php  echo $row['SrNo.']?></td>
                            <td><?php  echo $row['SID']?></td>
                            <td><?php  echo $row['Name']?></td>
                            <td><input type="checkbox" name="check_list[]" value="<?php  echo $row['SID']?>"></td>
                        </tr>
                    <?php } ?>

                </tbody></table>


       
         <input type="submit" name="submit1" value="SUBMIT" class="btn" style="margin-top: 1%;margin-left:83%;background-color: #f44336;
                                color: white;
                                padding: 12px 25px;
                                text-align: center;
                                text-decoration: none;
                                display: inline-block;
                                width:130px;">

 </div>
<?php
    if(isset($_POST['submit1']))
{$event=$_POST['event'];
 if(!empty($_POST['check_list']))
 {
// Loop to store and display values of individual checked checkbox.
        foreach($_POST['check_list'] as $selected)
        {
        $q="update attendance_event set PA='1' where (EID='$event' AND SID='$selected')";
        $q1="insert into feedback_event(EID,SID) values('$event','$selected')";
        $r=mysqli_query($conn,$q);
        $r1=mysqli_query($conn,$q1);
        }
 }   
 
       
} ?>
    
                   </form>
               </div>

        <?php mysqli_close($conn);?>
