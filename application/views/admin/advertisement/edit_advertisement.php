<div class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <?php foreach ($view_advertisement as $row) :

                    ?>
                        <div class="card-header">
                            <h5>Edit advertisement</h5>
                            <?php if (isset($msg) || validation_errors() !== '') : ?>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <?= validation_errors(); ?>
                                    <?= isset($msg) ? $msg : ''; ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" method="post" action="<?= base_url('advertisement/advertisement_update_data'); ?>"enctype="multipart/form-data">
                                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                                <input type="hidden" name="id" value="<?= $row->id ?>">
                                <div class="card-body">
                                <div class="row">
                            <div class="form-group col-md-12">
                                    <label for="inputEmail4" class="form-label">page name  <span class="text-danger">*</span> </label>
                                    <input type="text" name="page_name" parsley-trigger="change" class="form-control" value="<?=$row->page_name?>" id="page_name" placeholder="page name  " >
                                </div>
                            </div>
                           
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">Image 1 <span class="text-danger">*</span> </label>
                                    <input type="file" name="image1" parsley-trigger="change" class="form-control" id="image1" value="<?=$row->image1?>" placeholder="Image 1 " >
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">Image 1 URL <span class="text-danger">*</span> </label>
                                    <input type="text" name="image1url" parsley-trigger="change" class="form-control" id="image1url" value="<?=$row->image1url?>" placeholder="Image 1 URL " >
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">Image 2 <span class="text-danger">*</span> </label>
                                    <input type="file" name="image2" parsley-trigger="change" class="form-control" id="image2" value="<?=$row->image2?>" placeholder="Image 2 " >
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">Image 2 URL <span class="text-danger">*</span> </label>
                                    <input type="text" name="image2url" parsley-trigger="change" class="form-control" id="image2url" value="<?=$row->image2url?>" placeholder="Image 2 URL " >
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">Image 3 <span class="text-danger">*</span> </label>
                                    <input type="file" name="image3" parsley-trigger="change" class="form-control" id="image3" value="<?=$row->image3?>" placeholder="Image 3 " >
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">Image 3 URL <span class="text-danger">*</span> </label>
                                    <input type="text" name="image3url" parsley-trigger="change" class="form-control" id="image3url" value="<?=$row->image3url?>" placeholder="Image 3 URL " >
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">Image 4 <span class="text-danger">*</span> </label>
                                    <input type="file" name="image4" parsley-trigger="change" class="form-control" id="image4" value="<?=$row->image4?>" placeholder="Image 4 " >
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">Image 4 URL <span class="text-danger">*</span> </label>
                                    <input type="text" name="image4url" parsley-trigger="change" class="form-control" id="image4url" value="<?=$row->image4url?>" placeholder="Image 4 URL " >
                                </div>
                            </div>
                    

                        </div>
                        <div class="widget-footer text-left">

                            <button type="submit" name="submit" value="update advertisement" class="btn btn-primary " style="margin: 10px;">update</button>
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