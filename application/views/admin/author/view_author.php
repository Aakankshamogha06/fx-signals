<div class="pcoded-main-container">
  <div class="pcoded-content">

    <!-- [ Main Content ] start -->
    <div class="row">
      <!-- [ sample-page ] start -->
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h5>View author</h5>
            <a href="<?= base_url('admin/author/add_author'); ?>">
              <button type="button" c class="btn btn-primary toggle-btn mb-4 mr-2" style="margin-left: 70%;">Add </button>
            </a>
          </div>
          <div class="card-body">
            <table id="table_id" class="table table-striped">
              <thead>
                <tr>
                  <th>Sr No</th>
                  <th> name</th>
                  <th> email</th>
                  <th> pofile image</th>
                  <th> role</th>
                  <th>sample article</th>
                  <th style="width: 150px;" class="text-right">Option</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $c = 1;
                foreach ($author_view as $row) : ?>
                  <tr>
                    <td><?= $c++; ?></td>
                    <td><?= $row->name ?></td>
                    <td><?= $row->email ?></td>
                    <td><?php if ($row->profile_image) { ?>
                        <img src="<?php echo base_url('uploads/profile/') . $row->profile_image; ?>" style="width:50px;height:80px">
                      <?php } ?></td>
                      <td><?php if ($row->sample_article) { ?>
                        <embed src="<?php echo base_url('uploads/profile/') . $row->sample_article; ?>" style="width:50px;height:80px">
                      <?php } ?></td> 
                    <td><?= $row->role_name ?></td>
                    <td class="text-right"><a href="<?= base_url('admin/author/author_edit/' . $row->id); ?>" class="btn btn-info btn-flat">Edit</a><a href="<?= base_url('admin/author/author_delete/' . $row->id); ?>" class="btn btn-danger btn-flat" onclick="return confirm('Are you sure want to delete ?');">Delete</a></td>
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