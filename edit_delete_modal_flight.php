<?php

include "include/server.php";

?>
<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"
    id="edit_<?php echo $row['id']; ?>">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Flgith</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                    style="background-color: transparent !important;">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="edit_delete_modal_flight.php">
                    <input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">
                    <div class="form-group col-md-12">
                        <label>Amount</label>
                        <input type="text" id="name" name="amount" value="<?php echo $row['amount'] ?>"
                            class="form-control name" required>
                    </div>

                    <div class="form-group col-md-12">
                        <label>Flight Date</label>
                        <input type="date" id="name" name="fdate" value="<?php echo $row['fdate'] ?>"
                            class="form-control name" required>
                    </div>
                    <div class="form-group col-md-12">
                        <label>Flight Time</label>
                        <input type="time" id="name" name="ftime" value="<?php echo $row['ftime'] ?>"
                            class="form-control name" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"
                            style="background-color: #000;border: none;"><span class="bi bi-x-circle"></span>
                            Close</button>
                        <button name="edit_flight" class="btn btn-success"
                            style="background-color: #00c514;border: none;"><span class="bi bi-arrow-right"></span>
                            Proceed</button>
                    </div>
                </form>
            </div>


        </div>
    </div>
</div>
<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"
    id="delete_<?php echo $row['id']; ?>">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Flight</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                    style="background-color: transparent !important;">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <center>
                    <h5>Are you sure you want to delete <br><span style="font-family: Bold;">Flight</span>?</h5>
                </center>
                <form method="POST" action="edit_delete_modal_flight.php">
                    <input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"
                            style="background-color: #000;border: none;"><span class="bi bi-x-circle"></span>
                            Close</button>
                        <button name="del_flight" class="btn btn-success"
                            style="background-color: #00c514;border: none;"><span class="bi bi-arrow-right"></span>
                            Proceed</button>
                    </div>
                </form>
            </div>


        </div>
    </div>
</div>