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
                   <form class="form-horizontal" method="post" action="<?= base_url('pricing_features/pricing_features_submit_data'); ?>" enctype="multipart/form-data">
                       <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">


                       <div class="form-row">
                           <div class="form-group col-md-12">
                               <label for="pricing_id" class="form-label"> PRICING NAME <span class="text-danger">*</span></label>
                               <select id="pricing_id" class="form-control" name="pricing_id">
                                   <option value="">SELECT PRICING NAME</option>
                                   <?php
                                    $role_fetch_data = $this->pricing_features_model->role_fetch();
                                    foreach ($role_fetch_data as $data) { ?>
                                       <option value="<?php echo $data['id']; ?>"><?php echo $data['name']; ?></option>
                                   <?php } ?>

                               </select>
                           </div>
                           <div class="form-group col-md-12">
                               <label for="inputEmail4" class="form-label">FEATURES<span class="text-danger">*</span> </label>
                               <input type="text" name="features" parsley-trigger="change" class="form-control" id="features" placeholder="Features " required>
                           </div>

                           <div class="form-group col-md-12">
                               <label for="inputEmail4" class="form-label">FEATURES AVAILABLE<span class="text-danger">*</span> </label>
                               <input type="text" name="features_available" parsley-trigger="change" class="form-control" id="features_available" placeholder="Features Available " required>
                           </div>
                       </div>
                       <div class="widget-footer text-left">

                           <button type="submit" name="submit" value="Add pricing_features" class="btn btn-primary " style="margin: 10px;">Add</button>
                           <button type="reset" class="btn btn-outline-primary" style="margin-left: 0px;">Reset</button>
                       </div>
                   </form>
               </div>
               <!-- [ sample-page ] end -->
           </div>
       </div>
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