<div class="modal fade" id="delModal<?php echo $id; ?>" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Delete Records</h4>
      </div>
        <div class="modal-body">
          <p>Are you sure want to Delete this Record</p>
        </div>
        <div class="modal-footer">
        <form action="" method="post">
          <input type="hidden" name="user_id" value="<?php echo $id; ?>">
          <button type="submit" class="btn btn-danger" name="delete">Delete</button>
        </form>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </div>
  </div>
</div>