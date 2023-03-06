<div class="row-fluid">
    <div class="span12">
        <div class="row-fluid">
            <div class="span6">

            <?php
             $edit_query=mysqli_query($conn,"select * from user where User_id='$id_session'")or die(mysqli_error());
                $edit_query=mysqli_query($conn,"select * from returned_by where returned_id='$get_id'")or die(mysqli_error());
                $row=mysqli_fetch_array($edit_query);
                
                
            ?>
            
            
                <div class="form-horizontal">
                    <fieldset>
                            <div class="control-group">
                            <label class="control-label" for="input01">Item condition:</label>
                            <div class="controls">
                                <select name="item_condition" class="input-xlarge" id="input01" required autocomplete="off" autofocus="on" >
                                    <option><?php echo  $row['item_condition']; ?></option>
                                    <option>Good</option>
                                    <option>Not good</option>
                                </select>
                                

                            </div>     
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="input01">Additional details:</label>
                            <div class="controls">
                                <textarea name="comment"  class="input-xlarge" id="input01" required autocomplete="off"  > <?php echo  $row['comment']; ?></textarea>
                                

                            </div>     
                        </div>

                        <div class="control-group">
                            
                            <div class="controls">
                                <input type="hidden" class="input-xlarge" value="<?php echo  $row['witness_id']; ?>"  name="witness_id" id="input01" autocomplete="off">
                                <input type="hidden" class="input-xlarge" value="<?php echo  $row['returned']; ?>"  name="admin_id" id="input01" autocomplete="off">
                                <input type="hidden" class="input-xlarge" value="<?php echo  $row['returned_id']; ?>"  name="returned_id" id="input01" autocomplete="off">
                                <input type="hidden" class="input-xlarge" value="<?php echo  $row['employeeID']; ?>"  name="employeeID" id="input01" autocomplete="off">
                                <input type="hidden" class="input-xlarge" value="<?php echo  $row['date_returned']; ?>"  name="date_returned" id="input01" autocomplete="off">

                            </div> 

                        </div>
                    </fieldset>
                </div>

            </div>
           


            </div>
        </div>
    </div>                                   
                        </div>
                        
                 