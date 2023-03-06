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
        <?php
             $edit_query=mysqli_query($conn,"select * from user where User_id='$id_session'")or die(mysqli_error());
                                
            ?>

        <div id="element" class="hero-body-add">



            <div class="alert alert-info">
                <h2>Add Details</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success btn-large"  data-original-title="Add Employee?" href="home_user.php">  <i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                <script type="text/javascript">
                    jQuery(document).ready(function() {
                        $('#add').popover('show')
                        $('#add').popover('hide')

                    });
                </script>
                
            </div>

            <br>
            <br>
            <br>

            <!-- Para sa tabs -->



            <ul class="nav nav-tabs" id="myTab">
                <li class="active"><a href="#home"><font color="#5bc0de">Loan form</font></a></li>
            
            </ul>
            <form method="post" enctype="multipart/form-data">
                <div class="tab-content">

                    <div class="tab-pane active" id="home">

                        <div class="hero-unit">
                            <?php
                                include('add_per_info.php');  
                            ?>
                        </div>

                    </div>
         



                    <center>
                        <button class="btn btn-primary btn-large" name="save"><i class="icon-save icon-large"></i>&nbsp;Save</button>
                    </center>   

                </div>   
            </form>

            <script>

                jQuery(document).ready(function() {
                    $('#myTab a').click(function (e) {
                        e.preventDefault();
                        $(this).tab('show');
                    })

                    $(function () {
                        $('#myTab a:first').tab('show');
                    })
                })
            </script>


            <!-- end ka tab -->







        </div>  

        <?php include('footer.php');?>
    </div>
</body>
<div class="modal hide fade" id="myModal">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">�</button>
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


<?php

    if (isset($_POST['save'])){
        $indexNo=$_POST['index_No'];
        $serial_no=$_POST['serial_no'];
        $firstname=$_POST['fname'];
       $phone='+'.$_POST['phone'];
        $item_description =$_POST['item_description'];
        $tagNo=$_POST['tagNo'];
        $returned="Not yet returned";
        $witness =$id_session;
        $date = time();
        
        
        mysqli_query($conn,"insert into employee (index_No,serial_no, fname,phone,item_description,tagNo,returned_by,admin_id, date_posted
        )
            values ('$indexNo','$serial_no', '$firstname','$phone','$item_description','$tagNo','$returned','$witness','$date'
            )

            ") or die(mysqli_error());
         
                echo('<script>location.href = "emp_add.php";</script>');
                // header('location:emp_profiles.php');
   
    }


?>