<div class="pcoded-main-container">
  <div class="pcoded-content">

    <!-- [ Main Content ] start -->
    <div class="row">
      <!-- [ sample-page ] start -->
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h5>View charts</h5>
            <a href="<?= base_url('admin/charts/add_charts'); ?>">
              <button type="button" c class="btn btn-primary toggle-btn mb-4 mr-2" style="margin-left: 70%;">Add</button>
            </a>
          </div>
          <div class="card-body">
            <table id="table_id" class="table table-striped dataTables_wrapper">
              <thead>
                <tr>
                  <th>Sr No</th>
                  <th>title</th>
                  <th>description 1</th>
                  <th>image 1</th>
                  <th>image name 1</th>
                  <th>image 2</th>
                  <th>image name 2</th>
                  <th>description 2</th>
                  <th>heading 2</th>
                  <th>images 1</th>
                  <th>images 2</th>
                  <th>heading 3</th>
                  <th>description 3</th>
                  <th>category</th>
                  <th style="width: 150px;" class="text-right">Option</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $c = 1;
                foreach ($charts_view as $row) : ?>
                  <tr>
                    <td><?= $c++; ?></td>
                    <td><?= $row->title ?></td>
                    <td><?= $row->desc1 ?></td>
                    <td><?php if ($row->image1) { ?>
                        <img src="<?php echo base_url('uploads/charts/') . $row->image1; ?>" style="width:50px;height:80px">
                      <?php } ?></td>
                    <td><?= $row->imgname1 ?></td>
                    <td><?php if ($row->image1) { ?>
                        <img src="<?php echo base_url('uploads/charts/') . $row->image2; ?>" style="width:50px;height:80px">
                      <?php } ?></td>
                    <td><?= $row->imgname2 ?></td>
                    <td><?= $row->desc2 ?></td>
                    <td><?= $row->heading2 ?></td>
                    < <td><?php if ($row->images1) { ?>
                        <img src="<?php echo base_url('uploads/charts/') . $row->images1; ?>" style="width:50px;height:80px">
                      <?php } ?></td>
                      <td><?php if ($row->images2) { ?>
                        <img src="<?php echo base_url('uploads/charts/') . $row->images2; ?>" style="width:50px;height:80px">
                      <?php } ?></td>
                    <td><?= $row->heading3 ?></td>
                    <td><?= $row->desc3 ?></td>
                    <td><?= $row->category ?></td>
                    <td class="text-right"><a href="<?= base_url('admin/charts/charts_edit/' . $row->id); ?>" class="btn btn-info btn-flat">Edit</a><a href="<?= base_url('admin/charts/charts_delete/' . $row->id); ?>" class="btn btn-danger btn-flat" onclick="return confirm('Are you sure want to delete ?');">Delete</a></td>
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