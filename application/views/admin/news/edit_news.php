<div class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <?php foreach ($view_news as $row) :

                    ?>
                        <div class="card-header">
                            <h5>Edit news</h5>
                            <?php if (isset($msg) || validation_errors() !== '') : ?>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <?= validation_errors(); ?>
                                    <?= isset($msg) ? $msg : ''; ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" method="post" action="<?= base_url('news/news_update_data'); ?>" enctype="multipart/form-data">
                                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                                <input type="hidden" name="id" value="<?= $row->id ?>">
                                <div class="card-body">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4" class="form-label">News Title <span class="text-danger">*</span> </label>
                                            <input type="text" name="title" parsley-trigger="change" class="form-control" id="title" placeholder="News Title  " value="<?= $row->title ?>" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4" class="form-label">News Image <span class="text-danger">*</span> </label>
                                            <input type="file" name="news_image" parsley-trigger="change" class="form-control" id="news_image" value="<?= $row->news_image ?>" placeholder="News Image  " required>
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
                                                    <option value="<?php echo $data['id']; ?>" <?php if ($data['id'] === $row->category) echo 'selected="selected"' ?>><?php echo $data['name']; ?></option>
                                                <?php } ?>

                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="sub_category" class="form-label"> sub Category <span class="text-danger">*</span></label>
                                            <select id="sub_category" class="form-control" name="sub_category">
                                                <option value="">Select sub Category</option>
                                                <?php
                                                $sub_category_fetch_data = $this->news_model->sub_category_fetch();
                                                foreach ($sub_category_fetch_data as $data) { ?>
                                                    <option value="<?php echo $data['id']; ?>" <?php if ($data['id'] === $row->sub_category) echo 'selected="selected"' ?>><?php echo $data['pair_name']; ?></option>
                                                <?php } ?>

                                            </select>
                                        </div>
                                    </div>
                                
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="news_type" class="form-label"> news type <span class="text-danger">*</span></label>
                                        <select id="news_type" class="form-control" name="news_type">
                                            <option value="">Select news type</option>
                                            <?php
                                            $news_type_fetch_data = $this->news_model->news_type_fetch();
                                            foreach ($news_type_fetch_data as $data) { ?>
                                                <option value="<?php echo $data['id']; ?>" <?php if ($data['id'] === $row->news_type) echo 'selected="selected"' ?>><?php echo $data['news_type_name']; ?></option>
                                            <?php } ?>

                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="news_package" class="form-label"> news package <span class="text-danger">*</span></label>
                                        <select id="news_package" class="form-control" name="news_package">
                                            <option value="">Select news package</option>
                                            <?php
                                            $news_package_fetch_data = $this->news_model->news_package_fetch();
                                            foreach ($news_package_fetch_data as $data) { ?>
                                                <option value="<?php echo $data['id']; ?>" <?php if ($data['id'] === $row->news_package) echo 'selected="selected"' ?>><?php echo $data['package_name']; ?></option>
                                            <?php } ?>

                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4" class="form-label">Publish Date <span class="text-danger">*</span> </label>
                                        <input type="date" name="publish_date" parsley-trigger="change" class="form-control" id="publish_date" value="<?= $row->publish_date ?>" placeholder="Publish Date  " required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4" class="form-label">Author <span class="text-danger">*</span> </label>
                                        <input type="text" name="author" parsley-trigger="change" class="form-control" id="author" value="<?= $row->author ?>" placeholder="Read Time " required>
                                    </div>


                                </div>
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4" class="form-label"> News Desription <span class="text-danger">*</span> </label>
                                    <textarea type="text" name="news_desc" parsley-trigger="change" class="form-control" id="news_desc" placeholder="News Description  " required><?= $row->news_desc ?></textarea>
                                </div>


                                <div class="widget-footer text-left">

                                    <button type="submit" name="submit" value="update news" class="btn btn-primary " style="margin: 10px;">Update</button>
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
        CKEDITOR.replace('long_desc', {

            format_tags: 'p;h1;h2;h3;h4;h5;h6'

        });
    </script>