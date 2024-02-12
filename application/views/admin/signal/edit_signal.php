<div class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <?php foreach ($view_signal as $row) :

                    ?>
                        <div class="card-header">
                            <h5>Edit signal</h5>
                            <?php if (isset($msg) || validation_errors() !== '') : ?>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <?= validation_errors(); ?>
                                    <?= isset($msg) ? $msg : ''; ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" method="post" action="<?= base_url('signal/signal_update_data'); ?>"enctype="multipart/form-data">
                                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                                <input type="hidden" name="id" value="<?= $row->id ?>">
                                <div class="card-body">
                      
                            
                                <div class="form-row">
                                
                                <div class="form-group col-md-6">
                                <label for="type" class="form-label"> signal Category <span class="text-danger">*</span></label>
                                    <select id="type" class="form-control" name="type">
                                        <option value="">Select signal tyoe</option>
                                        <?php
                                        $type_fetch_data = $this->signal_model->type_fetch();
                                        foreach ($type_fetch_data as $data) { ?>
                                            <option value="<?php echo $data['id']; ?>"<?php if ($data['id'] === $row->type) echo 'selected="selected"' ?>><?php echo $data['type_name']; ?></option>
                                        <?php } ?>

                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                <label for="sub_type" class="form-label"> signal sub type <span class="text-danger">*</span></label>
                                    <select id="sub_type" class="form-control" name="sub_type">
                                        <option value="">Select signal sub type</option>
                                        <?php
                                        $sub_type_fetch_data = $this->signal_model->sub_type_fetch();
                                        foreach ($sub_type_fetch_data as $data) { ?>
                                            <option value="<?php echo $data['id']; ?>"<?php if ($data['id'] === $row->sub_type) echo 'selected="selected"' ?>><?php echo $data['sub_type_name']; ?></option>
                                        <?php } ?>

                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">signal title  <span class="text-danger">*</span> </label>
                                    <input type="text" name="title" parsley-trigger="change" class="form-control" id="title" value="<?=$row->title?>"placeholder="signal title  " required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">signal page name <span class="text-danger">*</span> </label>
                                    <input type="text" name="page_name" parsley-trigger="change" class="form-control" id="page_name" value="<?=$row->page_name?>" placeholder="signal page name  " required>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4" class="form-label">Description  <span class="text-danger">*</span> </label>
                                    <textarea type="text" name="description" parsley-trigger="change" class="form-control" id="description" placeholder="Description  " required><?=$row->description?></textarea>
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