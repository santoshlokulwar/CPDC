<?php session_start();
            if(!isset($_SESSION['id']))
                {
                    
                     header("location:login.php",true);
                    
                }
?>

 
<?php include('nav2.html');

?>

 <div class=" table-responsive" style="width:90%;float:left;border:1px solid;margin-top: 1%;margin-right: 1%; margin-left: 5%;">
            <table class="table table-striped table-hover ">
                <tbody>
                    <tr Style="background-color:#202727a8;color:#000000;">
                        <th>Sr.No.</th>
                        <th>PID</th>
                        <th>Nameoftrainingprogram</th>
                        <th>Nameoftrainingperson</th>
                        <th>venue</th>
                        <th>forwho</th>
                        <th>datefrom</th>
                        <th>dateto</th>
                        <th>timefrom</th>
                        <th>timeto</th>
                        <th>Expected Outcome</th>
                        <th>Objective</th>
                    </tr>

                    
<?php 
include('config.php');
mysqli_select_db( $conn,"CPDC" );
$q="select * from programlist";
$retval=mysqli_query($conn,$q);

        while($row = mysqli_fetch_assoc($retval)) { ?>
                        <tr>
                            <td><?php  echo $row['SrNo.']?></td>
                            <td><?php echo $row['PID']; ?></td>
                            <td><?php echo $row['Nameoftrainingprogram']; ?></td>
                            <td><?php echo $row['Nameoftrainingperson']; ?></td>
                            <td><?php echo $row['venue']; ?></td>
                            <td><?php echo $row['forwho']; ?></td>
                            
                            <td><?php echo $row['datefrom']; ?></td>
                            <td><?php echo $row['dateto']; ?></td>
                            <td><?php echo $row['timefrom']; ?></td>
                            <td><?php echo $row['timeto']; ?></td>
                            
                            <td><?php echo $row['Expectedoutcome']; ?></td>
                            <td><?php echo $row['objective']; ?></td>
                        </tr>
                    <?php } ?>

                </tbody></table>
        </div>
        <div class="">
                <div class="col-sm-4">
                    <a href="Program.php" style="background-color: #f44336;
    color: white;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    width:130px;
    float:left;
    margin-top: 1%;
    margin-left: 13%;
     
    "> <span class="glyphicon glyphicon-arrow-left"></a>
                </div>


        <?php mysqli_close($conn);?>