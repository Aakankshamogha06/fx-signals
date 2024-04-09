<div class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="card">

                    <div class="card-header">
                        <h5>Add broker_detail</h5>
                        <?php if (isset($msg) || validation_errors() !== '') : ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <?= validation_errors(); ?>
                                <?= isset($msg) ? $msg : ''; ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" method="post" action="<?= base_url('broker_detail/broker_detail_submit_data'); ?>"enctype="multipart/form-data">
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                            <div class="row">
                            <div class="form-group col-md-12">
                                    <label for="inputEmail4" class="form-label">Website Name  <span class="text-danger">*</span> </label>
                                    <input type="text" name="website_name" parsley-trigger="change" class="form-control" id="website_name" value="<?=$row->website_name?>" placeholder="Website Name  " required>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4" class="form-label">Ranking <span class="text-danger">*</span> </label>
                                    <input type="text" name="ranking" parsley-trigger="change" class="form-control" id="ranking" value="<?=$row->ranking?>" placeholder="Ranking " required>
                                </div>
                            </div>
                            <div class="row">
                            <div class="form-group col-md-12">
                                    <label for="inputEmail4" class="form-label">Website URL  <span class="text-danger">*</span> </label>
                                    <input type="text" name="website_url" parsley-trigger="change" class="form-control" id="website_url" value="<?=$row->website_url?>" placeholder="Website URL  " required>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4" class="form-label">Order no <span class="text-danger">*</span> </label>
                                    <input type="text" name="order_id" parsley-trigger="change" class="form-control" id="order_id" value="<?=$row->order_id?>" placeholder="order no " required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">Website Logo <span class="text-danger">*</span> </label>
                                    <input type="file" name="broker_detail_image" parsley-trigger="change" class="form-control" id="broker_detail_image" value="<?=$row->broker_detail_image?>" placeholder="Website Logo " required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">Rating <span class="text-danger">*</span> </label>
                                    <input type="text" name="rating" parsley-trigger="change" class="form-control" id="rating" value="<?=$row->rating?>" placeholder="Rating " required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="type" class="form-label">Type <span class="text-danger">*</span></label>
                                    <select name="type" parsley-trigger="change" class="form-control" id="type" required>
                                        <option value="">Select a type</option>
                                        <option value="forex-broker_details">Forex broker_detail</option>
                                        <option value="crypto-broker_details">Crypto broker_detail</option>
                                        <option value="indices-broker_details">Indices broker_detail</option>
                                        <option value="commodities-broker_details">Commodities broker_detail</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    <div class="widget-footer text-left">

                        <button type="submit" name="submit" value="Add broker_detail" class="btn btn-primary " style="margin: 10px;">Add</button>
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