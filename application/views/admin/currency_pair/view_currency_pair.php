<div class="pcoded-main-container">
  <div class="pcoded-content">

    <!-- [ Main Content ] start -->
    <div class="row">
      <!-- [ sample-page ] start -->
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h5>View</h5>
            <a href="<?= base_url('admin/currency_pair/add_currency_pair'); ?>">
              <button type="button" c class="btn btn-primary toggle-btn mb-4 mr-2" style="margin-left: 80.5%;">Add Currency Pair</button>
            </a>
          </div>
          <div class="card-body">
            <table id="table_id" class="table table-striped">
              <thead>
                <tr>
                <th>SR NO</th>
                <th>pair category</th>
                <th>pair name</th>
                <th style="width: 150px;" class="text-right">OPTION</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $c = 1;
              foreach ($currency_pair_view as $row) : ?>
                <tr>
                  <td><?= $c++; ?></td>
                  <td><?= $row->pair_category ?></td>
                  <td><?= $row->pair_name ?></td>
                  <td class="text-right"><a href="<?= base_url('admin/currency_pair/currency_pair_edit/' . $row->id); ?>"><i class="btn btn-info btn-flat" >
                                            Edit </i></a><a href="<?= base_url('admin/currency_pair/currency_pair_delete/' . $row->id); ?>" class="btn btn-danger btn-flat"  onclick="return confirm('Are you sure want to delete ?');">Delete</a></td>
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