<html>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <h1><center>
        <form action="#" method="post">
            &#9783; You accept the request &#9783;<br><br>
            <input class="btn btn-primary waves-effect" name="close" type="submit" value="CLOSE" formaction="./Accept_Reject.php">
        </form>
    </center>

    <?php
    include_once 'config/config.php';
    var_dump($_POST);

    //$lreason=$_POST['leavereason'];
    $superid=$_SESSION['employee_id'];
    //$lr=$_SESSION['lr'];
    $stts=1;
    $eid=$_GET['id'];
    $mymsg='We have accepted your leave';
    $ctime=date("h:i:s");
    $cstts="2";

    echo "$mymsg";
    $q="INSERT INTO `chat`(`from_id`, `to_id`, `message`, `chattime`, `status`) VALUES ('$superid','$eid','$mymsg','$ctime','$cstts')";

    //sir-----------------------------------------------------------------------------------------------------------------------------
    //update leave status on emp leave table  
    //check on dashboard for next date leave 
    // if reject request then open modal

    if(mysqli_affected_rows($connection_obj) > 0) {
        $employee_data = mysqli_fetch_assoc($connection_obj);
    } else {
        echo "insert error";
    }        

    $status = mysqli_query($connection_obj, $q);
    if($status) {
        header("location:./Accept_Reject.php");
    } else {
        echo "insert error";
    }

    $p="UPDATE employee_leaves SET Action_taken_by_id='$superid' , Status='$stts' WHERE Employee_id='$eid'";

    $status1 = mysqli_query($connection_obj, $p);
    if($status1) {
        header("location:./Accept_Reject.php");
    } else {
        echo "insert error";
    }
    ?>
    </html>
