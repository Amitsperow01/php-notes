<?php
require_once("config.php");
$id = $_GET["id"];

$seltQuery = "SELECT * FROM `blocks` WHERE id=$id";
$dataQuery = $conn->query($seltQuery);
$_data = mysqli_fetch_assoc($dataQuery);

// dd($_data["status"]);


?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User Admin</title>
    <?php include_once("includes/head.php"); ?>
</head>

<body>
    <div id="wrapper">
        <?php include_once("includes/nav-top.php"); ?>
        <?php include_once("includes/nav-side.php"); ?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Block Edit</h1>
                        <?php include_once("message.php"); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="panel panel-info">
                            <div class="panel-body">
                                <form role="form" action="block-update.php" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="block_id" value="<?= $_data["id"] ?>">
                                    <div class="form-group">
                                        <label>Enter Title</label>
                                        <input class="form-control" type="text" name="title" value="<?= $_data["title"] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Enter Heading</label>
                                        <input class="form-control" type="text" name="heading" value="<?= $_data["heading"] ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Enter Ordering</label>
                                        <input class="form-control" type="number" name="ordering" value="<?= $_data["ordering"] ?>">
                                    </div>


                                    <div class="form-group">
                                        <label>Enter Identifier</label>
                                        <input class="form-control" type="text" name="identifier" value="<?= $_data["identifier"] ?>">
                                    </div>


                                    <div class="form-group">
                                        <label>Select Status</label>
                                        <select class="form-control" name="status">
                                            <option value="1" <?= ($_data["status"]==1) ? "selected" : "" ?>>Enable</option>
                                            <option value="2" <?= ($_data["status"]==2) ? "selected" : "" ?>>Disable</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Enter Description</label>
                                        <textarea class="form-control" name="description"><?= $_data["description"] ?></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-lg-4">Image Upload</label>
                                        <div class="">
                                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                                <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;">
                                                    <img src="<?= $_data["banner_image"] ?>" alt="">
                                                </div>
                                                <div>
                                                    <span class="btn btn-file btn-success">
                                                        <span class="fileupload-new">Select image</span>
                                                        <span class="fileupload-exists">Change</span>
                                                        <input type="file" name="image">
                                                    </span>
                                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-info">Update</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

    <script src="https://cdn.tiny.cloud/1/do4xutgtb0ws8yotpwqm9xapdw3dgmy9iv047kgf9mhmqa0w/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            // images_upload_url: 'postAcceptor.php',
            // automatic_uploads: false,
            plugins: 'ai tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            mergetags_list: [{
                    value: 'First.Name',
                    title: 'First Name'
                },
                {
                    value: 'Email',
                    title: 'Email'
                },
            ],
            ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
        });
    </script>


    <?php include_once("includes/footer.php"); ?>




</body>

</html>