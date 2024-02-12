<div class="pcoded-main-container">
  <div class="pcoded-content">

    <!-- [ Main Content ] start -->
    <div class="row">
      <!-- [ sample-page ] start -->
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h5>View </h5>
            <a href="<?= base_url('admin/pricing_features/add_pricing_features'); ?>">
              <button type="button" c class="btn btn-primary toggle-btn mb-4 mr-2" style="margin-left: 80.5%;">Add </button>
            </a>
          </div>
          <div class="card-body">
                    <table id="table_id" class="table table-striped">
                        <thead>
                            <tr>
                                <th>SR NO</th>
                                <th>PRICING NAME</th>
                                <th>FEATURES</th>
                                <th>FEATURES AVAILABLE</th>
                                <th style="width: 150px;" class="text-right">OPTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $c = 1;
                            foreach ($pricing_features_view as $row) : ?>
                            <tr>
                                <td><?= $c++; ?></td>
                                <td><?= $row->pricing_id ?></td>
                                <td><?= $row->features ?></td>
                                <td><?= $row->features_available ?></td>
                                <td class="text-right"><a href="<?= base_url('admin/pricing_features/pricing__features_edit/' . $row->id); ?>" class="btn btn-info btn-flat">Edit</a><a href="<?= base_url('admin/pricing_features/pricing__features_delete/' . $row->id); ?>" class="btn btn-danger btn-flat" onclick="return confirm('Are you sure want to delete ?');">Delete</a></td>                
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $('#table_id').DataTable();
        });
    </script>

</body>

</html>
