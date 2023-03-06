<?php include('dbcon.php'); include('session.php');include('header.php');  $get_id=$_GET['id'];?>
<body>
 <?php include('nav-top.php'); ?>
    <div class="navbar navbar-fixed-top1">
        <div class="navbar-inner">
            <div class="container">
                <div class="marg">
                    <?php //include_once 'links.php';?>
                </div>
            </div>
        </div>
    </div>
    <div class="">

        <div id="element" class="hero-body-add">



            <div class="alert alert-info">
                <h2>Viewing
                    <?php
                        $name_query=mysqli_query($conn,"select * from employee where employeeID='$get_id'")or die(mysqli_error());
                        $name_row=mysqli_fetch_array($name_query);
                        echo $name_row['fname'];
                    ?>
                    Information
                </h2>  

                <div class="pull-right">
                    <a class="btn btn-success btn-large"  data-original-title="Back?" href="home.php">  <i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
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
                <li class="active"><a href="#home"><font color="#5bc0de">Item loaned Info</font></a></li>

            </ul>
            <form method="post" enctype="multipart/form-data">
                <div class="tab-content">

                    <div class="tab-pane active" id="home">

                        <div class="hero-unit">
                            <?php
                                include('show_user.php');  
                            ?>
                        </div>

                    </div> 

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
