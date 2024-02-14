<div class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <?php foreach ($view_live_rate as $row) :

                    ?>
                        <div class="card-header">
                            <h5>Edit </h5>
                            <?php if (isset($msg) || validation_errors() !== '') : ?>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <?= validation_errors(); ?>
                                    <?= isset($msg) ? $msg : ''; ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" method="post" action="<?= base_url('live_rate/live_rate_update_data'); ?>"enctype="multipart/form-data">
                                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                                <input type="hidden" name="id" value="<?= $row->id ?>">
                                <div class="card-body">
                      
                            
                                <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">PAGE NAME <span class="text-danger">*</span> </label>
                                    <input type="text" name="page_name" parsley-trigger="change" class="form-control" id="page_name" value="<?=$row->page_name?>" placeholder="Page Name  " required>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4" class="form-label">Description <span class="text-danger">*</span> </label>
                                    <textarea type="text" name="description" parsley-trigger="change" class="form-control" id="description" placeholder="Description  " required><?=$row->description?></textarea>
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

           CKEDITOR.replace('description', {

               format_tags: 'p;h1;h2;h3;h4;h5;h6'

           });

</script>