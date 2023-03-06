
<div class="modal hide fade" id="a<?php echo $id; ?>">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">?</button>

    </div>
    <div class="modal-body">
        <div class="alert alert-info">
            <h2>Add what?</h2>
        </div>
        <center>                           
            <p><a href="add_returned.php<?php echo '?id='.$id; ?>" class="btn btn-large"><i class="icon-file icon-large"></i>&nbsp;Item to be returned</a> </p>
            <p><a href="returned_item_details.php<?php echo '?id='.$id; ?>" class="btn btn-success btn-large"><i class="icon-file icon-large"></i>&nbsp;Item returned</a></p> 
        </center>
    </div>
    <div class="modal-footer">
        <a href="#" class="btn" data-dismiss="modal">Close</a>

    </div>
                                </div>