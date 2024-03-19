<div class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="card">

                    <div class="card-header">
                        <h5>Add forecast</h5>
                        <?php if (isset($msg) || validation_errors() !== '') : ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <?= validation_errors(); ?>
                                <?= isset($msg) ? $msg : ''; ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" method="post" action="<?= base_url('forecast/forecast_submit_data'); ?>"enctype="multipart/form-data">
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                            <div class="row">
                            <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">Forecast Title  <span class="text-danger">*</span> </label>
                                    <input type="text" name="forecast_name" parsley-trigger="change" class="form-control" id="forecast_name" placeholder="Forecast Title  " required>
                                </div>
                                <!-- <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">Forecast Images <span class="text-danger">*</span> </label>
                                    <input type="file" name="forecast_image" parsley-trigger="change" class="form-control" id="forecast_image" placeholder="Forecast Images " required >
                                </div> -->
                                <div class="form-group col-md-6">
            <label for="inputEmail4" class="form-label">Forecast Images <span class="text-danger">*</span></label>
            <input type="file" name="forecast_image[]" parsley-trigger="change" class="form-control" id="forecast_image" placeholder="Forecast Images" required multiple>
        </div>
                            </div>
                           
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="forecast_type" class="form-label">Type <span class="text-danger">*</span></label>
                                    <select name="forecast_type" parsley-trigger="change" class="form-control" id="forecast_type" required>
                                        <option value="">Select a type</option>
                                        <option value="forex-forecasts">Forex forecast</option>
                                        <option value="crypto-forecasts">Crypto forecast</option>
                                        <option value="indices-forecasts">Indices forecast</option>
                                        <option value="commodities-forecasts">Commodities forecast</option>
                                        <!-- Add more options as needed -->
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputEmail4" class="form-label">Description <span class="text-danger">*</span> </label>
                                <textarea type="text" name="description" parsley-trigger="change" class="form-control" id="description" placeholder="Description " required></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputEmail4" class="form-label">Long Description <span class="text-danger">*</span> </label>
                                <textarea type="text" name="long_description" parsley-trigger="change" class="form-control" id="long_description" placeholder="Long Description " required></textarea>
                            </div>
                        </div>
                    <div class="widget-footer text-left">

                        <button type="submit" name="submit" value="Add forecast" class="btn btn-primary " style="margin: 10px;">Add</button>
                        <button type="reset" class="btn btn-outline-primary" style="margin-left: 0px;">Reset</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- [ sample-page ] end -->
    </div>
    <!-- [ Main Content ] end -->
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

 

<script>

           CKEDITOR.replace('description', { 
            format_tags: 'p;h1;h2;h3;h4;h5;h6'
           });
           CKEDITOR.replace('long_description', { 
            format_tags: 'p;h1;h2;h3;h4;h5;h6'
           });

</script>