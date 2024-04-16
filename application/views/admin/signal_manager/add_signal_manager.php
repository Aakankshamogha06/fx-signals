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
                        <form class="form-horizontal" method="post" action="<?= base_url('signal_manager/signal_manager_submit_data'); ?>" enctype="multipart/form-data">
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                            <div class ="row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="form-label">User Name<span class="text-danger">*</span> </label>
                                <input type="text" name="username" parsley-trigger="change" class="form-control" id="username" placeholder="User Name " required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="form-label">First Name<span class="text-danger">*</span> </label>
                                <input type="text" name="firstname" parsley-trigger="change" class="form-control" id="firstname" placeholder="First Name " required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="form-label">Last Name <span class="text-danger">*</span> </label>
                                <input type="text" name="lastname" parsley-trigger="change" class="form-control" id="lastname" placeholder="Last Name " required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="form-label">mobile no <span class="text-danger">*</span> </label>
                                <input type="text" name="mobile_no" parsley-trigger="change" class="form-control" id="mobile_no" placeholder="mobile no " required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="form-label">Email<span class="text-danger">*</span> </label>
                                <input type="text" name="email" parsley-trigger="change" class="form-control" id="email" placeholder="Email " required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="form-label">Password<span class="text-danger">*</span> </label>
                                <input type="password" name="password" parsley-trigger="change" class="form-control" id="password" placeholder="Password " required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="form-label">Profile Image<span class="text-danger">*</span> </label>
                                <input type="file" name="profile_image" parsley-trigger="change" class="form-control" id="profile_image" placeholder="Profile Image " required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="form-label">Sample chart<span class="text-danger">*</span> </label>
                                <input type="file" name="sample_chart" parsley-trigger="change" class="form-control" id="sample_chart" placeholder="Sample chart " required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="form-label">Role<span class="text-danger">*</span> </label>
                                <input type="text" name="role_name" parsley-trigger="change" class="form-control" id="role_name" placeholder="Role " required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="form-label">Linked in<span class="text-danger">*</span> </label>
                                <input type="text" name="linkedin" parsley-trigger="change" class="form-control" id="linkedin" placeholder="Linked in" required>
                            </div>
                        </div>
                            <div class="widget-footer text-left">

                                <button type="submit" name="submit" value="Add " class="btn btn-primary " style="margin: 10px;">Add</button>
                                <button type="reset" class="btn btn-outline-primary" style="margin-left: 0px;">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- [ sample-page ] end -->
        </div>
       