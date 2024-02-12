<div class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="card">

                    <div class="card-header">
                        <h5>Add</h5>
                        <?php if (isset($msg) || validation_errors() !== '') : ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <?= validation_errors(); ?>
                                <?= isset($msg) ? $msg : ''; ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" method="post" action="<?= base_url('author/author_update_data'); ?>" enctype="multipart/form-data">
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">

                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="form-label">Name<span class="text-danger">*</span> </label>
                                <input type="text" name="name" parsley-trigger="change" class="form-control" id="name" value="<?=$row->name?>" placeholder="Name " required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="form-label">Email<span class="text-danger">*</span> </label>
                                <input type="text" name="email" parsley-trigger="change" class="form-control" id="email" value="<?=$row->email?>" placeholder="Email " required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="form-label">Password<span class="text-danger">*</span> </label>
                                <input type="password" name="password" parsley-trigger="change" class="form-control" id="password" value="<?=$row->password?>" placeholder="Password " required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="form-label">Profile Image<span class="text-danger">*</span> </label>
                                <input type="file" name="profile_image" parsley-trigger="change" class="form-control" id="profile_image" value="<?=$row->profile_image?>" placeholder="Profile Image " required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="form-label">Role<span class="text-danger">*</span> </label>
                                <input type="text" name="role_name" parsley-trigger="change" class="form-control" id="role_name" value="<?=$row->role_name?>" placeholder="Role " required>
                            </div>
                            <div class="widget-footer text-left">

                                <button type="submit" name="submit" value="Add " class="btn btn-primary " style="margin: 10px;">Update  </button>
                                <button type="reset" class="btn btn-outline-primary" style="margin-left: 0px;">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- [ sample-page ] end -->
        </div>
       