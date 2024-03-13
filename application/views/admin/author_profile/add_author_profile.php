<div class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="card">

                    <div class="card-header">
                        <h5>Add author_profile</h5>
                        <?php if (isset($msg) || validation_errors() !== '') : ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <?= validation_errors(); ?>
                                <?= isset($msg) ? $msg : ''; ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" method="post" action="<?= base_url('author_profile/author_profile_submit_data'); ?>"enctype="multipart/form-data">
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                            <div class="form-row">
                
                                <div class="form-group col-md-6">
                                    <label for="author_profile_image">Author Profile Image: <span class="text-danger">*</span></label>
                                    <input type="file" name="author_profile_image" class="form-control" id="author_profile_image" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="instagram">Instagram:</label>
                                    <input type="text" name="instagram" class="form-control" id="instagram" required>
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="linkedin">LinkedIn:</label>
                                    <input type="text" name="linkedin" class="form-control" id="linkedin" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="facebook">Facebook:</label>
                                    <input type="text" name="facebook" class="form-control" id="facebook" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="twitter">Twitter:</label>
                                    <input type="text" name="twitter" class="form-control" id="twitter" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="about">About:</label>
                                    <input type="text" name="about" class="form-control" id="about" required>
                                </div>
                            </div>
                            
                    </div>
                    <div class="widget-footer text-left">

                        <button type="submit" name="submit" value="Add author_profile" class="btn btn-primary " style="margin: 10px;">Add author_profile</button>
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