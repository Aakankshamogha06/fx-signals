<div class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="card">

                    <div class="card-header">
                        <h5>Add live_rate</h5>
                        <?php if (isset($msg) || validation_errors() !== '') : ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <?= validation_errors(); ?>
                                <?= isset($msg) ? $msg : ''; ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" method="post" action="<?= base_url('live_rate/live_rate_submit_data'); ?>" enctype="multipart/form-data">
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">


                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">PAGE NAME <span class="text-danger">*</span> </label>
                                    <input type="text" name="page_name" parsley-trigger="change" class="form-control" id="page_name" placeholder="Page Name  " required>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4" class="form-label">Description <span class="text-danger">*</span> </label>
                                    <textarea type="text" name="description" parsley-trigger="change" class="form-control" id="description" placeholder="Description  " required></textarea>
                                </div>
                            </div>
                    </div>
                    <div class="widget-footer text-left">

                        <button type="submit" name="submit" value="Add live_rate" class="btn btn-primary " style="margin: 10px;">Add live_rate</button>
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
    </script>