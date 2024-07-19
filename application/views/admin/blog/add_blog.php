<div class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Add blog</h5>
                        <?php if (isset($msg) || validation_errors() !== '') : ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <?= validation_errors(); ?>
                            <?= isset($msg) ? $msg : ''; ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                    aria-hidden="true">×</span></button>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" method="post" action="<?= base_url('blog/blog_submit_data'); ?>"
                            enctype="multipart/form-data">
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>"
                                value="<?php echo $this->security->get_csrf_hash(); ?>">

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">Slug <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" name="slug" parsley-trigger="change" class="form-control"
                                        id="slug" placeholder="Slug  " required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">seo keywords <span
                                            class="text-danger">*</span> </label>
                                    <input type="text" name="seo_keywords" parsley-trigger="change" class="form-control"
                                        id="seo_keywords" placeholder="seo keywords  " required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4" class="form-label">Meta Description <span
                                            class="text-danger">*</span> </label>
                                    <input type="text" name="meta_description" parsley-trigger="change"
                                        class="form-control" id="meta_description" placeholder="Meta Description  "
                                        required>
                                </div>

                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">Blog name <span
                                            class="text-danger">*</span> </label>
                                    <input type="text" name="blog_name" parsley-trigger="change" class="form-control"
                                        id="blog_name" placeholder="Blog name  " required>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">Blog Image <span
                                            class="text-danger">*</span> </label>
                                    <input type="file" name="blog_image" parsley-trigger="change" class="form-control"
                                        id="blog_image" placeholder="Blog Image  " required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="blog_category" class="form-label"> Blog Category <span
                                            class="text-danger">*</span></label>
                                    <select id="blog_category" class="form-control" name="blog_category">
                                        <option value="">Select Blog Category</option>
                                        <?php
                                        $blog_fetch_data = $this->blog_model->blog_fetch();
                                        foreach ($blog_fetch_data as $data) { ?>
                                        <option value="<?php echo $data['id']; ?>"><?php echo $data['name']; ?></option>
                                        <?php } ?>

                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">Blog Date <span
                                            class="text-danger">*</span> </label>
                                    <input type="date" name="blog_date" parsley-trigger="change" class="form-control"
                                        id="blog_date" placeholder="Blog Date  " required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4" class="form-label">Blog Description <span
                                            class="text-danger">*</span> </label>
                                    <textarea type="text" name="blog_desc" parsley-trigger="change" class="form-control"
                                        id="blog_desc" placeholder="Blog Description  " required></textarea>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4" class="form-label">Blog Long Description <span
                                            class="text-danger">*</span> </label>
                                    <textarea type="text" name="long_desc" parsley-trigger="change" class="form-control"
                                        id="long_desc" placeholder="Blog Long Description  " required></textarea>
                                </div>
                            </div>
                            <div class="widget-footer">
                                <button type="submit" name="submit" value="Add blog" class="btn btn-primary ">Add blog</button>
                                <button type="reset" class="btn btn-outline-primary"
                                    style="margin-left: 0px;">Reset</button>
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

        CKEDITOR.replace('blog_desc', {

            format_tags: 'p;h1;h2;h3;h4;h5;h6'

        });
        </script>