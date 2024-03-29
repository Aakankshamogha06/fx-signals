<div class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Add Trading Signal</h5>
                        <?php if (isset($msg) || validation_errors() !== '') : ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <?= validation_errors(); ?>
                                <?= isset($msg) ? $msg : ''; ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" method="post" action="<?= base_url('trading_signals/trading_signals_submit_data'); ?>">
                            <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                            <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="category" class="form-label"> Category <span class="text-danger">*</span></label>
                                    <select id="category" class="form-control" name="category">
                                        <option value="">Select Category</option>
                                        <?php
                                        $category_fetch_data = $this->trading_signals_model->category_fetch();
                                        foreach ($category_fetch_data as $data) { ?>
                                            <option value="<?php echo $data['id']; ?>"><?php echo $data['name']; ?></option>
                                        <?php } ?>

                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                <label for="sub_category" class="form-label"> Sub Category <span class="text-danger">*</span></label>
                                    <select name="sub_category" id="sub_category" class="form-control">
                                        <option value="">Select sub Category</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                
                                <div class="form-group col-md-6">
                                <label for="package" class="form-label"> package <span class="text-danger">*</span></label>
                                    <select id="package" class="form-control" name="package">
                                        <option value="">Select package</option>
                                        <?php
                                        $package_fetch_data = $this->trading_signals_model->package_fetch();
                                        foreach ($package_fetch_data as $data) { ?>
                                            <option value="<?php echo $data['id']; ?>"><?php echo $data['package_name']; ?></option>
                                        <?php } ?>

                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="date" class="form-label">Date <span class="text-danger">*</span></label>
                                    <input type="date" name="date" class="form-control" id="date" placeholder="Date" required>
                                </div>
                            </div>
                            
                            <div class="form-row">
                                
                                <div class="form-group col-md-6">
                                    <label for="entry_point" class="form-label">Entry Point <span class="text-danger">*</span></label>
                                    <input type="text" name="entry_point" class="form-control" id="entry_point" placeholder="Entry Point" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="stop_loss" class="form-label">Stop Loss <span class="text-danger">*</span></label>
                                    <input type="text" name="stop_loss" class="form-control" id="stop_loss" placeholder="Stop Loss" required>
                                </div>
                                
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="take_profit" class="form-label">Take Profit <span class="text-danger">*</span></label>
                                    <input type="text" name="take_profit" class="form-control" id="take_profit" placeholder="Take Profit" required>
                                </div>
                                <div class="form-group col-md-6">
                                <label for="action" class="form-label">Action <span class="text-danger">*</span></label>
                                <select name="action" id="action" class="form-control" required>
                                    <option value="">--Action--</option>
                                    <option value="buy">Buy</option>
                                    <option value="sell">Sell</option>
                                </select>
                                </div>
                            </div>
                           
                            
                            <button type="submit" name="submit" value="Add" class="btn btn-primary" style="margin: 10px;">Add</button>
                            <button type="reset" class="btn btn-outline-primary" style="margin-left: 0px;">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ sample-page ] end -->
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
    var baseURL = "<?= base_url(); ?>";
    $(document).ready(function() {
        $('#category').change(function() {
            var category = $(this).val();
            $.ajax({
                url: baseURL + 'admin/trading_signals/fetch_sub_category',
                method: 'post',
                data: {
                    category: category
                },
                dataType: 'json',
                success: function(response) {
                    $('#sub_category').html('<option value="">Select Sub Category</option>');
                    $.each(response, function(index, data) {
                        $('#sub_category').append('<option value="' + data['id'] + '">' + data['pair_name'] + '</option>');
                    });
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });
    });
</script>
