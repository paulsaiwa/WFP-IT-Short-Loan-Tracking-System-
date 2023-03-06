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

            <?php
             $edit_query=mysqli_query($conn,"select * from user where User_id='$id_session'")or die(mysqli_error());
                    //$row=mysqli_fetch_array($edit_query);
                   // $user=$row['fullname_user'];
            ?>
            <div class="alert alert-info">
                <h2>Add User</h2>
            </div>

            <hr>
            <div class="pull-right">
                <a class="btn btn-success btn-large" id="add"  data-content="Click here to return to User Account" data-original-title="Back?" rel="popover" href="user_account.php">  <i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                <script type="text/javascript">
                    jQuery(document).ready(function() {
                        $('#add').popover('show')
                        $('#add').popover('hide')

                    });
                </script>
            </div>
          


            <div class="hero-unit">
                <div class="hero-body-add-user">                 
                    <form class="form-horizontal" method="post">
                        <fieldset>
                            <div class="control-group">
                                <label class="control-label" for="input01">Username:</label>
                                <div class="controls">
                                    <input type="text" name="username" class="input-xlarge" id="input01"  placeholder="UserName" required autocomplete="off" autofocus="on" minlength="4" pattern="[a-zA-Z]+.[a-zA-Z].+@wfp\.org" title="Enter firstname and lastname">

                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label" for="input01">Password:</label>
                                <div class="controls">
                                    <input type="text" name="password" class="input-xlarge" id="input01"  placeholder="Password" required autocomplete="off" autofocus="on">

                                </div>
                            </div>

                             <div class="control-group">
                                <label class="control-label" for="input01">Index No:</label>
                                <div class="controls">
                                    <input type="text" name="index_no" class="input-xlarge" id="input01"  placeholder="Index No" required autocomplete="off" autofocus="on" required pattern="[0-9]+" minlength="8" maxlength="8">

                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label"  for="input01">Name:</label>
                                <div class="controls">
                                    <input type="text"  name="fullname_user" class="input-xlarge" id="input01"  placeholder="Full name" required autocomplete="off" autofocus="on" required pattern="[a-zA-Z]+[ ][a-zA-Z]+" title="Enter firstname and lastname">

                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label" for="input01">User Type:</label>
                                <div class="controls">
                                    <select class="span2" name="type" required autocomplete="off" autofocus="on" required>
                                        <option></option>
                                        <option>Admin</option>
                                        <option>User</option>
                                    </select>

                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label" for="input01">User status:</label>
                                <div class="controls">
                                    <select class="span2" name="status" required autocomplete="off" autofocus="on" required>
                                        <option></option>
                                        <option>Activate</option>
                                        <option>Deactivate</option>
                                    </select>

                                </div>
                            </div>

                            <div class="control-group">

                                <div class="controls">
                                    <button class="btn btn-primary btn-large" name="save"><i class="icon-save icon-large"></i>&nbsp;Save</button>

                                </div>
                            </div>

                        </fieldset>
                    </form>
                </div>
            </div>

            <?php
                if (isset($_POST['save'])){

                    $username=$_POST['username'];
                    $password=$_POST['password'];
                    $pass =md5($password);
                    $indexNo=$_POST['index_no'];
                    $fullname=$_POST['fullname_user'];
                    $status=$_POST['status'];
                    $type=$_POST['type'];
                    $authorise=$id_session;
                    $date=time();


                    mysqli_query($conn,"insert into user (UserName,Password,index_no, fullname_user,User_Type,date_registered,registered_by,status)
                        values ('$username','$pass','$indexNo','$fullname','$type','$date','$authorise','$status')
                        ") or die(mysqli_error()); 
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
        

    