<!-- Edit -->
<div class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="delete_<?php echo $row['id']; ?>" >
   <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Plate Number</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="background-color: transparent !important;">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
            <div class="modal-body">
            	<center><h5>Are you sure you want to delete <br><span style="font-family: Bold;">PLATE NUMBER</span>?</h5></center>
			<form method="POST" action="edit_delete_modal.php">
				<input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">
			
			 <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color: #000;border: none;"><span class="bi bi-x-circle"></span> Close</button>
               		 <button name="del_plate" class="btn btn-success" style="background-color: #00c514;border: none;"><span class="bi bi-arrow-right"></span> Proceed</button>
</div>
       </form>
		</div>


            </div> 
			</div>
