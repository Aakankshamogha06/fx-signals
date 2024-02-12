<div class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="card">

                    <div class="card-header">
                        <h5>Add News</h5>
                        <?php if (isset($msg) || validation_errors() !== '') : ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <?= validation_errors(); ?>
                                <?= isset($msg) ? $msg : ''; ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" method="post" action="<?= base_url('news/news_submit_data'); ?>" enctype="multipart/form-data">
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">


                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">News Title <span class="text-danger">*</span> </label>
                                    <input type="text" name="title" parsley-trigger="change" class="form-control" id="title" placeholder="News Title  " required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">News Image <span class="text-danger">*</span> </label>
                                    <input type="file" name="news_image" parsley-trigger="change" class="form-control" id="news_image" placeholder="News Image  " required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label">Publish Date <span class="text-danger">*</span> </label>
                                    <input type="date" name="publish_date" parsley-trigger="change" class="form-control" id="publish_date" placeholder="Publish Date  " required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="form-label"> Author<span class="text-danger">*</span> </label>
                                    <input type="text" name="author" parsley-trigger="change" class="form-control" id="author" placeholder=" Author" required>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="form-group col-md-6">
                                <label for="category" class="form-label"> Category <span class="text-danger">*</span></label>
                                    <select id="category" class="form-control" name="category">
                                        <option value="">Select Category</option>
                                        <?php
                                        $category_fetch_data = $this->news_model->category_fetch();
                                        foreach ($category_fetch_data as $data) { ?>
                                            <option value="<?php echo $data['id']; ?>"><?php echo $data['name']; ?></option>
                                        <?php } ?>

                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                <label for="sub_category" class="form-label"> Sub Category <span class="text-danger">*</span></label>
                                    <select name="sub_category" id="sub_category" class="form-control">
                                        <option value="">Select sub Category</option>
                                    </select>
                                </div>
                                
                                <div class="form-group col-md-6">
                                <label for="news_type" class="form-label"> news_type <span class="text-danger">*</span></label>
                                    <select id="news_type" class="form-control" name="news_type">
                                        <option value="">Select news_type</option>
                                        <?php
                                        $news_type_fetch_data = $this->news_model->news_type_fetch();
                                        foreach ($news_type_fetch_data as $data) { ?>
                                            <option value="<?php echo $data['id']; ?>"><?php echo $data['news_type_name']; ?></option>
                                        <?php } ?>

                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                <label for="news_package" class="form-label"> news_package <span class="text-danger">*</span></label>
                                    <select id="news_package" class="form-control" name="news_package">
                                        <option value="">Select news_package</option>
                                        <?php
                                        $news_package_fetch_data = $this->news_model->news_package_fetch();
                                        foreach ($news_package_fetch_data as $data) { ?>
                                            <option value="<?php echo $data['id']; ?>"><?php echo $data['package_name']; ?></option>
                                        <?php } ?>

                                    </select>
                                </div>
                            </div>
                           

                            <div class="form-group col-md-12">
                                <label for="inputEmail4" class="form-label">News Description <span class="text-danger">*</span> </label>
                                <textarea type="text" name="news_desc" parsley-trigger="change" class="form-control" id="news_desc" placeholder="News Description  " required></textarea>
                            </div>
                    </div>
                    <div class="widget-footer text-left">

                        <button type="submit" name="submit" value="Add news" class="btn btn-primary " style="margin: 10px;">Add</button>
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
        CKEDITOR.replace('news_desc', {
            format_tags: 'p;h1;h2;h3;h4;h5;h6'
        });
        CKEDITOR.replace('about_author', {
            format_tags: 'p;h1;h2;h3;h4;h5;h6'
        });

  </script>     
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
    var baseURL = "<?= base_url(); ?>";
    $(document).ready(function() {
        $('#category').change(function() {
            var category = $(this).val();
            $.ajax({
                url: baseURL + 'admin/news/fetch_sub_category',
                method: 'post',
                data: {
                    category: category
                },
                dataType: 'json',
                success: function(response) {
                    $('#sub_category').html('<option value="">Select sub Category</option>');
                    $.each(response, function(index, data) {
                        $('#sub_category').append('<option value="' + data['id'] + '">' + data['pair_name'] + '</option>');
                    });
                }
            });
        });
    });
</script>
