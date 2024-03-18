<div class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="card">

                    <div class="card-header">
                        <h5>Add broker</h5>
                        <?php if (isset($msg) || validation_errors() !== '') : ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <?= validation_errors(); ?>
                                <?= isset($msg) ? $msg : ''; ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" method="post" action="<?= base_url('broker/broker_submit_data'); ?>"enctype="multipart/form-data">
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                            <div class="row">
                            <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">Website URL  <span class="text-danger">*</span> </label>
                                    <input type="text" name="website_url" parsley-trigger="change" class="form-control" id="website_url" placeholder="Website URL  " required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">Order no  <span class="text-danger">*</span> </label>
                                    <input type="text" name="order_id" parsley-trigger="change" class="form-control" id="order_id" placeholder="Website URL  " required>
                                </div>
                            </div>
                           
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">Website Logo <span class="text-danger">*</span> </label>
                                    <input type="file" name="broker_image" parsley-trigger="change" class="form-control" id="broker_image" placeholder="Website Logo " required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">Rating <span class="text-danger">*</span> </label>
                                    <input type="text" name="rating" parsley-trigger="change" class="form-control" id="rating" placeholder="Rating " required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="type" class="form-label">Type <span class="text-danger">*</span></label>
                                    <select name="type" parsley-trigger="change" class="form-control" id="type" required>
                                        <option value="">Select a type</option>
                                        <option value="forex-brokers">Forex Broker</option>
                                        <option value="crypto-brokers">Crypto Broker</option>
                                        <option value="indices-brokers">Indices Broker</option>
                                        <option value="commodities-brokers">Commodities Broker</option>
                                        <!-- Add more options as needed -->
                                    </select>
                                </div>
                            </div>
                        </div>
                    <div class="widget-footer text-left">

                        <button type="submit" name="submit" value="Add broker" class="btn btn-primary " style="margin: 10px;">Add</button>
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

           CKEDITOR.replace('long_desc', {

               format_tags: 'p;h1;h2;h3;h4;h5;h6'

           });

</script>