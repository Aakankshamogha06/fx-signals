<div class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <?php foreach ($view_analysis as $row) :

                    ?>
                        <div class="card-header">
                            <h5>Edit analysis</h5>
                            <?php if (isset($msg) || validation_errors() !== '') : ?>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <?= validation_errors(); ?>
                                    <?= isset($msg) ? $msg : ''; ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" method="post" action="<?= base_url('analysis/analysis_update_data'); ?>" enctype="multipart/form-data">
                                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                                <input type="hidden" name="id" value="<?= $row->id ?>">
                                <div class="card-body">
                                    <div class="form-row">
                                    <div class="form-group col-md-6">
                                            <label for="inputEmail4" class="form-label">analysis heading <span class="text-danger">*</span> </label>
                                            <input type="text" name="heading" parsley-trigger="change" class="form-control" id="heading" value="<?= $row->heading ?>" placeholder="analysis heading  " required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4" class="form-label">analysis Image <span class="text-danger">*</span> </label>
                                            <input type="file" name="analysis_image" parsley-trigger="change" class="form-control" id="analysis_image" value="<?= $row->analysis_image ?>" placeholder="analysis Image  " required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="type" class="form-label"> type <span class="text-danger">*</span></label>
                                            <select id="type" class="form-control" name="type">
                                                <option value="">Select type</option>
                                                <?php
                                                $category_fetch_data = $this->news_model->category_fetch();
                                                foreach ($category_fetch_data as $data) { ?>
                                                    <option value="<?php echo $data['id']; ?>" <?php if ($data['id'] === $row->type) echo 'selected="selected"' ?>><?php echo $data['name']; ?></option>
                                                <?php } ?>

                                            </select>
                                        </div>
                                                </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4" class="form-label">analysis Author <span class="text-danger">*</span> </label>
                                            <input type="text" name="author" parsley-trigger="change" class="form-control" id="author" value="<?= $row->author ?>" placeholder="analysis Author  " required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4" class="form-label">analysis Date <span class="text-danger">*</span> </label>
                                            <input type="date" name="date" parsley-trigger="change" class="form-control" id="date" value="<?= $row->date ?>" placeholder="analysis Date  " required>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="inputEmail4" class="form-label">analysis Description <span class="text-danger">*</span> </label>
                                        <textarea type="text" name="description" parsley-trigger="change" class="form-control" id="description" placeholder="Analysis Description  " required><?= $row->description ?></textarea>
                                    </div>
                                    



                                    <div class="widget-footer text-left">

                                        <button type="submit" name="submit" value="update" class="btn btn-primary " style="margin: 10px;">update </button>
                                        <button type="reset" class="btn btn-outline-primary" style="margin-left: 0px;">Reset</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                </div>
            </div>
            <!-- [ sample-page ] end -->
        </div>
        <!-- [ Main Content ] end -->
    <?php endforeach; ?>
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>



    <script>
        CKEDITOR.replace('description ', {

            format_tags: 'p;h1;h2;h3;h4;h5;h6'

        });
    </script>