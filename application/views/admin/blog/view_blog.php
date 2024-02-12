<div class="pcoded-main-container">
  <div class="pcoded-content">

    <!-- [ Main Content ] start -->
    <div class="row">
      <!-- [ sample-page ] start -->
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h5>View</h5>
            <a href="<?= base_url('admin/blog/add_blog'); ?>">
              <button type="button" c class="btn btn-primary toggle-btn mb-4 mr-2" style="margin-left: 80.5%;">Add Blog</button>
            </a>
          </div>
          <div class="card-body">
            <table id="table_id" class="table table-striped">
              <thead>
                <tr>
                  <th>Sr No</th>
                  <th>blog Name</th>
                  <th>blog image</th>
                  <th>blog category</th>
                  <th>blog author</th>
                  <th>blog date</th>
                  <th>blog description</th>
                  <th>long description </th>
                  <th style="width: 150px;" class="text-right">Option</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $c = 1;
                foreach ($blog_view as $row) : ?>
                  <tr>
                    <td><?= $c++; ?></td>
                    <td><?= $row->blog_name ?></td>
                    <td>
                      <?php if ($row->blog_image) { ?>
                        <img src="<?php echo base_url('uploads/blog/') . $row->blog_image; ?>" style="width:50px;height:80px">
                      <?php } ?>

                    </td>
                    <td><?= $row->blog_category ?></td>
                    <td><?= $row->blog_author ?></td>
                    <td><?= $row->blog_date ?></td>
                    <td><?= $row->blog_desc ?></td>
                    <td><?= $row->long_desc ?></td>

                    <td class="text-right"><a href="<?= base_url('admin/blog/blog_edit/' . $row->id); ?>" class="btn btn-info btn-flat">Edit</a><a href="<?= base_url('admin/blog/blog_delete/' . $row->id); ?>" class="btn btn-danger btn-flat" onclick="return confirm('Are you sure want to delete ?');">Delete</a></td>
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