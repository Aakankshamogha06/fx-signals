<div class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="card">

                    <div class="card-header">
                        <h5>Add advertisement</h5>
                        <?php if (isset($msg) || validation_errors() !== '') : ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <?= validation_errors(); ?>
                                <?= isset($msg) ? $msg : ''; ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" method="post" action="<?= base_url('advertisement/advertisement_submit_data'); ?>"enctype="multipart/form-data">
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                            <div class="row">
                            <div class="form-group col-md-12">
                                    <label for="inputEmail4" class="form-label">page name  <span class="text-danger">*</span> </label>
                                    <input type="text" name="page_name" parsley-trigger="change" class="form-control" id="page_name" placeholder="page name  " required>
                                </div>
                            </div>
                           
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">Image 1 <span class="text-danger">*</span> </label>
                                    <input type="file" name="image1" parsley-trigger="change" class="form-control" id="image1" placeholder="Image 1 " required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">Image 1 URL <span class="text-danger">*</span> </label>
                                    <input type="text" name="image1url" parsley-trigger="change" class="form-control" id="image1url" placeholder="Image 1 URL " required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">Image 2 <span class="text-danger">*</span> </label>
                                    <input type="file" name="image2" parsley-trigger="change" class="form-control" id="image2" placeholder="Image 2 " required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">Image 2 URL <span class="text-danger">*</span> </label>
                                    <input type="text" name="image2url" parsley-trigger="change" class="form-control" id="image2url" placeholder="Image 2 URL " required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">Image 3 <span class="text-danger">*</span> </label>
                                    <input type="file" name="image3" parsley-trigger="change" class="form-control" id="image3" placeholder="Image 3 " required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">Image 3 URL <span class="text-danger">*</span> </label>
                                    <input type="text" name="image3url" parsley-trigger="change" class="form-control" id="image3url" placeholder="Image 3 URL " required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">Image 4 <span class="text-danger">*</span> </label>
                                    <input type="file" name="image4" parsley-trigger="change" class="form-control" id="image4" placeholder="Image 4 " required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">Image 4 URL <span class="text-danger">*</span> </label>
                                    <input type="text" name="image4url" parsley-trigger="change" class="form-control" id="image4url" placeholder="Image 4 URL " required>
                                </div>
                            </div>
                    </div>
                    <div class="widget-footer text-left">

                        <button type="submit" name="submit" value="Add advertisement" class="btn btn-primary " style="margin: 10px;">Add</button>
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