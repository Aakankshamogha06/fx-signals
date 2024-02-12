<div class="pcoded-main-container">
  <div class="pcoded-content">

    <!-- [ Main Content ] start -->
    <div class="row">
      <!-- [ sample-page ] start -->
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h5>View economic_calender</h5>
            <a href="<?= base_url('admin/economic_calender/add_economic_calender'); ?>">
              <button type="button" c class="btn btn-primary toggle-btn mb-4 mr-2" style="margin-left: 70%;">Add</button>
            </a>
          </div>
          <div class="card-body">
            <table id="table_id" class="table table-striped">
              <thead>
                <tr>
                  <th>Sr No</th>
                  <th>DAY</th>
                  <th>date</th>
                  <th>heading 1</th>
                  <th>desc 1</th>
                  <th>heading 2</th>
                  <th>desc 2</th>
                  <th>heading 3</th>
                  <th>desc 3</th>
                  <th style="width: 150px;" class="text-right">Option</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $c = 1;
                foreach ($economic_calender_view as $row) : ?>
                  <tr>
                    <td><?= $c++; ?></td>
                    <td><?= $row->day ?></td>
                    <td><?= $row->date ?></td>
                    <td><?= $row->heading1 ?></td>
                    <td><?= $row->desc1 ?></td>
                    <td><?= $row->heading2 ?></td>
                    <td><?= $row->desc2 ?></td>
                    <td><?= $row->heading3 ?></td>
                    <td><?= $row->desc3 ?></td>
                    <td class="text-right"><a href="<?= base_url('admin/economic_calender/economic_calender_edit/' . $row->id); ?>" class="btn btn-info btn-flat">Edit</a><a href="<?= base_url('admin/economic_calender/economic_calender_delete/' . $row->id); ?>" class="btn btn-danger btn-flat" onclick="return confirm('Are you sure want to delete ?');">Delete</a></td>
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