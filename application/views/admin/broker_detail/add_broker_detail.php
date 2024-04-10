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
                            <div class="form-group col-md-6">
                            <label for="broker_id" class="form-label"> Broker Name <span class="text-danger">*</span></label>
                                    <select id="broker_id" class="form-control" name="broker_id">
                                        <option value="">Select Broker Name</option>
                                        <?php
                                        $broker_fetch_data = $this->broker_detail_model->broker_fetch();
                                        foreach ($broker_fetch_data as $data) { ?>
                                            <option value="<?php echo $data['id']; ?>"><?php echo $data['company_name']; ?></option>
                                        <?php } ?>

                                    </select>
                            </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">Broker Contact Number  <span class="text-danger">*</span> </label>
                                    <input type="text" name="broker_contact" parsley-trigger="change" class="form-control" id="broker_contact" placeholder="Broker Contact Number " required>
                                </div>
                            </div>
                            <div class="row">
                            <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">Broker Email Id  <span class="text-danger">*</span> </label>
                                    <input type="text" name="broker_email" parsley-trigger="change" class="form-control" id="broker_email" placeholder="Broker Email Id  " required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">About Broker <span class="text-danger">*</span> </label>
                                    <textarea type="text" name="about" parsley-trigger="change" class="form-control" id="about" placeholder="About Broker " required></textarea>
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

           CKEDITOR.replace('about', {

               format_tags: 'p;h1;h2;h3;h4;h5;h6'

           });

</script>