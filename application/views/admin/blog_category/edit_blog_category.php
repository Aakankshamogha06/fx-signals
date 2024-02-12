<div class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <?php foreach ($view_blog_category as $row) :

                    ?>
                        <div class="card-header">
                            <h5>Edit blog_category</h5>
                            <?php if (isset($msg) || validation_errors() !== '') : ?>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <?= validation_errors(); ?>
                                    <?= isset($msg) ? $msg : ''; ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" method="post" action="<?= base_url('blog_category/blog_category_update_data'); ?>">
                                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                                <input type="hidden" name="id" value="<?= $row->id ?>">
                                <div class="form-row">
                                    <div class="form-group col-md-6">

                                        <label for="inputEmail4" class="form-label">blog_category Name<span class="text-danger">*</span> </label>
                                        <input type="text" name="category" value="<?= $row->category ?>" parsley-trigger="change" class="form-control" id="category" placeholder="Name" required>

                                    </div>
                                   

                                </div>

                        </div>
                        <div class="widget-footer text-left">

                            <button type="submit" name="submit" value="update blog_category" class="btn btn-primary " style="margin: 10px;">update blog category</button>
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