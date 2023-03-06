<style type="text/css">
    #check100
    {
        border-color: darkred;
        width: 500px;
        background-color: whitesmoke;
        border-radius: 10PX;
    }
    #check101
    {
        background-color: whitesmoke;
        float: right;
        margin-top: -35%;
        margin-right: -80%;
        width: 500px;
        border-radius: 10px;
    }

    #check102
    {
        
        
    }

</style>
<div class="row-fluid">
    <div class="span12">
        <div class="row-fluid">
            <div class="span6">

            <?php
             $edit_query=mysqli_query($conn,"select * from user where User_id='$id_session'")or die(mysqli_error());
                $edit_query=mysqli_query($conn,"select * from employee ,user , returned_by  where employee.employeeID='$get_id' AND employee.employeeID=returned_by.employeeID AND user.User_id=employee.admin_id")or die(mysqli_error());
                $row=mysqli_fetch_array($edit_query);
                
                
            ?>
            
            
                <div class="form-horizontal">
                    <fieldset>
                    <table id="check100">
                        <tr >
                            <p style="font-size:23px; color: black;">Borrowed details</p>
                        </tr>
                        <tr>
                            <td><label class="control-label" for="input01" style="color: salmon;">Index number</label></td>
                            <td><div class="controls">
                                <?php echo  $row['index_No']; ?>

                            </div> </td>
                        </tr>

                        <tr>
                            <td><label class="control-label" for="input01" style="color: salmon;">Contact number</label></td>
                            <td><div class="controls">
                                <?php echo  $row['phone']; ?>

                            </div> </td>
                        </tr>

                        <tr>
                            <td><label class="control-label" for="input01" style="color: salmon;">Item description</label></td>
                            <td><div class="controls">
                                <?php echo  $row['item_description']; ?>

                            </div> </td>
                        </tr>

                        <tr>
                            <td><label class="control-label" for="input01" style="color: salmon;">Inventor/Tag number</label></td>
                            <td><div class="controls">
                                <?php echo  $row['tagNo']; ?>

                            </div> </td>
                        </tr>

                        <tr>
                            <td><label class="control-label" for="input01" style="color: salmon;">Serial number</label></td>
                            <td><div class="controls">
                                <?php echo  $row['serial_no']; ?>

                            </div> </td>
                        </tr>

                        <tr>
                            <td><label class="control-label" for="input01" style="color: salmon;">Item Issued by</label></td>
                            <td><div class="controls">
                                <?php echo  $row['fullname_user']; ?>

                            </div> </td>
                        </tr>

                        <tr>
                            <td><label class="control-label" for="input01" style="color: salmon;">Date borrowed</label></td>
                            <td><div class="controls">
                                <?php echo date('D d M', $row['date_posted']) ?>

                            </div> </td>
                        </tr>
                    </table>

                    <table id="check101">
                        <tr>
                            <th>
                                <h3 class="control-label" for="input01" >Return details</h3>
                            </th>
                        </tr>

                        <tr>
                            
                            <td><label class="control-label" for="input01" style="color: salmon;">Item Status</label></td>
                            <td><div class="controls">
                                <?php echo  $row['returned']; ?>

                            </div> </td>
                        </tr>

                        <tr>
                            <td><label class="control-label" for="input01" style="color: salmon;">Returned date</label></td>
                            <td><div class="controls">
                                <?php echo date('D d M', $row['date_posted']) ?>

                            </div> </td>
                        </tr>

                        <tr>
                            <td><label class="control-label" for="input01" style="color: salmon;">Item condition</label></td>
                            <td><div class="controls">
                                <?php echo  $row['item_condition']; ?>

                            </div> </td>
                        </tr>

                        <tr>
                            <td><label class="control-label" for="input01" style="color: salmon;">Comment</label></td>
                            <td><div class="controls">
                                <?php echo  $row['comment']; ?>

                            </div> </td>
                        </tr>

                        <tr>
                            <td><label class="control-label" for="input01" style="color: salmon;">Item received by</label></td>
                            <td><div class="controls">
                                <?php echo  $row['witness_id']; ?>

                            </div> </td>
                        </tr>

                        

                        <tr>
                            <td><label class="control-label" for="input01" style="color: salmon;">Date borrowed</label></td>
                            <td><div class="controls">
                                <?php echo date('D d M', $row['date_returned']) ?>

                            </div> </td>
                        </tr>
                    </table>
                </fieldset>
                    
                </div>

            </div>
           


            </div>
        </div>
    </div>                                   
                        </div>
                        
                 