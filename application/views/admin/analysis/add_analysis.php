<div class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="card">

                    <div class="card-header">
                        <h5>Add analysis</h5>
                        <?php if (isset($msg) || validation_errors() !== '') : ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <?= validation_errors(); ?>
                                <?= isset($msg) ? $msg : ''; ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" method="post" action="<?= base_url('analysis/analysis_submit_data'); ?>"enctype="multipart/form-data">
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                            
                           
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">analysis heading  <span class="text-danger">*</span> </label>
                                    <input type="text" name="heading" parsley-trigger="change" class="form-control" id="heading" placeholder="analysis heading  " required>
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">analysis Image  <span class="text-danger">*</span> </label>
                                    <input type="file" name="analysis_image" parsley-trigger="change" class="form-control" id="analysis_image" placeholder="analysis Image  " required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                <label for="type" class="form-label"> type <span class="text-danger">*</span></label>
                                    <select id="type" class="form-control" name="type">
                                        <option value="">Select type</option>
                                        <?php
                                        $category_fetch_data = $this->analysis_model->category_fetch();
                                        foreach ($category_fetch_data as $data) { ?>
                                            <option value="<?php echo $data['id']; ?>"><?php echo $data['name']; ?></option>
                                        <?php } ?>

                                    </select>
                                </div>
                                        </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">analysis Author  <span class="text-danger">*</span> </label>
                                    <input type="text" name="author" parsley-trigger="change" class="form-control" id="author" placeholder="analysis Author  " required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">analysis Date  <span class="text-danger">*</span> </label>
                                    <input type="date" name="date" parsley-trigger="change" class="form-control" id="date" placeholder="analysis Date  " required>
                                </div>
                            </div>
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4" class="form-label"> Description  <span class="text-danger">*</span> </label>
                                    <textarea type="text" name="description" parsley-trigger="change" class="form-control" id="description" placeholder="analysis Description  " required></textarea>
                                </div>
                                
                            

                    </div>
                    <div class="widget-footer text-left">

                        <button type="submit" name="submit" value="Add analysis" class="btn btn-primary " style="margin: 10px;">Add analysis</button>
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