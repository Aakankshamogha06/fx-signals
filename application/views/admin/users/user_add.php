<div class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="card">

                    <div class="card-header">
                        <h5>Add User</h5>
                        <?php if (isset($msg) || validation_errors() !== ''): ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <?= validation_errors(); ?>
                                <?= isset($msg) ? $msg : ''; ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                        aria-hidden="true">×</span></button>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="card-body font-weight-bold">
                        <?php echo form_open(base_url('admin/users/add')); ?>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="firstname">First Name</label>
                                <input type="text" name="firstname" class="form-control" id="firstname"
                                    placeholder="First Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="lastname">Last Name</label>
                                <input type="text" name="lastname" class="form-control" id="lastname" placeholder="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="mobile_no">Mobile No</label>
                                <input type="number" name="mobile_no" class="form-control" id="mobile_no"
                                    placeholder="">
                            </div>

                          

                          
                            <div class="form-group col-md-6">
                                <label for="password">Password</label>

                                <input type="password" name="password" class="form-control" id="password"
                                    placeholder="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="role">Select Role</label>
                                <select name="user_role" class="form-control">
                                    <option value="">Select Role</option>
                                    <?php

                                    $role_fetch_data = $this->User_model->role_fetch();
                                    foreach ($role_fetch_data as $data) { ?>
                                        <option value="<?php echo $data['id']; ?>"><?php echo $data['role_name']; ?>
                                        </option>
                                    <?php } ?>


                                </select>
                            </div>
                        </div>
                        <input type="submit" class="btn  btn-primary" name="submit" value="Add User">
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
            <!-- [ sample-page ] end -->
        </div>
        <!-- [ Main Content ] end -->