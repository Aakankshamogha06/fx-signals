<div class="pcoded-main-container">
  <div class="pcoded-content">

    <!-- [ Main Content ] start -->
    <div class="row">
      <!-- [ sample-page ] start -->
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h5>View news</h5>
            <a href="<?= base_url('admin/news/add_news'); ?>">
              <button type="button" c class="btn btn-primary toggle-btn mb-4 mr-2" style="margin-left: 70%;">Add</button>
            </a>
          </div>
          <div class="card-body">
            <table id="table_id" class="table table-striped">
              <thead>
                <tr>
                  <th>Sr No</th>
                  <th>title</th>
                  <th>news image</th>
                  <th>published date</th>
                  <th>news description</th>
                  <th>category</th>
                  <th>sub category</th>
                  <th>author</th>
                  <th>news type</th>
                  <th>news package</th>
                  <th style="width: 150px;" class="text-right">Option</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $c = 1;
                foreach ($news_view as $row) : ?>
                  <tr>
                    <td><?= $c++; ?></td>
                    <td><?= $row->title ?></td>
                    <td>
                      <?php if ($row->news_image) { ?>
                        <img src="<?php echo base_url('uploads/') . $row->news_image; ?>" style="width:50px;height:80px">
                      <?php } ?>

                    </td>
                    <td><?= $row->publish_date ?></td>
                    <td><?= $row->news_desc ?></td>
                    <td><?= $row->category ?></td>
                    <td><?= $row->sub_category ?></td>
                    <td><?= $row->author ?></td>
                    <td><?= $row->news_type ?></td>
                    <td><?= $row->news_package ?></td>
                    <td class="text-right"><a href="<?= base_url('admin/news/news_edit/' . $row->id); ?>" class="btn btn-info btn-flat">Edit</a><a href="<?= base_url('admin/news/news_delete/' . $row->id); ?>" class="btn btn-danger btn-flat" onclick="return confirm('Are you sure want to delete ?');">Delete</a></td>
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