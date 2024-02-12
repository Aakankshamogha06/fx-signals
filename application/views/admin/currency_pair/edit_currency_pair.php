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
                        <div class="card-body">
                            <form class="form-horizontal" method="post" action="<?= base_url('currency_pair/currency_pair_update_data'); ?>">
                                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4" class="form-label">Pair category<span class="text-danger">*</span> </label>
                                        <input type="text" name="pair_category" parsley-trigger="change" class="form-control" id="pair_category" value="<?$row->pair_category?>" placeholder="Pair Category" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4" class="form-label">Pair name<span class="text-danger">*</span> </label>
                                        <input type="text" name="pair_name" parsley-trigger="change" class="form-control" id="pair_name" value="<?$row->pair_name?>" placeholder="Pair name" required>
                                    </div>
                                </div>
                                <button type="submit" name="submit" value="Add " class="btn btn-primary " style="margin: 10px;">Add </button>
                                <button type="reset" class="btn btn-outline-primary" style="margin-left: 0px;">Reset</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- [ sample-page ] end -->
        </div>
    </div>
</div>