<div class="modal fade" id="myModal<?php echo $id; ?>" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Records</h4>
      </div>
      <?php
      $res1 = $con->getRecordsById("SELECT * FROM `crud` WHERE `id` = '$id'");
      $row1 = mysql_fetch_array($res1);
      ?>
      <form action="" method="post">
        <div class="modal-body">
          <div class="form-group">
              <label class="control-label">First Name:</label>
              <input type="text" name="first_name" value="<?php echo $row1['first_name']; ?>" placeholder="Enter First Name" class="form-control" required>
            </div>
            <input type="hidden" name="user_id" value="<?php echo $row1['id']; ?>">
            <div class="form-group">
              <label class="control-label">Last Name:</label>
              <input type="text" name="last_name" value="<?php echo $row1['last_name']; ?>" placeholder="Enter Last Name" class="form-control" required>
            </div>

            <div class="form-group">
              <label class="control-label">Email:</label>
              <input type="text" name="email" value="<?php echo $row1['email']; ?>" placeholder="Enter Email" class="form-control" required>
            </div>

            <div class="form-group">
              <label class="control-label">Mobile:</label>
              <input type="text" name="mobile" value="<?php echo $row1['mobile']; ?>" placeholder="Enter Mobile Number" class="form-control" required>
            </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" name="edit">Submit</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </form>
    </div>
  </div>
</div>