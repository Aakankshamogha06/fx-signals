<div class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <?php foreach ($view_sub_menu as $row) :

                    ?>
                        <div class="card-header">
                            <h5>Edit sub_menu</h5>
                            <?php if (isset($msg) || validation_errors() !== '') : ?>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <?= validation_errors(); ?>
                                    <?= isset($msg) ? $msg : ''; ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" method="post" action="<?= base_url('sub_menu/sub_menu_update_data'); ?>">
                                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                                <input type="hidden" name="id" value="<?= $row->id ?>">
                                
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                <label for="menu" class="form-label"> Menu Name <span class="text-danger">*</span></label>
                                    <select id="menu" class="form-control" name="menu">
                                        <option value="">Select menu Name</option>
                                        <?php
                                        $role_fetch_data = $this->sub_menu_model->role_fetch();
                                        foreach ($role_fetch_data as $data) { ?>
                                            <option value="<?php echo $data['id']; ?>"<?php if ($data['id'] === $row->menu ) echo 'selected="selected"'?>><?php echo $data['menu_name']; ?></option>
                                        <?php } ?>

                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4" class="form-label">SUB MENU <span class="text-danger">*</span> </label>
                                    <input type="text" name="sub_menu" parsley-trigger="change" class="form-control" id="sub_menu" value="<?= $row->sub_menu ?>" placeholde="Sub Menu " required>
                                </div>
                               
                            
                            

                    </div>
                        <div class="widget-footer text-left">

                            <button type="submit" name="submit" value="update sub_menu" class="btn btn-primary " style="margin: 10px;">update sub_menu</button>
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

</div>

<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

 

<script>

           CKEDITOR.replace('long_desc', {

               format_tags: 'p;h1;h2;h3;h4;h5;h6'

           });

</script>