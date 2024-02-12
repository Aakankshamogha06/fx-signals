<div class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="card">

                    <div class="card-header">
                        <h5>Add </h5>
                        <?php if (isset($msg) || validation_errors() !== '') : ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <?= validation_errors(); ?>
                                <?= isset($msg) ? $msg : ''; ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" method="post" action="<?= base_url('sub_sub_menu/sub_sub_menu_submit_data'); ?>"enctype="multipart/form-data">
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                
                           
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                <label for="menu_id" class="form-label"> MENU NAME <span class="text-danger">*</span></label>
                                    <select id="menu_id" class="form-control" name="menu_id">
                                        <option value="">SELECT MENU NAME</option>
                                        <?php
                                        $role_fetch_data = $this->sub_sub_menu_model->role_fetch();
                                        foreach ($role_fetch_data as $data) { ?>
                                            <option value="<?php echo $data['id']; ?>"><?php echo $data['menu_name']; ?></option>
                                        <?php } ?>

                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                <label for="sub_menu_id" class="form-label">SUB MENU NAME <span class="text-danger">*</span></label>
                                    <select id="sub_menu_id" class="form-control" name="sub_menu_id">
                                        <option value="">SELECT SUB MENU NAME</option>
                                        <?php
                                        $sub_menu_fetch_data = $this->sub_sub_menu_model->sub_menu_fetch();
                                        foreach ($sub_menu_fetch_data as $data) { ?>
                                            <option value="<?php echo $data['id']; ?>"><?php echo $data['sub_menu']; ?></option>
                                        <?php } ?>

                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4" class="form-label">Sub Sub Menu Name<span class="text-danger">*</span> </label>
                                    <input type="text" name="name" parsley-trigger="change" class="form-control" id="name" placeholder="Sub sub Menu name " required>
                                </div>
                                

                    </div>
                    <div class="widget-footer text-left">

                        <button type="submit" name="submit" value="Add " class="btn btn-primary " style="margin: 10px;">Add SUB MENU </button>
                        <button type="reset" class="btn btn-outline-primary" style="margin-left: 0px;">Reset</button>
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
           CKEDITOR.replace('SUB MENU_desc', {

format_tags: 'p;h1;h2;h3;h4;h5;h6'

});

</script>