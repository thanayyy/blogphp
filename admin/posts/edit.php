<?php include("../../path.php") ?>
<?php include(ROOT_PATH . "/app/controllers/posts.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Candal&family=Lora:ital,wght@0,400..700;1,400..700&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/bbc375b4ba.js" crossorigin="anonymous"></script>
    <title>Admin Page - Edit Post</title>
</head>

<body>
    <?php 
    include(ROOT_PATH . "/app/includes/adminHeader.php");
    ?>
    <div class="admin-wrapper">
    <?php 
    include(ROOT_PATH . "/app/includes/adminSidebar.php");
    ?>
        <div class="admin-content">
            <div class="button-group">
                <a href="create.php" class="btn btn-big">Add Post</a>
                <a href="index.php" class="btn btn-big">Manage Posts</a>
            </div>
            <div class="content">
                <h2 class="page-title">Edit Post</h2>
                <form action="edit.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <div>
                        <label for="">Title: </label>
                        <input type="text" name="title" value="<?php echo $title ?>" class="text-input">
                    </div>
                    <div>
                        <label for="">Body: </label>
                        <textarea name="body" id="body"><?php echo $body ?></textarea>
                    </div>
                    <div>
                        <label for="">Image: </label>
                        <input type="file" name="image" class="text-input">
                    </div>
                    <div>
                        <label for="">Topics:</label>
                        <select name="topic_id" class="text-input">
                        <option value=""></option>
                            <?php  foreach($topics as $key => $topic): ?>
                                <?php if (!empty($topic_id) && $topic_id == $topic['id']): ?>
                                    <option selected value="<?php echo $topic['id'] ?>"><?php echo $topic['name'] ?></option>
                                    <?php else: ?>
                                    <option value="<?php echo $topic['id'] ?>"><?php echo $topic['name'] ?></option>
                                    <?php endif; ?>
                                    <?php endforeach; ?>
                        </select>
                    </div>
                    <div>
                        <?php if (empty($published) && $published == 0): ?>
                        <label>
                            <input type="checkbox" name="published" id="">Publish
                        </label>
                        <?php else: ?>
                            <label>
                                <input type="checkbox" name="published" checked>Publish
                            </label>
                        <?php endif; ?>
                    </div>
                    <div>
                        <button type="submit" name="update-post" class="btn btn-big">Update Post</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
    <script src="../../assets/js/scripts.js"></script>
</body>

</html>