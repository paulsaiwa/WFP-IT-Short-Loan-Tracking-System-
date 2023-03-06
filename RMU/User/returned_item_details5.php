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

    <div id="element" class="hero-body-emp">


        <div class="alert alert-info">
            <h2>Returned Items details</h2>
        </div>

        <hr>

        <div class="pull-right">  

            <br>

            <a class="btn btn-primary btn-large" id="add"  data-content="Click here to Add Item" rel="popover" data-original-title="Add Item?" href="emp_add.php">  <i class="icon-plus-sign icon-large"></i>&nbsp;Register Item</a>
            <script type="text/javascript">
                jQuery(document).ready(function() {
                    $('#add').popover('show')
                    $('#add').popover('hide')

                });
            </script>
            <a class="btn btn-primary btn-large" id="add"  data-content="Click here to Add Personnel" rel="popover" data-original-title="Add Personnel?" href="itemNotReturned.php">  <i class="icon-plus-sign icon-large"></i>&nbsp;Not returned Item</a>
            <script type="text/javascript">
                jQuery(document).ready(function() {
                    $('#add').popover('show')
                    $('#add').popover('hide')

                });
            </script>

            <a class="btn btn-primary btn-large" id="add"  data-content="Click to see returned items" rel="popover" data-original-title="See returned Item?" href="home_user.php">  <i class="icon-plus-sign icon-large" ></i>&nbsp;Returned Item</a>
            <script type="text/javascript">
                jQuery(document).ready(function() {
                    $('#add').popover('show')
                    $('#add').popover('hide')

                });
            </script>
            

              
        </div>



       
        <!-- position sort -->
       








        <br>
 
      
         
        <table class="users-table">


        <div class="demo_jui">
            <table cellpadding="0" cellspacing="0" border="0" class="display" id="log" class="jtable">
                <thead>
                    <tr>
                       
                        <th>Returned Date</th>
                        <th>Item Condition</th>
                        <th>Additional details</th>
                        <th>Item status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>

                    <?php $emp_query=mysqli_query($conn,"select * from returned_by, user, employee WHERE user.User_id=employee.admin_id");
                        while($row=mysqli_fetch_array($emp_query)){ $id=$row['returned_id']; ?>

                        <tr class="del<?php echo $id ?>" style="text-align: center;">
                            <td><?php echo date('D d M', $row['date_returned']) ?></td> 
                            <td><?php echo $row['item_condition']; ?></td>
                            <td><?php echo $row['comment']; ?></td>
                            <td><?php echo $row['returned']; ?></td>
                                        

                            <td align="center" width="320">      
                                <script type="text/javascript">
                                    jQuery(document).ready(function() {
                                        $('#p<?php echo $id; ?>').popover('show')
                                        $('#p<?php echo $id; ?>').popover('hide')

                                    });
                                </script>


                                <a class="btn btn-success"  id="p<?php echo $id; ?>" data-content="Click here to Edit Employee" rel="popover" data-original-title="Edit?"  href="edit_returned_item.php<?php echo '?id='.$id; ?>"><i class="icon-edit icon-large"></i>&nbsp;Edit</a>&nbsp;
                                                            
                            </td>
                        </tr>
                        <?php }?>
                </tbody>
            </table>

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
        
        
        

