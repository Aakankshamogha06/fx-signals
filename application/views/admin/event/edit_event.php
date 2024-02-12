<div class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <?php foreach ($view_event as $row) :

                    ?>
                        <div class="card-header">
                            <h5>Edit</h5>
                            <?php if (isset($msg) || validation_errors() !== '') : ?>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <?= validation_errors(); ?>
                                    <?= isset($msg) ? $msg : ''; ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" method="post" action="<?= base_url('event/event_update_data'); ?>" enctype="multipart/form-data">
                                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                                <input type="hidden" name="id" value="<?= $row->id ?>">
                                <div class="card-body">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4" class="form-label">heading 1<span class="text-danger">*</span> </label>
                                            <input type="text" value="<?= $row->heading1 ?>" name="heading1" parsley-trigger="change" class="form-control" id="heading1" placeholder="heading1 " required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4" class="form-label">Description 1<span class="text-danger">*</span> </label>
                                            <textarea type="text" name="desc1" parsley-trigger="change" class="form-control" id="desc1" placeholder="desc1 " required><?= $row->desc1 ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4" class="form-label"> heading 2 <span class="text-danger">*</span> </label>
                                            <input type="text" value="<?= $row->heading1 ?>" name="heading1" parsley-trigger="change" class="form-control" id="heading1" placeholder=" heading1  " required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4" class="form-label">description 2 <span class="text-danger">*</span> </label>
                                            <textarea type="text" name="desc2" parsley-trigger="change" class="form-control" id="desc2" placeholder="desc2" required><?= $row->desc2 ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4" class="form-label"> date <span class="text-danger">*</span> </label>
                                            <input type="date" name="date" parsley-trigger="change" class="form-control" id="date" value="<?=$row->date?>" placeholder=" date  " required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4" class="form-label"> day <span class="text-danger">*</span> </label>
                                            <input type="text" name="day" parsley-trigger="change" class="form-control" id="day" value="<?=$row->day?>" placeholder=" day  " required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4" class="form-label"> time <span class="text-danger">*</span> </label>
                                            <input type="text" name="time" parsley-trigger="change" class="form-control" id="time" value="<?=$row->time?>" placeholder=" time  " required>
                                        </div>
                                    </div>
                                    <div class="widget-footer text-left">

                                        <button type="submit" name="submit" value="update event" class="btn btn-primary " style="margin: 10px;">Update</button>
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
        CKEDITOR.replace('desc1', {
            format_tags: 'p;h1;h2;h3;h4;h5;h6'
        });
        CKEDITOR.replace('desc2', {
            format_tags: 'p;h1;h2;h3;h4;h5;h6'
        });
    </script>