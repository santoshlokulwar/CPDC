 
<?php include('nav2.html');

?>

 <div class=" table-responsive" style="width:90%;float:left;border:1px solid;margin-top: 1%;margin-right: 1%; margin-left: 5%;">
            <table class="table table-striped table-hover ">
                <tbody>
                    <tr Style="background-color:#202727a8;color:#000000;">
                        <th>Sr.No.</th>
                        <th>EID</th>
                        <th>Topic</th>
                        <th>Name of Resource Person</th>
                        <th>Venue&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                        <th>Date&nbsp;&nbsp;&nbsp;&nbsp;</th>
                        <th>Time &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                        <th>For Who&nbsp;&nbsp;&nbsp;&nbsp;</th>
                        <th>Expected Outcome</th>
                        <th>Objective</th>
                    </tr>
<?php 
include('config.php');
mysqli_select_db( $conn,"CPDC" );
$q="select * from eventlist";
$retval=mysqli_query($conn,$q);

        while($row = mysqli_fetch_assoc($retval)) { ?>
                        <tr>
                            <td><?php  echo $row['SrNo.']?></td>
                            <td><?php echo $row['EID']; ?></td>
                            <td><?php echo $row['Topic']; ?></td>
                            <td><?php echo $row['Nameofresourceperson']; ?></td>
                            <td><?php echo $row['venue']; ?></td>
                            <td><?php echo $row['Date']; ?></td>
                            <td><?php echo $row['Time']; ?></td>
                            <td><?php echo $row['Forwho']; ?></td>
                            <td><?php echo $row['Expectedoutcome']; ?></td>
                            <td><?php echo $row['Objective']; ?></td>
                        </tr>
                    <?php } ?>

                </tbody></table>
        </div>

         <div class="">
                <div class="col-sm-4">
                    <a href="Event.php" style="background-color: #f44336;
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