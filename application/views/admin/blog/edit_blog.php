<div class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <?php foreach ($view_blog as $row) :

                    ?>
                        <div class="card-header">
                            <h5>Edit Blog</h5>
                            <?php if (isset($msg) || validation_errors() !== '') : ?>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <?= validation_errors(); ?>
                                    <?= isset($msg) ? $msg : ''; ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" method="post" action="<?= base_url('blog/blog_update_data'); ?>"enctype="multipart/form-data">
                                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                                <input type="hidden" name="id" value="<?= $row->id ?>">
                                <div class="card-body">
                      
                            
                                <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">Blog Name  <span class="text-danger">*</span> </label>
                                    <input type="text" name="blog_name" parsley-trigger="change" class="form-control" id="blog_name" placeholder="Blog Name  " value="<?= $row->blog_name ?>" required>
                                </div>
                                <div class="form-group col-md-6">
                                <label for="blog_category" class="form-label"> Blog Category <span class="text-danger">*</span></label>
                                    <select id="blog_category" class="form-control" name="blog_category">
                                        <option value="">Select Blog Category</option>
                                        <?php
                                        $blog_fetch_data = $this->blog_model->blog_fetch();
                                        foreach ($blog_fetch_data as $data) { ?>
                                            <option value="<?php echo $data['id']; ?>"<?php if ($data['id'] === $row->blog_category) echo 'selected="selected"' ?>><?php echo $data['category']; ?></option>
                                        <?php } ?>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">Blog Image  <span class="text-danger">*</span> </label>
                                    <input type="file" name="blog_image" parsley-trigger="change" class="form-control" id="blog_image" value="<?= $row->blog_image ?>" placeholder="Blog Image  " required>
                                </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">Blog Author  <span class="text-danger">*</span> </label>
                                    <input type="text" name="blog_author" parsley-trigger="change" class="form-control" id="blog_author" value="<?= $row->blog_author ?>" placeholder="Blog Author  " required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">Blog Date  <span class="text-danger">*</span> </label>
                                    <input type="date" name="blog_date" parsley-trigger="change" class="form-control" id="blog_date" value="<?= $row->blog_date ?>" placeholder="Blog Date  " required>
                                </div>
                            </div>
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4" class="form-label">Blog Description  <span class="text-danger">*</span> </label>
                                    <textarea type="text" name="blog_desc" parsley-trigger="change" class="form-control" id="blog_desc" placeholder="Blog Description  " required><?= $row->blog_desc ?></textarea>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4" class="form-label">Blog Long Description  <span class="text-danger">*</span> </label>
                                    <textarea type="text" name="long_desc" parsley-trigger="change" class="form-control" id="long_desc" placeholder="Blog Description  " required><?= $row->long_desc ?></textarea>
                                </div>
                    

                        </div>
                        <div class="widget-footer text-left">

                            <button type="submit" name="submit" value="update" class="btn btn-primary " style="margin: 10px;">update </button>
                            <button type="reset" class="btn btn-outline-primary" style="margin-left: 0px;">Reset</button>
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

           CKEDITOR.replace('long_desc', {

               format_tags: 'p;h1;h2;h3;h4;h5;h6'

           });

</script>