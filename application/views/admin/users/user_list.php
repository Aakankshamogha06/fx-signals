<div class="pcoded-main-container">
  <div class="pcoded-content"> 
    <!-- [ Main Content ] start -->
    <div class="row">
        <!-- [ sample-page ] start -->
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h5>View User</h5>
          </div>
        </div>
      </div>
    <div class="card-body">
      <table id="table_id" class="table table-striped"  style="width: 100%; overflow: scroll">
        <thead>
        <tr> 
          <th>Sr No</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>Mobile No.</th> 
          <!-- <th>Role</th> -->
          <th style="width: 150px;" class="text-right">Option</th>
        </tr>
        </thead>
        <tbody>
          <?php 
          $c=1;
          foreach($all_users as $row): ?>
          <tr>
            <td><?= $c++; ?></td>
            <td><?= $row['firstname']; ?></td>
            <td><?= $row['lastname']; ?></td>
            <td><?= $row['email']; ?></td>
            <td><?= $row['mobile_no']; ?></td>
            
            <!-- <td><span class="btn  btn-primary btn-sm"><?= $row['role_name'] ; ?></span></td> -->
            <td class="text-right"><a href="<?= base_url('admin/users/edit/'.$row['id']); ?>" class="btn btn-info btn-flat">Edit</a><a href="<?= base_url('admin/users/del/'.$row['id']); ?>" class="btn btn-danger btn-flat <?= ($row['is_admin'] == 1)? 'disabled': ''?>" onclick="return confirm('Are you sure want to delete ?');">Delete</a></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
    <!-- [ sample-page ] end -->
<!-- [ Main Content ] end -->
<script>

jQuery(document).ready(function ($) {
  $('#table_id').DataTable();
});

  </script>