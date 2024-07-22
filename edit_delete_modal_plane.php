<?php

include "include/server.php";

?>
<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"
    id="edit_<?php echo $row['id']; ?>">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Plane</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                    style="background-color: transparent !important;">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="edit_delete_modal_plane.php">
                    <input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">
                    <div class="form-group col-md-12">
                                                <label>Aeroplane Name</label>
                                                <input type="text" id="name" name="name" value="<?php echo $row['name'] ?>" class="form-control name" required>
                                            </div>
                                           
                                            <div class="form-group col-md-12">
                                                <label>Number of Seats</label>
                                                <input type="number" id="gsm" class="form-control" value="<?php echo $row['seats'] ?>" name="seats" required>
                                            </div>

                                            <div class="form-group col-md-12">
                                                  <label>Availability (Current Status: <strong><?php if($row['status']=="true"){echo "Available"; } else { echo "Unavailable"; }?></strong>)</label>
                                                 <select id="status" name="status" class="form-control" required>
                                                       <option value="">Select Status</option>
                                                       <option value="true">Available</option>
                                                      <option value="false">Not Available</option>
                                                      </select>
                                            </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"
                            style="background-color: #000;border: none;"><span class="bi bi-x-circle"></span>
                            Close</button>
                        <button name="edit_plane" class="btn btn-success"
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
                <h5 class="modal-title" id="exampleModalLabel">Delete Plane</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                    style="background-color: transparent !important;">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <center>
                    <h5>Are you sure you want to delete <br><span style="font-family: Bold;">PLANE</span>?</h5>
                </center>
                <form method="POST" action="edit_delete_modal_plane.php">
                    <input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"
                            style="background-color: #000;border: none;"><span class="bi bi-x-circle"></span>
                            Close</button>
                        <button name="del_plate" class="btn btn-success"
                            style="background-color: #00c514;border: none;"><span class="bi bi-arrow-right"></span>
                            Proceed</button>
                    </div>
                </form>
            </div>


        </div>
    </div>
</div>