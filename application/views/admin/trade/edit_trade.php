<div class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <?php foreach ($view_trade as $row) :

                    ?>
                        <div class="card-header">
                            <h5>Edit trade</h5>
                            <?php if (isset($msg) || validation_errors() !== '') : ?>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <?= validation_errors(); ?>
                                    <?= isset($msg) ? $msg : ''; ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" method="post" action="<?= base_url('trade/trade_update_data'); ?>"enctype="multipart/form-data">
                                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                                <input type="hidden" name="id" value="<?= $row->id ?>">
                                <div class="card-body">
                      
                            
                                <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">title  <span class="text-danger">*</span> </label>
                                    <input type="text" name="title" parsley-trigger="change" class="form-control" id="title" value="<?=$row->title?>" placeholder="Title  " required>
                                </div>
                                <div class="form-group col-md-6">
                                <label for="trade_type" class="form-label"> trade Category <span class="text-danger">*</span></label>
                                    <select id="trade_type" class="form-control" name="trade_type">
                                        <option value="">Select trade tyoe</option>
                                        <?php
                                        $type_fetch_data = $this->trade_model->type_fetch();
                                        foreach ($type_fetch_data as $data) { ?>
                                            <option value="<?php echo $data['id']; ?>"<?php if ($data['id'] === $row->trade_type) echo 'selected="selected"' ?>><?php echo $data['type_name']; ?></option>
                                        <?php } ?>

                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">trade page name <span class="text-danger">*</span> </label>
                                    <input type="text" name="page_name" parsley-trigger="change" class="form-control" id="page_name" value="<?=$row->page_name?>" placeholder="trade page name  " required>
                                </div>
                            </div>
                            <div class="form-row">  
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4" class="form-label">description  <span class="text-danger">*</span> </label>
                                    <textarea type="text" name="description" parsley-trigger="change" class="form-control" id="description"  placeholder="Description  " required><?=$row->description?></textarea>
                                </div>
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