<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<title>Chat - Customer Module</title>

<link type="text/css" rel="stylesheet" href="<?=ADMIN_URL?>assets/css/stylechat.css" />
<style type="text/css">
  #chatwindow2{
    height:330px;
  }
</style>
</head>
<?php 
    include_once 'header_h.php';
    include_once 'roles.php';
    
 ?>
 <?php
include_once 'config/config.php';

  $id=$_GET['id'];
  $stts=1;
  //echo $id;
  $q1="update chat set status='$stts' WHERE from_id='$id'";
    $status1=mysqli_query($connection_obj,$q1);


?>
 <?php


include_once 'config/config.php';



  ///$cid=$_GET['id'];
  //$_SESSION['cid']=$cid;
  $id=$_GET['id'];
     
$q="SELECT * from chat";
 $status = mysqli_query($connection_obj,$q);
       
            
             
             if($status)
            {
            
              $data = mysqli_fetch_assoc($status);
            }
$ch=$_GET['id'];

$q1="SELECT * from employee where Employee_id='$ch'";
 $status3 = mysqli_query($connection_obj,$q1);
       
            
             
             if($status3)
           {
            
              $data3 = mysqli_fetch_assoc($status3);
            }






$p="SELECT * from chat_theme";
 $status1 = mysqli_query($connection_obj,$p);
       
            
             
             if($status1)
        {
            
              $data1 = mysqli_fetch_assoc($status1);
            }

  
       //$cnm=$_SESSION['cnm'];
           // $id=$_SESSION['cid'];

$url  = "chat_send.php?id=".$_GET['id'];

?>
 <form action="<?php echo $url;?>" method="post">
 
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>CHAT</h2>
            </div>
            <!-- Input --><center>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                    <div class="body">
                         <div class="row clearfix">
                
                                    
                               
                        <input type="hidden" name="id" class="form-control" value="<?php echo $_GET['id']; ?>"/>

                            
        <div style="margin-left:90% " ><input class="btn btn-primary waves-effect" name="back" type="submit" value="BACK" formaction="./emp_chat.php" ></div>



        <!--<div style="margin-left:60% " ><input class="btn btn-primary waves-effect" name="back" type="file" value="Change theme" formaction="./chat_theme.php" ></div>-->



        <div  id="chatwindow"  style="background-image : url(<?=ADMIN_URL?>assets/images/s2.png);width:530px;border:3px solid #2196F3;padding:10px;border-radius:50px 50px 50px 50px">
        <!--<h2>Welcome, <?php echo $_SESSION['emp_name']."->".$data3['Employee_name']; ?>
        </h2>-->
        <div style="margin-right:350px"><h4><?php echo $data3['Employee_name']; ?></h4></div>
        <div id="page-wrap">
        <p id="name-area"></p>
 
                    <div  id="chatwindow2"    style="background-image : url(<?=ADMIN_URL?>assets/images/s1.png);
overflow-Y:auto;margin:0 auto;
                    margin-bottom:25px;padding:10px;
                     width:490px;border:1px solid #ACD8F0;position:bottom">

  

                    <?php 
            $n=$_SESSION['employee_id'];
            

            while($data=mysqli_fetch_assoc($status))
            {
                ?>
                
                <?php
                echo "\n\n\n";
                if($data['to_id']==$n && $data['from_id']==$id)
                {
                    // <p align="right"> <?php
                    ?>                                                                   <!--      1   2   4   3-->
                    <div style="background:rgb(126,245,186);color:black;margin-right:60%;text-align:left;border-radius:5px 50px 50px 5px">
                    <?php 
                    
                    echo $data['message'];
                     ?> 
                    </div>

                  <?php  
                  echo "\n\n\n";
                }
                
                if($data['from_id']==$n && $data['to_id']==$id)
                {
                    ?>
                    <div style="background:rgb(126,245,186);color:black;margin-left:60%;text-align:right;border-radius:50px 5px 5px 50px">
                    <?php
                    
                    echo $data['message']." ";
                    if($data['status']==1)
                    {
                      echo "<br><font color='brown'><small>R</small></font>";
                    }
                    ?> </div>

                    <?php
                    
                    
                    
                }
                                                     
            }
            ?>
                
             </div>
            
            <textarea id="sendie" name="mymsg" maxlength = "500"  rows="3" cols="50"  placeholder="Start typing..."></textarea>
			
            <br>
            <br>
            <!--<butoon class="btn btn-info btn-circle-lg waves-effect waves-circle' waves-float" name="submit" type="submit" >
             <i class='material-icons'>send</i>
             </button>-->
            <input class="btn btn-primary waves-effect" name="submit" type="submit" value="SEND" >
        </form>
   </div>
        </div> </div>
         </div>

<script type="text/javascript">
    var myDiv = document.getElementById('chatwindow2');
    myDiv.scrollTop = 330;

</script>
<?php 
    include_once 'footer_h.php';
 ?>