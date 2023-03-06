<?php include('dbcon.php'); include('session.php');include('header.php'); ?>
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
        <div id="element" class="hero-body">


            <div class="alert alert-info">
                <h2>Edit User</h2>
            </div>


            <hr>
            <div class="pull-right">
                <a class="btn btn-success btn-large" id="add"  data-content="Click here to return to User Account" data-original-title="Back?" rel="popover" href="user_account.php">  <i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                <script type="text/javascript">
                    jQuery(document).ready(function() {
                        $('#add').popover('show')
                        $('#add').popover('hide')

                    });
                </script></div>



            <div class="hero-unit">
                <div class="hero-body-add-user">                 
                    <form class="form-horizontal" method="post">
                        <?php
                            $get_id=$_GET['id'];
                            $query_user=mysqli_query($conn,"select * from user where User_id='$get_id'")or die(mysqli_error());
                            $row=mysqli_fetch_array($query_user);
                        ?>
                        <fieldset>
                             <div class="control-group">
                                <label class="control-label" for="input01">Index No:</label>
                                <div class="controls">
                                    <input type="text" name="index_no" class="input-xlarge" id="input01"  value="<?php echo $row['index_no']; ?>">

                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label" for="input01">UserName:</label>
                                <div class="controls">
                                    <input type="text" name="username" class="input-xlarge" id="input01"  value="<?php echo $row['UserName']; ?>" required autocomplete="off" autofocus="on" minlength="4" pattern="[a-zA-Z]+.[a-zA-Z].+@wfp\.org" title="Enter firstname and lastname">

                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label" for="input01">Password:</label>
                                <div class="controls">
                                    <input type="text" name="password" class="input-xlarge" id="input01" value="<?php echo $row['Password']; ?>">

                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label"  for="input01">Name:</label>
                                <div class="controls">
                                    <input type="text"  name="fullname_user" class="input-xlarge" id="input01"  value="<?php echo $row['fullname_user']; ?>">

                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label" for="input01">User Type:</label>
                                <div class="controls">
                                    <select class="span2" name="User_Type">
                                        <option><?php
                                            echo $row['User_Type'];
                                        ?></option>
                                        <option>Admin</option>
                                        <option>User</option>
                                    </select>

                                </div>
                            </div>

                             <div class="control-group">
                                <label class="control-label" for="input01">Status:</label>
                                <div class="controls">
                                    <select class="span2" name="status">
                                        <option><?php
                                            echo $row['status'];
                                        ?></option>
                                        <option>On</option>
                                        <option>Off</option>
                                    </select>

                                </div>
                            </div>

                            <input type="hidden" name="date_registered" class="input-xlarge" id="input01" value="<?php echo $row['date_registered']; ?>">
                            <input type="hidden" name="registered_by" class="input-xlarge" id="input01" value="<?php echo $row['registered_by']; ?>">

                            <div class="control-group">

                                <div class="controls">
                                    <button class="btn btn-primary btn-large" name="save"><i class="icon-save icon-large"></i>&nbsp;Update</button>

                                </div>
                            </div>

                        </fieldset>
                    </form>
                </div>
            </div>

            <?php
                if (isset($_POST['save'])){
                    $indexNo=$_POST['index_no'];
                    $username=$_POST['username'];
                    $password=md5($_POST['password']);
                    $firstname=$_POST['fullname_user'];
                    $status=$_POST['status'];
                    $date2=$_POST['date_registered'];
                    $registered_by=$_POST['registered_by'];
                    $type=$_POST['User_Type'];

                    mysqli_query($conn,"update user set UserName='$username',
                        index_no='$indexNo',
                        Password='$password',
                        fullname_user='$firstname',
                        User_Type='$type',
                        date_registered='$date2',
                        registered_by='$registered_by',
                        status='$status'
                        where User_id='$get_id' ")or die(mysqli_error());

            ?>
                    <script>
                 function pageRedirect() {
                    window.location.replace("user_account.php");
                    }      
                        setTimeout("pageRedirect()", 1000);
                </script>
            <?php
    
                }
            ?>



        </div>    

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
        

    