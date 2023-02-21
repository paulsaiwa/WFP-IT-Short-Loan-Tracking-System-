<?php include('dbcon.php'); include('session.php');include('header.php'); 
    $get_id=$_GET['id'];
        $edit_query=mysqli_query($conn,"select * from user where User_id='$id_session'")or die(mysqli_error());
                                
        
?>
<body>
    <?php include('nav-top.php'); ?>
    <div class="navbar navbar-fixed-top1 " id="top1">
        <div class="navbar-inner">
            <div class="container">
                <div class="marg">
                    <?php include_once 'links.php';?>
                </div>
            </div>
        </div>
    </div>

    <div class="" >

        <div id="element" class="hero-body-leave">


            <div class="alert alert-info">
                <?php
                    $leave_query=mysqli_query($conn,"select * from employee where employeeID='$get_id'")or die(mysqli_errno());
                    $row=mysqli_fetch_array($leave_query);
                    $member_id=$row['employeeID'];
                ?>
                <h2>Item returned by <?php echo $row['fname']; ?></h2>

                <div class="pull-right">
                <a class="btn btn-success btn-large"  data-original-title="Add Employee?" href="emp_profiles_user.php">  <i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                  </div>
            </div>

       

            <div class="hero-body-add-user">                 
                <form class="form-horizontal" method="post">
                    <fieldset>

                        <input type="Hidden" name="name" value="<?php echo $member_id; ?>" >
                        <div class="control-group">
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="input01">Item condition:</label>
                            <div class="controls">
                                <select name="item_condition" class="input-xlarge" id="input01" required autocomplete="off" autofocus="on" >
                                    <option></option>
                                    <option>Good</option>
                                    <option>Not good</option>
                                </select>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="input01">Additional details:</label>
                            <div class="controls">
                                <textarea type="text" name="comment" class="input-xlarge" id="input01"  placeholder="Additional details" required autocomplete="off" autofocus="on"></textarea>

                            </div>
                        </div>

                        <div class="control-group">

                            <div class="controls">


                                <?php
                                $edit_query=mysqli_query($conn,"select * from user where User_id='$id_session'")or die(mysqli_error());
                                $edit_query=mysqli_query($conn,"select * from employee where employeeID='$get_id'")or die(mysqli_error());
                                $row=mysqli_fetch_array($edit_query);
                                ?>

                                <input type="hidden" value="<?php echo  $row['admin_id']; ?>"  name="admin_id" class="input-xlarge" id="input01"  autocomplete="off">
                                <input type="hidden" value="<?php echo  $row['date_posted']; ?>"  name="date_posted" class="input-xlarge" id="input01"  autocomplete="off">
                                <input type="hidden" value="<?php echo  $row['index_No']; ?>"  name="index_No" class="input-xlarge" id="input01"  autocomplete="off">

                           
                                <input type="hidden" value="<?php echo  $row['fname']; ?>"  name="fname" class="input-xlarge" id="input01" autocomplete="off" >

                            
                                <input type="hidden"  name="phone" value="<?php echo  $row['phone']; ?>" class="input-xlarge" id="input01" autocomplete="off" >

                          
                                <input type="hidden" class="input-xlarge" value="<?php echo  $row['item_description']; ?>"  name="item_description" id="input01" autocomplete= "off">

                            
                                <input type="hidden" class="input-xlarge" value="<?php echo  $row['tagNo']; ?>"  name="tagNo" id="input01" autocomplete="off">

                            </div>     
                        </div>

                                <button name="save" class="btn btn-large">Returned/Confirmed</button>

                            </div>
                        </div>

                    </fieldset>
                </form>
            </div>
        </div>


        <?php

            include('dbcon.php');    
            if (isset($_POST['save'])){


                $admin_id=$id_session;
                $emp_id=$get_id;
                $comment=$_POST['comment'];
                $item_condition=$_POST['item_condition'];
                $date1 = time();
                $returned1 ="Item returned";

                        $indexNo=$_POST['index_No'];
                        $fname=$_POST['fname'];
                        $phone=$_POST['phone'];
                        $item_description=$_POST['item_description'];
                        $tagNo=$_POST['tagNo'];
                        $returned="void";
                        $issueBy=$_POST['admin_id'];
                        $date=$_POST['date_posted'];
                            mysqli_query($conn,"update employee set index_No='$indexNo',fname='$fname',phone='$phone',
                            item_description='$item_description',tagNo='$tagNo',returned_by='$returned',
                            admin_id='$issueBy',date_posted='$date' where employeeID='$get_id'")or die(mysqli_error());

                mysqli_query($conn,"insert into returned_by (`item_condition`,`comment`,`employeeID`,`witness_id`, `date_returned`,`returned`) 
                values('$item_condition','$comment','$emp_id', '$admin_id','$date1','$returned1')")or die(mysqli_error());

                ?>
                <script>
                 function pageRedirect() {
                    window.location.replace("home_user.php");
    }      
                        setTimeout("pageRedirect()", 1000);
                </script>
        <?php
            }

        ?>

                        
                               

                              

<?php include('footer.php');?>
    </div>
</body>
<div class="modal hide fade" id="myModal">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">?</button>
        <h3> </h3>
    </div>
    <div class="modal-body">
        <p><font color="gray">Are You Sure you Want to LogOut?</font></p>
    </div>
    <div class="modal-footer">
        <a href="#" class="btn" data-dismiss="modal">No</a>
        <a href="logout.php" class="btn btn-primary">Yes</a>
    </div>
        </div>
        
        

    