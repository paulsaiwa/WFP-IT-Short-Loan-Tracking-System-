<div class="row-fluid">
    <div class="span12">
        <div class="row-fluid">
            <div class="span6">

            <?php
             $edit_query=mysqli_query($conn,"select * from user where User_id='$id_session'")or die(mysqli_error());
                $edit_query=mysqli_query($conn,"select * from employee where employeeID='$get_id'")or die(mysqli_error());
                $row=mysqli_fetch_array($edit_query);
                
                
            ?>
            
            
                <div class="form-horizontal">
                    <fieldset>
                            
                         <div class="control-group">
                            <label class="control-label" for="input01">Index No:</label>
                            <div class="controls">
                                <input type="text" value="<?php echo  $row['index_No']; ?>"  name="index_No" class="input-xlarge" id="input01"  autocomplete="off">

                            </div>     
                        </div>
                    
                        <div class="control-group">
                            <label class="control-label" for="input01">Staff name:</label>
                            <div class="controls">
                                <input type="text" value="<?php echo  $row['fname']; ?>"  name="fname" class="input-xlarge" id="input01" autocomplete="off" >

                            </div>     
                        </div>

                        <div class="control-group">
                            <label class="control-label"  for="input01">Phone:</label>
                            <div class="controls">
                                <input type="text"  name="phone" value="<?php echo  $row['phone']; ?>" class="input-xlarge" id="input01" autocomplete="off" >

                            </div>     
                        </div>



                        <div class="control-group">
                            <label class="control-label" for="input01">Item Description:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" value="<?php echo  $row['item_description']; ?>"  name="item_description" id="input01" autocomplete= "off">

                            </div>     
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="input01">Tag / Inventory No:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" value="<?php echo  $row['tagNo']; ?>"  name="tagNo" id="input01" autocomplete="off">

                            </div>     
                        </div>

                        <div class="control-group">
                            
                            <div class="controls">
                                <input type="hidden" class="input-xlarge" value="<?php echo  $row['returned_by']; ?>"  name="returned_id" id="input01" autocomplete="off">
                                <input type="hidden" class="input-xlarge" value="<?php echo  $row['admin_id']; ?>"  name="admin_id" id="input01" autocomplete="off">
                                <input type="hidden" class="input-xlarge" value="<?php echo  $row['date_posted']; ?>"  name="date_posted" id="input01" autocomplete="off">

                            </div> 

                        </div>
                    </fieldset>
                </div>

            </div>
           


            </div>
        </div>
    </div>                                   
                        </div>
                        
                 