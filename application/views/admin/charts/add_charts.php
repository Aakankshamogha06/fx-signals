<div class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="card">

                    <div class="card-header">
                        <h5>ADD CHARTS</h5>
                        <?php if (isset($msg) || validation_errors() !== '') : ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <?= validation_errors(); ?>
                                <?= isset($msg) ? $msg : ''; ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" method="post" action="<?= base_url('charts/charts_submit_data'); ?>" enctype="multipart/form-data">
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">Title<span class="text-danger">*</span> </label>
                                    <input type="text" name="title" parsley-trigger="change" class="form-control" id="title" placeholder="title " required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">Description 1<span class="text-danger">*</span> </label>
                                    <textarea type="text" name="desc1" parsley-trigger="change" class="form-control" id="desc1" placeholder="desc1 " required></textarea>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label"> heading 1 <span class="text-danger">*</span> </label>
                                    <input type="text" name="heading1" parsley-trigger="change" class="form-control" id="heading1" placeholder=" heading1  " required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">image 1 <span class="text-danger">*</span> </label>
                                    <input type="file" name="image1" parsley-trigger="change" class="form-control" id="image1" placeholder="image1" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label"> image 1 name <span class="text-danger">*</span> </label>
                                    <input type="text" name="imgname1" parsley-trigger="change" class="form-control" id="imgname1" placeholder=" Image 1 name  " required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">Image 2 <span class="text-danger">*</span> </label>
                                    <input type="file" name="image2" parsley-trigger="change" class="form-control" id="image2" placeholder="image2" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label"> image 2 name  <span class="text-danger">*</span> </label>
                                    <input type="text" name="imgname2" parsley-trigger="change" class="form-control" id="imgname2" placeholder=" image 2 name  " required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">description 2 <span class="text-danger">*</span> </label>
                                    <textarea type="text" name="desc2" parsley-trigger="change" class="form-control" id="desc2" placeholder="desc2" required></textarea>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label"> heading 2  <span class="text-danger">*</span> </label>
                                    <input type="text" name="heading2" parsley-trigger="change" class="form-control" id="heading2" placeholder=" heading 2  " required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label"> images 1  <span class="text-danger">*</span> </label>
                                    <input type="file" name="images1" parsley-trigger="change" class="form-control" id="images1" placeholder=" images 2 " required>
                                </div>
                            </div>
                            <div class="form-row">
                            <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label"> images 2  <span class="text-danger">*</span> </label>
                                    <input type="file" name="images2" parsley-trigger="change" class="form-control" id="images2" placeholder=" images 2 " required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label"> heading 3  <span class="text-danger">*</span> </label>
                                    <input type="text" name="heading3" parsley-trigger="change" class="form-control" id="heading3" placeholder=" heading 3 " required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">description 3 <span class="text-danger">*</span> </label>
                                    <textarea type="text" name="desc3" parsley-trigger="change" class="form-control" id="desc3" placeholder="desc3" required></textarea>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">category<span class="text-danger">*</span> </label>
                                    <input type="text" name="category" parsley-trigger="change" class="form-control" id="category" placeholder="category " required>
                                </div>
                            </div>
                            <div class="widget-footer text-left">

                                <button type="submit" name="submit" value="Add calender" class="btn btn-primary " style="margin: 10px;">Add</button>
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
            CKEDITOR.replace('desc1', {
                format_tags: 'p;h1;h2;h3;h4;h5;h6'
            });
            CKEDITOR.replace('desc2', {
                format_tags: 'p;h1;h2;h3;h4;h5;h6'
            });
            CKEDITOR.replace('desc3', {
                format_tags: 'p;h1;h2;h3;h4;h5;h6'
            });
        </script>