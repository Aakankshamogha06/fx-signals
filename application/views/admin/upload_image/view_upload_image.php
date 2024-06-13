<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Gallery</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <style>
        .styling {
            width: 250px;
            height: 250px;
            margin: 5px;
            border-radius: 5px;
        }

        .image-container {
            position: relative;
            display: inline-block;
        }

        .hover-buttons {
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .hover-buttons button {
            margin-right: 5px;
        }

        .image-container:hover .hover-buttons {
            opacity: 1;
        }
    </style>
</head>

<body>

    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <div class="row">
                <!-- [ Main Content ] start -->
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>View upload_image</h5>
                            <a href="<?= base_url('admin/upload_image/add_upload_image'); ?>">
                                <button type="button" class="btn btn-primary toggle-btn mb-4 mr-2" style="margin-left: 80.5%;">Add</button>
                            </a>
                        </div>
                        <div class="card-body">
                            <h3>Uploaded Files/Images</h3>
                            <ul class="gallery">
                                <?php if (!empty($upload_image_view)) { ?>
                                    <?php foreach ($upload_image_view as $row) {
                                        $image_arr = explode(',', $row->images);
                                        foreach ($image_arr as $image) { ?>
                                            <!-- Image Markup with Modal Trigger -->
                                            <div class="image-container">
                                            <img src="<?= base_url('uploads/upload_image/') . $folder_name . '/' . $image; ?>" class="styling">
                                                <div class="hover-buttons">
                                                    <a href="<?= base_url('admin/upload_image/upload_image_delete/' . $row->id); ?>" class="btn btn-danger btn-flat" onclick="return confirm('Are you sure want to delete ?');"><i class="fas fa-trash"></i></a>
                                                    <button class="btn btn-primary copy-link-btn" onclick="copyImageLink('<?= base_url('uploads/upload_image/') . $image; ?>')"><i class="fas fa-copy"></i></button>
                                                    <!-- Modal Trigger Button -->
                                                    <button class="btn btn-primary view-image-btn" data-toggle="modal" data-target="#imageModal" data-image="<?= base_url('uploads/upload_image/') . $image; ?>"><i class="fas fa-eye"></i></button>
                                                </div>
                                            </div>
                                <?php }
                                    } ?>
                                <?php } else { ?>
                                    <p>File(s) not found...</p>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- [ Main Content ] end -->
            </div>
        </div>
    </div>

    <!-- Modal HTML -->
    <div id="imageModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <img id="modalImage" src="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>

    <!-- JavaScript -->
    <script>
        $(document).ready(function() {
            $('.view-image-btn').click(function() {
                var imageUrl = $(this).data('image');
                $('#modalImage').attr('src', imageUrl);
            });
        });

        function copyImageLink(imageUrl) {
            var dummyInput = document.createElement("input");
            document.body.appendChild(dummyInput);
            dummyInput.setAttribute("value", imageUrl);
            dummyInput.select();
            document.execCommand("copy");
            document.body.removeChild(dummyInput);
            alert("Image link copied to clipboard!");
        }
    </script>
</body>

</html>
