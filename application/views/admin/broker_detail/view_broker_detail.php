<div class="pcoded-main-container">
  <div class="pcoded-content">

    <!-- [ Main Content ] start -->
    <div class="row">
      <!-- [ sample-page ] start -->
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h5>View broker_detail</h5>
            <a href="<?= base_url('admin/broker_detail/add_broker_detail'); ?>">
              <button type="button" c class="btn btn-primary toggle-btn mb-4 mr-2" style="margin-left: 80.5%;">Add </button>
            </a>
          </div>
          <div class="card-body">
            <table id="table_id" class="table table-striped">
              <thead>
                <tr>
                  <th>Sr No</th>
                  <th>broker name</th>
                  <th>broker email</th>
                  <th>broker contact</th>
                  <th>about</th>
                  <th style="width: 150px;" class="text-right">Option</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $c = 1;
                foreach ($broker_detail_view as $row) : ?>
                  <tr>
                    <td><?= $c++; ?></td>
                    <td><?= $row->broker_id ?></td>
                    <td><?= $row->broker_email ?></td>
                    <td><?= $row->broker_contact ?></td>
                    <td><?= $row->about ?></td>
                    <td class="text-right"><a href="<?= base_url('admin/broker_detail/broker_detail_edit/' . $row->id); ?>" class="btn btn-info btn-flat">Edit</a><a href="<?= base_url('admin/broker_detail/broker_detail_delete/' . $row->id); ?>" class="btn btn-danger btn-flat" onclick="return confirm('Are you sure want to delete ?');">Delete</a></td>
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