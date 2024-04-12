<div class="pcoded-main-container">
  <div class="pcoded-content">

    <!-- [ Main Content ] start -->
    <div class="row">
      <!-- [ sample-page ] start -->
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h5>View broker</h5>
            <a href="<?= base_url('admin/broker/add_broker'); ?>">
              <button type="button" c class="btn btn-primary toggle-btn mb-4 mr-2" style="margin-left: 80.5%;">Add </button>
            </a>
          </div>
          <div class="card-body">
            <table id="table_id" class="table">
              <thead>
                <tr>
                  <th>Sr No</th>
                  <th>website name</th>
                  <th>Website Url</th>
                  <th>broker Image</th>
                  <th>rating</th>
                  <th>ranking</th>
                  <th>minimum deposit</th>
                  <th>order number</th>
                  <th>type</th>
                  <th style="width: 150px;" class="text-right">Option</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $c = 1;
                foreach ($broker_view as $row) : ?>
                  <tr>
                    <td><?= $c++; ?></td>
                    <td><?= $row->company_name ?></td>  
                    <td><?= $row->website_url ?></td>
                    <td>
                      <?php if ($row->broker_image) { ?>
                        <img src="<?php echo base_url('uploads/broker/') . $row->broker_image; ?>" style="width:50px;height:80px">
                      <?php } ?>
                    </td>
                    <td><?= $row->rating ?></td>
                    <td><?= $row->ranking ?></td>
                    <td>$<?= $row->min_deposit ?></td>
                    <td><?= $row->order_id ?></td>
                    <td><?= $row->type ?></td>
                    <td class="text-right"><a href="<?= base_url('admin/broker/broker_edit/' . $row->id); ?>" class="btn btn-info btn-flat">Edit</a><a href="<?= base_url('admin/broker/broker_delete/' . $row->id); ?>" class="btn btn-danger btn-flat" onclick="return confirm('Are you sure want to delete ?');">Delete</a></td>
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