<div class="pcoded-main-container">
    <div class="pcoded-content">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Add images</h5>
                        <?php if (isset($msg) || validation_errors() !== '') : ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <?= validation_errors(); ?>
                                <?= isset($msg) ? $msg : ''; ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" id="imageForm" method="post" action="<?= base_url('imagebank/imagebank_submit_data'); ?>" enctype="multipart/form-data">
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="upload_option" class="form-label">Upload Option</label><br>
                                    <input type="radio" id="local_upload" name="upload_option" value="local" checked>
                                    <label for="local_upload">Upload from Local</label><br>
                                    <input type="radio" id="server_select" name="upload_option" value="server">
                                    <label for="server_select">Select from Server</label>
                                </div>
                                <div class="form-group col-md-6" id="server_image_select" style="display: none;">
                                    <label for="server_images" class="form-label">Select Server Image</label>
                                    <input type="file" id="selectedServerImage" name="selected_server_image" style="display: none;">
                                    <!-- Button to open modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#serverImagesModal">Select Server Image</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="images" class="form-label">Add Images <span class="text-danger">*</span></label>
                                    <input type="file" name="images" class="form-control" id="images" placeholder="Add Images">
                                </div>
                            </div>
                            <div class="widget-footer text-left">
                                <button type="submit" name="submit" value="Add images" class="btn btn-primary" style="margin: 10px;">Add</button>
                                <button type="reset" class="btn btn-outline-primary" style="margin-left: 0px;">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal for server images -->
<div class="modal fade" id="serverImagesModal" tabindex="-1" role="dialog" aria-labelledby="serverImagesModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="serverImagesModalLabel">Select Server Image</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Display server images here -->
                <?php foreach ($server_images as $image) : ?>
                    <img src="<?= base_url('uploads/' . $image) ?>" alt="<?= $image ?>" class="server-image" style="cursor: pointer; width: 100px; height: 100px; margin: 5px;">
                <?php endforeach; ?>
            </div>
            <div class="modal-footer">
                <button type="button" id="submitServerImage" class="btn btn-primary">Add</button>
            </div>
        </div>
    </div>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
$(document).ready(function() {
    // Function to show/hide server image selection based on radio button selection
    $('input[type="radio"]').click(function() {
        if ($(this).attr('id') == 'server_select') {
            $('#server_image_select').show();
        } else {
            $('#server_image_select').hide();
        }
    });

    // Function to open server images modal when "Select from Server" is clicked
    $('#server_select').click(function() {
        $('#serverImagesModal').modal('show');
    });

    // Function to select server image on click and close modal
    $(document).on('click', '.server-image', function() {
        var imageName = $(this).attr('alt');
        $('#selectedServerImage').val(imageName); // Set the value of the hidden input field
        $('#serverImagesModal').modal('hide');
    });

    // Function to submit the form with selected server image
    $('#submitServerImage').click(function() {
        var imageName = $('.server-image.active').attr('alt');
        $('#selectedServerImage').val(imageName); // Set the value of the hidden input field
        $('#serverImagesModal').modal('hide');
        $('#imageForm').submit(); // Submit the form
    });
});
</script>
