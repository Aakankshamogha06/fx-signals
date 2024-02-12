<div class="pcoded-main-container">
  <div class="pcoded-content">

    <!-- [ Main Content ] start -->
    <div class="row">
      <!-- [ sample-page ] start -->
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h5>View sub_sub_menu</h5>
            <a href="<?= base_url('admin/sub_sub_menu/add_sub_sub_menu'); ?>">
              <button type="button" c class="btn btn-primary toggle-btn mb-4 mr-2" style="margin-left: 70%;">Add</button>
            </a>
          </div>
          <div class="card-body">
            <table id="table_id" class="table table-striped">
              <thead>
                <tr>
                  <th>SR NO</th>
                  <th>MENU NAME</th>
                  <th>SUB MENU NAME</th>
                  <th>SUB SUB MENU NAME</th>
                  <th style="width: 150px;" class="text-right">OPTION</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $c = 1;
                foreach ($sub_sub_menu_view as $row) : ?>
                  <tr>
                    <td><?= $c++; ?></td>
                    <td><?= $row->menu_id ?></td>
                    <td><?= $row->sub_menu_id ?></td>
                    <td><?= $row->name ?></td>
                    <td class="text-right"><a href="<?= base_url('admin/sub_sub_menu/sub_sub_menu_edit/' . $row->id); ?>" class="btn btn-info btn-flat" >Edit</a><a href="<?= base_url('admin/sub_sub_menu/sub_sub_menu_delete/' . $row->id); ?>" class="btn btn-danger btn-flat" onclick="return confirm('Are you sure want to delete ?');" >Delete</a></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>

            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    jQuery(document).ready(function($) {
      $('#table_id').DataTable();
    });
  </script>
  <style>
    .container-fluid {
      width: auto;
      position: relative;
      clear: both;
      overflow: scroll;
    }
  </style>