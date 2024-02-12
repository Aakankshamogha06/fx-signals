<div class="pcoded-main-container">
  <div class="pcoded-content">

    <!-- [ Main Content ] start -->
    <div class="row">
      <!-- [ sample-page ] start -->
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h5>View advertisement</h5>
            <a href="<?= base_url('admin/advertisement/add_advertisement'); ?>">
              <button type="button" c class="btn btn-primary toggle-btn mb-4 mr-2" style="margin-left: 80.5%;">Add </button>
            </a>
          </div>
          <div class="card-body">
            <table id="table_id" class="table table-striped">
              <thead>
                <tr>
                  <th>Sr No</th>
                  <th>Page Name</th>
                  <th>Image 1</th>
                  <th>Image 1 URL</th>
                  <th>Image 2</th>
                  <th>Image 2 URL</th>
                  <th>Image 3</th>
                  <th>Image 3 URL</th>
                  <th>Image 4</th>
                  <th>Image 4 URL</th>
                  <th style="width: 150px;" class="text-right">Option</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $c = 1;
                foreach ($advertisement_view as $row) : ?>
                  <tr>
                    <td><?= $c++; ?></td>
                    <td><?= $row->page_name ?></td>
                    <td>
                      <?php if ($row->image1) { ?>
                        <img src="<?php echo base_url('uploads/advertisement/') . $row->image1; ?>" style="width:50px;height:80px">
                      <?php } ?>
                    </td>
                    <td><?= $row->image1url ?></td>
                    <td>
                      <?php if ($row->image2) { ?>
                        <img src="<?php echo base_url('uploads/advertisement/') . $row->image2; ?>" style="width:50px;height:80px">
                      <?php } ?>
                    </td>
                    <td><?= $row->image2url ?></td>
                    <td>
                      <?php if ($row->image3) { ?>
                        <img src="<?php echo base_url('uploads/advertisement/') . $row->image3; ?>" style="width:50px;height:80px">
                      <?php } ?>
                    </td>
                    <td><?= $row->image2url ?></td>
                    <td>
                      <?php if ($row->image4) { ?>
                        <img src="<?php echo base_url('uploads/advertisement/') . $row->image4; ?>" style="width:50px;height:80px">
                      <?php } ?>
                    </td>
                    <td><?= $row->image2url ?></td>
                    <td class="text-right"><a href="<?= base_url('admin/advertisement/advertisement_edit/' . $row->id); ?>" class="btn btn-info btn-flat">Edit</a><a href="<?= base_url('admin/advertisement/advertisement_delete/' . $row->id); ?>" class="btn btn-danger btn-flat" onclick="return confirm('Are you sure want to delete ?');">Delete</a></td>
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