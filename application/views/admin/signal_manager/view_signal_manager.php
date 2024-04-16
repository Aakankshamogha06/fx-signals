<div class="pcoded-main-container">
  <div class="pcoded-content">
    <!-- [ Main Content ] start -->
    <div class="row">
      <!-- [ sample-page ] start -->
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h5>View signal_manager</h5>
            <a href="<?= base_url('admin/signal_manager/add_signal_manager'); ?>">
              <button type="button" class="btn btn-primary toggle-btn mb-4 mr-2" style="margin-left: 70%;">Add </button>
            </a>
          </div>
          <div class="card-body">
            <table id="table_id" class="table">
              <thead>
                <tr>
                  <th>Sr No</th>
                  <th> first name</th>
                  <th> last name</th>
                  <th> email</th>
                  <th> pofile image</th>
                  <th> mobile number</th>
                  <th>sample chart</th>
                  <th>Status</th>
                  <th>Action</th>
                  <th style="width: 150px;" class="text-right">Option</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $c = 1;
                foreach ($signal_manager_view as $row) : ?>
                  <tr>
                    <td><?= $c++; ?></td>
                    <td><?= $row->firstname ?></td>
                    <td><?= $row->lastname ?></td>
                    <td><?= $row->email ?></td>
                    <td><?php if ($row->profile_image) { ?>
                        <img src="<?php echo base_url('uploads/signal_manager_profile/') . $row->profile_image; ?>" style="width:50px;height:80px">
                      <?php } ?></td>
                    <td><?= $row->mobile_no ?></td>
                    <td>                      
    <?php if ($row->sample_chart) { ?>                        
        <a href="<?= base_url('uploads/signal_manager_chart/') . $row->sample_chart; ?>" target="_blank">
            <i class="fas fa-file-pdf" style="height:20px; width:20px;"></i> <br>View chart
        </a>                      
    <?php } ?>                    
</td>

                      <td><?= $row->status ?></td>
                      <td>
                        <?php if ($row->sample_chart) { ?>
                            <form method="post" action="<?= base_url('admin/update_chart_status'); ?>">
                                <input type="hidden" name="signal_manager_id" value="<?= $row->id ?>">
                                <select name="status" class="form-control action-dropdown">
                                <option value="">--Choose--</option>
                                    <option value="on_hold">On Hold</option>
                                    <option value="approved">Approved</option>
                                    <option value="rejected">Rejected</option>
                                </select>
                                <button type="submit" class="btn btn-primary">Update Status</button>
                            </form>
                        <?php } ?>
                    </td>

                    <td class="text-right">
                      <!-- <a href="<?= base_url('admin/signal_manager/signal_manager_edit/' . $row->id); ?>" class="btn btn-info btn-flat">Edit</a> -->
                      <a href="<?= base_url('admin/signal_manager/signal_manager_delete/' . $row->id); ?>" class="btn btn-danger btn-flat" onclick="return confirm('Are you sure want to delete ?');">Delete</a></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- [ sample-page ] end -->
    </div>
    <!-- [ Main Content ] end -->
  </div>
</div>
<script>
  jQuery(document).ready(function($) {
    $('#table_id').DataTable();
  });

  // Handle action change event
  $(document).on('change', '.action-dropdown', function() {
    var selectedAction = $(this).val();
    // You can perform any action based on the selected option, like sending an AJAX request to update the status in the database.
    console.log(selectedAction); // Just for demonstration
  });
</script>
