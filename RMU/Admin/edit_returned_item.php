<?php include('dbcon.php'); include('session.php');include('header.php');  $get_id=$_GET['id'];?>
<body>
 <?php include('nav-top.php'); ?>
    <div class="navbar navbar-fixed-top1">
        <div class="navbar-inner">
            <div class="container">
                <div class="marg">
                    <?php include_once 'links.php';?>
                </div>
            </div>
        </div>
    </div>
    <div class="">

        <div id="element" class="hero-body-add">



            <div class="alert alert-info">
                <h2>Edit 
                    <?php
                        $name_query=mysqli_query($conn,"select * from returned_by where employeeID='$get_id'")or die(mysqli_error());
                        $name_row=mysqli_fetch_array($name_query);
                        
                    ?>
                    Information
                </h2>  

                <div class="pull-right">
                    <a class="btn btn-success btn-large"  data-original-title="Add Employee?" href="returned_item_details.php">  <i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                    <script type="text/javascript">
                        jQuery(document).ready(function() {
                            $('#add').popover('show')
                            $('#add').popover('hide')

                        });
                    </script>

                </div> 
            </div>




            <!-- Para sa tabs -->



            <ul class="nav nav-tabs" id="myTab">
                <li class="active"><a href="#home"><font color="#5bc0de">Returned Item information</font></a></li>

            </ul>
            <form method="post" enctype="multipart/form-data">
                <div class="tab-content">

                    <div class="tab-pane active" id="home">

                        <div class="hero-unit">
                            <?php
                                include('add_edit_returned_item.php');  
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


<?php

    if (isset($_POST['save'])){
        $returned_id=$_POST['returned_id'];
        $item_condition=$_POST['item_condition'];
        $comment=$_POST['comment'];
        $employeeID=$_POST['employeeID'];
        $witness=$_POST['witness_id'];
        $issueBy=$_POST['admin_id'];
        $date=time();
        $returned="Item returned";
        
        mysqli_query($conn,"update returned_by set returned_id='$returned_id',item_condition='$item_condition', comment='$comment',employeeID='$employeeID',
            witness_id='$witness',date_returned='$date',returned='$returned' where returned_id='$get_id'")or die(mysqli_error());
        header('location:emp_profiles.php');
?>

<script>
                 function pageRedirect() {
                    window.location.replace("returned_item_details.php");
    }      
                        setTimeout("pageRedirect()", 1000);
                </script>
<?php
    }


?>