<?php session_start();
    if(!isset($_SESSION['id'])){
        header("location:login.php",true);
    }
?>
<form action="addstudent.php" method="post">
    <?php 
        include('nav2.html');
        include('config.php');
        mysqli_select_db( $conn,"CPDC" );
        $currentdate = date("Y-m-d");
        $q="select * from eventlist where date>='$currentdate'";
        $retval = mysqli_query($conn,$q);
    ?>
    <div style="margin-top:2%; margin-right: 5%;">
        <div class="col-sm-6">
            <div class="col-sm-12" style="margin-top: 10%;">
                <select required id="idselectsem" name="event" style="background:transparent;border:1px solid; font-color:black; color:black; padding: 10px;float: ;">
                    <option selected >-Select Event-</option>
                    <?php   while($row = mysqli_fetch_assoc($retval)) { ?>
                    <option value="<?php echo $row['EID']; ?>" ><?php echo $row['Topic']; ?></option>
                     <?php } ?>
                </select>
            </div>
            <div class="col-sm-12" style="margin-top: 10%;">
                <a href="Event.php"  class="btn" style="background-color: #f44336;
                    color: white;
                    padding: 15px 25px;
                    text-align: center;
                    text-decoration: none;
                    display: inline-block;
                    width:130px;
                    float:left;
                    margin-top: 1%;
                    margin-left: 1%;
                        
                    "> 
                <span class="glyphicon glyphicon-arrow-left"></span></a>
            </div>
        </div>
        <div CLASS="col-sm-6">
            <div class=" table-responsive" style="width:90%;float:left;border:1px solid;margin-top: 10%;margin-right: 1%; margin-left: 5%;">
                <table class="table table-striped table-hover " id="studtable" disable="true">
                    <tbody>
                    <tr Style="background-color:#202727a8;color:#000000;">
                        <th>Sr.No.</th>
                        <th>SID</th>
                        <th>NAME</th>
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

                    </div>
                        <input type="submit" name="submit1" value="SUBMIT" class="btn" style="margin-top: 1%;margin-left: 10%;background-color: #f44336;
                                            color: white;
                                            padding: 12px 25px;
                                            text-align: center;
                                            text-decoration: none;
                                            display: inline-block;
                                            width:130px;">
                    <?php  


            if(isset($_POST['submit1']))
            {$event=$_POST['event'];
            if(!empty($_POST['check_list']))
            {
            // Loop to store and display values of individual checked checkbox.
                    foreach($_POST['check_list'] as $selected)
                    {
                    $q="insert into attendance_event(EID,SID) values('$event','$selected')";
                    
                    $r=mysqli_query($conn,$q);
                    
            }
                    if($r)
                        echo  "<script>alert('Students Added Successfully')</script>";
                    else
                        echo  "<script>alert('Not Submited')</script>";
                    }
            } ?>
                </div>
            </div>

                    <div class="">
                            <div class="col-sm-4">
                            </form>
                        

                    <?php mysqli_close($conn);?>
