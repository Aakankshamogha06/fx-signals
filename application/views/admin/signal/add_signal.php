<div class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="card">

                    <div class="card-header">
                        <h5>Add signal</h5>
                        <?php if (isset($msg) || validation_errors() !== '') : ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <?= validation_errors(); ?>
                                <?= isset($msg) ? $msg : ''; ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" method="post" action="<?= base_url('signal/signal_submit_data'); ?>"enctype="multipart/form-data">
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                            
                           
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                <label for="type" class="form-label"> Type <span class="text-danger">*</span></label>
                                    <select id="type" class="form-control" name="type">
                                        <option value="">Select Type</option>
                                        <?php
                                        $type_fetch_data = $this->signal_model->type_fetch();
                                        foreach ($type_fetch_data as $data) { ?>
                                            <option value="<?php echo $data['id']; ?>"><?php echo $data['type_name']; ?></option>
                                        <?php } ?>

                                    </select>
                                </div>

                                <div class="form-group col-md-6">
                                <label for="sub_type" class="form-label"> Sub Type <span class="text-danger">*</span></label>
                                    <select id="sub_type" class="form-control" name="sub_type">
                                        <option value="">Select Sub Type</option>
                                        <?php
                                        $sub_type_fetch_data = $this->signal_model->sub_type_fetch();
                                        foreach ($sub_type_fetch_data as $data) { ?>
                                            <option value="<?php echo $data['id']; ?>"><?php echo $data['sub_type_name']; ?></option>
                                        <?php } ?>

                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">signal title  <span class="text-danger">*</span> </label>
                                    <input type="text" name="title" parsley-trigger="change" class="form-control" id="title" placeholder="signal title  " required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">signal page name <span class="text-danger">*</span> </label>
                                    <input type="text" name="page_name" parsley-trigger="change" class="form-control" id="page_name" placeholder="signal page name  " required>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4" class="form-label">Description  <span class="text-danger">*</span> </label>
                                    <textarea type="text" name="description" parsley-trigger="change" class="form-control" id="description" placeholder="Description  " required></textarea>
                                </div>
                            </div>
                    </div>
                    <div class="widget-footer text-left">

                        <button type="submit" name="submit" value="Add signal" class="btn btn-primary " style="margin: 10px;">Add signal</button>
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

           CKEDITOR.replace('description', {

               format_tags: 'p;h1;h2;h3;h4;h5;h6'

           });

</script>