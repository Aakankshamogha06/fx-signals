<div class="pcoded-main-container">
  <div class="pcoded-content">

    <!-- [ Main Content ] start -->
    <div class="row">
      <!-- [ sample-page ] start -->
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h5>View forecast</h5>
            <a href="<?= base_url('admin/forecast/add_forecast'); ?>">
              <button type="button" c class="btn btn-primary toggle-btn mb-4 mr-2" style="margin-left: 80.5%;">Add </button>
            </a>
          </div>
          <div class="card-body">
            <table id="table_id" class="table">
              <thead>
                <tr>
                  <th>Sr No</th>
                  <th>forecast title</th>
                  <th>forecast Image</th>
                  <th>type</th>
                  <th>description</th>
                  <th style="width: 150px;" class="text-right">Option</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $c = 1;
                foreach ($forecast_view as $row) : ?>
                  <tr>
                    <td><?= $c++; ?></td>
                    <td><?= $row->forecast_name ?></td>
                    <td>
                      <?php if ($row->forecast_image) { ?>
                        <img src="<?php echo base_url('uploads/forecast/') . $row->forecast_image; ?>" style="width:50px;height:80px">
                      <?php } ?>
                    </td>
                    <td><?= $row->forecast_type ?></td>
                    <td><?= substr($row->description,0,30) . '....' ?></td>
                    <td class="text-right"><a href="<?= base_url('admin/forecast/forecast_edit/' . $row->id); ?>" class="btn btn-info btn-flat">Edit</a><a href="<?= base_url('admin/forecast/forecast_delete/' . $row->id); ?>" class="btn btn-danger btn-flat" onclick="return confirm('Are you sure want to delete ?');">Delete</a></td>
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
</script>