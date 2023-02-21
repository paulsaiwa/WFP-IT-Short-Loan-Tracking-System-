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
            <h2>Personnel List</h2>
        </div>

        <hr>

        <div class="pull-right">  
            <a class="btn btn-primary btn-large" id="add"  data-content="Click here to Add Personnel" rel="popover" data-original-title="Add Personnel?" href="emp_add.php">  <i class="icon-plus-sign icon-large"></i>&nbsp;Add Personnel</a>
            <script type="text/javascript">
                jQuery(document).ready(function() {
                    $('#add').popover('show')
                    $('#add').popover('hide')

                });
            </script>
            <a href="user_account.php" class="btn btn-large"><i class="icon-user icon-large"></i>&nbsp;View User Account</a>







        </div>



        <form method="post" action="sort.php">

            <select name="sort" class="span4">
                <option>Sort Personnel by School</option>

                <?php
                    $while_query=mysqli_query($conn,"select * from school")or die(mysqli_error());
                    while($row=mysqli_fetch_array($while_query)){
                    ?>

                    <option><?php echo $row['Name'];?></option>


                    <?php }; ?>
            </select>          
            <button name="filter" class="btn btn-success"><i class="icon-filter icon-large"></i>&nbsp;Sort</button>
        </form>

        <!-- position sort -->
        <form method="post" action="sort1.php">

            <select name="position" class="span4">
                <option>Sort Personnel by Position</option>

                <?php
                    $while_query=mysqli_query($conn,"select * from position")or die(mysqli_error());
                    while($row=mysqli_fetch_array($while_query)){
                    ?>

                    <option><?php echo $row['position'];?></option>


                    <?php }; ?>
            </select>          
            <button name="filter1" class="btn btn-success"><i class="icon-filter icon-large"></i>&nbsp;Sort</button>
        </form>

        <!--- Qualification -->
        <form method="post" action="sort2.php">

            <select name="qualification" class="span4">
                <option>Sort Personnel by Qualification</option>

                <?php
                    $while_query=mysqli_query($conn,"select * from qualification")or die(mysqli_error());
                    while($row=mysqli_fetch_array($while_query)){
                    ?>

                    <option><?php echo $row['qualification'];?></option>


                    <?php }; ?>
            </select>          
            <button name="filter2" class="btn btn-success"><i class="icon-filter icon-large"></i>&nbsp;Sort</button>
        </form>







        <br>


        <table class="users-table">


        <div class="demo_jui">
            <table cellpadding="0" cellspacing="0" border="0" class="display" id="log" class="jtable">
                <thead>
                    <tr>
                        <th>FirstName</th>
                        <th>LastName</th>
                        <th>MiddleName</th>
                        <th>Sex</th>
                        <th>Photo</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                
             <?php if (isset($_POST['search'])){
             $search=$_POST['search'];    
              ?>  

                    <?php $emp_query=mysqli_query($conn,"select * from employee where FirstName like '%$search%'");
                           $count=mysqli_num_rows($emp_query);
              if ($count > 0 ){
                        while($row=mysqli_fetch_array($emp_query)){ $id=$row['employeeID']; ?>

                   <tr class="del<?php echo $id ?>">
                            <td><?php echo $row['FirstName']; ?></td>
                            <td><?php echo $row['LastName']; ?></td>
                            <td><?php  echo $row['MiddleName']?></td>
                            <td><?php echo $row['Sex'] ?></td>
                            <td align="center"><img width="40" height="30" src="<?php echo $row['location'];?>" border="0" onmouseover="showtrail('<?php echo $row['location'];?>','<?php echo $row['FirstName']." ".$row['LastName'];?> ',200,5)" onmouseout="hidetrail()"></a></td>

                            <td align="center" width="320">      
                                <script type="text/javascript">
                                    jQuery(document).ready(function() {
                                        $('#p<?php echo $id; ?>').popover('show')
                                        $('#p<?php echo $id; ?>').popover('hide')

                                    });
                                </script>


                                <a class="btn btn-success"  id="p<?php echo $id; ?>" data-content="Click here to Edit Employee" rel="popover" data-original-title="Edit?"  href="edit_emp.php<?php echo '?id='.$id; ?>"><i class="icon-edit icon-large"></i>&nbsp;Edit</a>&nbsp;
                                <a class="btn btn-danger1" data-toggle="modal" href="#d<?php echo $id; ?>">  <i class="icon-trash icon-large"></i>&nbsp;Delete</a>
                                <?php
                                    include('button_delete.php');
                                ?>
                                <a class="btn btn-warning"  data-toggle="modal" href="#<?php echo $id; ?>" ><i class="icon-list icon-large"></i>&nbsp;View</a>
                                <?php
                                    include('button_view.php');
                                ?>
                                <a class="btn "  data-toggle="modal" href="#a<?php echo $id; ?>" ><i class="icon-plus icon-large"></i>&nbsp;Add</a>
                                <?php
                                    include('button_add.php');
                                ?>
                            </td>
                        </tr>
                        <?php }}}?>
                </tbody>
            </table>

        </div>


        <?php include('footer.php');?>
    </div>
</body>
<div class="modal hide fade" id="myModal">
    <div class="modal-header">
       
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
        
        

    