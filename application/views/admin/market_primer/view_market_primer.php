<div class="pcoded-main-container">
  <div class="pcoded-content">

    <!-- [ Main Content ] start -->
    <div class="row">
      <!-- [ sample-page ] start -->
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h5>View market_primer</h5>
            <a href="<?= base_url('admin/market_primer/add_market_primer'); ?>">
              <button type="button" c class="btn btn-primary toggle-btn mb-4 mr-2" style="margin-left: 80.5%;">Add </button>
            </a>
          </div>
          <div class="card-body">
            <table id="table_id" class="table">
              <thead>
                <tr>
                  <th>Sr No</th>
                  <th>date</th>
                  <th>Market primer</th>
                 
                  <th style="width: 150px;" class="text-right">Option</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $c = 1;
                foreach ($market_primer_view as $row) : ?>
                  <tr>
                    <td><?= $c++; ?></td>
                    <td><?= $row->date ?></td>
                    <td>                      
                        <?php if ($row->pdf) { ?>                        
                            <a href="<?= base_url('uploads/market_primer/') . $row->pdf; ?>" target="_blank">
                                <i class="fas fa-file-pdf" style="height:20px; width:20px;"></i> <br>View Article
                            </a>                      
                        <?php } ?>                    
                    </td>
                    <td class="text-right">
                      <a href="<?= base_url('admin/market_primer/market_primer_delete/' . $row->id); ?>" class="btn btn-danger btn-flat" onclick="return confirm('Are you sure want to delete ?');">Delete</a>
                    </td>
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