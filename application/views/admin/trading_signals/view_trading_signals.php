<div class="pcoded-main-container">
  <div class="pcoded-content">

    <!-- [ Main Content ] start -->
    <div class="row">
      <!-- [ sample-page ] start -->
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h5>View</h5>
            <a href="<?= base_url('admin/trading_signals/add_trading_signals'); ?>">
              <button type="button" c class="btn btn-primary toggle-btn mb-4 mr-2" style="margin-left: 80.5%;">Add</button>
            </a>
          </div>
          <div class="card-body">
            <table id="table_id" class="table table-striped">
              <thead>
                <tr>
                <th>SR NO</th>
                <th>entry point</th>
                <th>exit point</th>
                <th>package</th>
                <th>date</th>
                <th>category</th>
                <th>sub category</th>
                <th>action</th>
                <th>status</th>
                <th>stop loss</th>
                <th>take profit</th>
                <th style="width: 150px;" class="text-right">OPTION</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $c = 1;
              foreach ($trading_signals_view as $row) : ?>
                <tr>
                  <td><?= $c++; ?></td>
                  <td><?= $row->entry_point ?></td>
                  <td><?= $row->exit_point ?></td>
                  <td><?= $row->package ?></td>
                  <td><?= $row->date ?></td>
                  <td><?= $row->category ?></td>
                  <td><?= $row->sub_category ?></td>
                  <td><?= $row->action ?></td>
                  <td><?= $row->status ?></td>
                  <td><?= $row->stop_loss ?></td>
                  <td><?= $row->take_profit ?></td>

                  <td class="text-right"><a href="<?= base_url('admin/trading_signals/trading_signals_edit/' . $row->id); ?>"><i class="btn btn-info btn-flat" >
                                            Edit </i></a><a href="<?= base_url('admin/trading_signals/trading_signals_delete/' . $row->id); ?>" class="btn btn-danger btn-flat"  onclick="return confirm('Are you sure want to delete ?');">Delete</a></td>
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