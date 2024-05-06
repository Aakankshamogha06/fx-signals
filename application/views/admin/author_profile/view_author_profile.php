<!-- <div class="pcoded-main-container">
  <div class="pcoded-content">

   
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h5>View Author Profile</h5>
            <a href="<?= base_url('admin/author_profile/add_author_profile'); ?>">
              <button type="button" c class="btn btn-primary toggle-btn mb-4 mr-2" style="margin-left: 70%;">Add</button>
            </a>
          </div>
          <div class="card-body">
            <table id="table_id" class="table table-striped">
              <thead>
                <tr>
                  <th>Sr No</th>
                  <th>Name</th>
                  <th>Profile image</th>
                  <th>email</th>
                  <th>Mobile Number</th>
                  <th>Linkedin</th>
                  <th>Facebook</th>
                  <th>Instagram</th>
                  <th>Twitter</th>
                  <th>About</th>
                  <th style="width: 150px;" class="text-right">Option</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $c = 1;
                foreach ($author_profile_view as $row) : ?>
                  <tr>
                    <td><?= $c++; ?></td>
                    <td><?= $row->username ?></td>
                    <td>
                      <?php if ($row->author_profile_image) { ?>
                        <img src="<?php echo base_url('uploads/author_profile/') . $row->author_profile_image; ?>" style="width:50px;height:80px">
                      <?php } ?>

                    </td>
                    <td><?= $row->email ?></td>                    
                    <td><?= $row->mobile_no ?></td>
                    <td><?= $row->linkedin ?></td>
                    <td><?= $row->facebook ?></td>
                    <td><?= $row->instagram ?></td>
                    <td><?= $row->twitter ?></td>
                    <td><?= substr($row->about,0,100) . '...' ?></td>                    
                    <td class="text-right">
                        <a href="<?= base_url('admin/author_profile/author_profile_edit/' . $row->id); ?>" class="btn btn-info btn-flat">Edit</a>
                        <a href="<?= base_url('admin/author_profile/author_profile_delete/' . $row->id); ?>" class="btn btn-danger btn-flat" onclick="return confirm('Are you sure want to delete ?');">Delete</a></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>

            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  jQuery(document).ready(function($) {
    $('#table_id').DataTable();
  });
</script> -->
<?php
// Check if the author's profile exists in the database
// You need to implement this logic in your backend code
$author_profile_exists = true; // Set this to true if the author's profile exists, otherwise set it to false
?>

<div class="pcoded-main-container">
  <div class="pcoded-content">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h5>View Author Profile</h5>
            <a href="<?= base_url('admin/author_profile/add_author_profile'); ?>">
                <button type="button" class="btn btn-primary toggle-btn mb-4 mr-2" style="margin-left: 70%;">Add</button>
              </a>
          </div>
          <div class="card-body">
            <div class="container mt-5">
              <div class="row">
                <div class="col-md-4">
                  <!-- Profile Image -->
                  <img src="<?=base_url('uploads/author_profile/').$row->author_profile_image;?>" alt="User Profile Image" class="img-fluid round" style=" border-radius: 50%; height:300px; width:300px;">
                </div>
                <br>
                <div class="col-md-8">
                  <!-- Profile Information -->
                  <?php  foreach ($author_profile_view as $row) : ?>
                  <h1><?= $row->username ?> </h1>
                  <p>Email: <?= $row->email ?></p>
                  <p>Mobile Number: <?= $row->mobile_no ?></p>
                  <hr>
                  <h2>About</h2>
                  <p><?= $row->about ?></p>
                </div>
              </div>
              <div class="row mt-5">
                <div class="col-md-6">
                  <!-- Additional Information -->
                  <h2>Additional Information</h2>
                  <ul class="list-group">
                    <li class="list-group-item">Instagram: <?= $row->instagram ?></li>
                    <li class="list-group-item">Linkedin: <?= $row->linkedin ?></li>
                    <li class="list-group-item">Facebook: <?= $row->facebook ?></li>
                    <li class="list-group-item">Twitter: <?= $row->twitter ?></li>
                  </ul>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
