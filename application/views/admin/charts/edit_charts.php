<div class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <?php foreach ($view_charts as $row) :

                    ?>
                        <div class="card-header">
                            <h5>Edit</h5>
                            <?php if (isset($msg) || validation_errors() !== '') : ?>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <?= validation_errors(); ?>
                                    <?= isset($msg) ? $msg : ''; ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" method="post" action="<?= base_url('charts/charts_update_data'); ?>" enctype="multipart/form-data">
                                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                                <input type="hidden" name="id" value="<?= $row->id ?>">
                                <div class="card-body">
                                    <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">Title<span class="text-danger">*</span> </label>
                                    <input type="text" value="<?=$row->title?>" name="title" parsley-trigger="change" class="form-control" id="title" placeholder="title " required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">Description 1<span class="text-danger">*</span> </label>
                                    <textarea type="text" name="desc1" parsley-trigger="change" class="form-control" id="desc1" placeholder="desc1 " required><?=$row->desc1?></textarea>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label"> heading 1 <span class="text-danger">*</span> </label>
                                    <input type="text" value="<?=$row->heading1?>" name="heading1" parsley-trigger="change" class="form-control" id="heading1" placeholder=" heading1  " required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">image 1 <span class="text-danger">*</span> </label>
                                    <input type="file" name="image1" parsley-trigger="change" class="form-control" id="image1" placeholder="image1" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label"> image 1 name <span class="text-danger">*</span> </label>
                                    <input type="text" value="<?=$row->imagename1?>" name="imgname1" parsley-trigger="change" class="form-control" id="imgname1" placeholder=" Image 1 name  " required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">Image 2 <span class="text-danger">*</span> </label>
                                    <input type="file" name="image2" parsley-trigger="change" class="form-control" id="image2" placeholder="image2" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label"> image 2 name  <span class="text-danger">*</span> </label>
                                    <input type="text" value="<?=$row->imagename2?>" name="imagename2" parsley-trigger="change" class="form-control" id="imagename2" placeholder=" image 2 name  " required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">description 2 <span class="text-danger">*</span> </label>
                                    <textarea type="text" name="desc2" parsley-trigger="change" class="form-control" id="desc2" placeholder="desc2" required><?=$row->desc2?></textarea>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label"> heading 2  <span class="text-danger">*</span> </label>
                                    <input type="text" value="<?=$row->heading2?>" name="heading2" parsley-trigger="change" class="form-control" id="heading2" placeholder=" heading 2  " required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label"> images 1  <span class="text-danger">*</span> </label>
                                    <input type="file" name="images1" parsley-trigger="change" class="form-control" id="images1" placeholder=" images 2 " required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label"> heading 3  <span class="text-danger">*</span> </label>
                                    <input type="text" value="<?=$row->heading3?>" name="heading3" parsley-trigger="change" class="form-control" id="heading3" placeholder=" heading 3 " required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">description 3 <span class="text-danger">*</span> </label>
                                    <textarea type="text" name="desc3" parsley-trigger="change" class="form-control" id="desc3" placeholder="desc3" required><?=$row->desc3?></textarea>
                                </div>
                            </div>
                                    <div class="widget-footer text-left">

                                        <button type="submit" name="submit" value="update charts" class="btn btn-primary " style="margin: 10px;">Update</button>
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