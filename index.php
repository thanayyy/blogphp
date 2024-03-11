<?php 
include("path.php");
include(ROOT_PATH . "/app/controllers/topics.php");

$posts = array();
$postTitle = 'Recent Posts';
if (isset($_GET['t_id'])){
    $posts = getPostsByTopicId($_GET['t_id']);
    $postTitle = "Search for post under '" . $_GET['name'] . "'";
}
else if (isset($_POST['search-term'])){
    $postTitle = "Search for...'" . $_POST['search-term'] . "'";
    $posts = searchPosts($_POST['search-term']);
}else{
    $posts = getPublishedPosts();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Candal&family=Lora:ital,wght@0,400..700;1,400..700&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/bbc375b4ba.js" crossorigin="anonymous"></script>
    <title>Blog</title>
</head>

<body>
    <?php include(ROOT_PATH . "/app/includes/header.php"); ?>
    <div class="page-wrapper">
        <div class="post-slider">
            <h1 class="slider-title">Trending Posts</h1>
            <i class="fas fa-chevron-left prev"></i>
            <i class="fas fa-chevron-right next"></i>


            <div class="post-wrapper">
                <?php foreach($posts as $post): ?>
                    <div class="post">
                    <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt="" class="slider-image">
                    <div class="post-info">
                        <h4>
                            <a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['title'] ?></a>
                        </h4>
                        <i class="far fa-user"></i><?php echo $post['username']?>
                        &nbsp;
                        <i class="fa-regular fa-calendar-days"></i><?php echo date('F j, Y', strtotime($post['created_at'])); ?>
                    </div>
                </div>
                    <?php endforeach; ?>
            </div>

        </div>

        <div class="content clearfix">
            <div class="main-content">
                <h1 class="recent-post-title"><?php echo $postTitle ?></h1>

                <?php foreach($posts as $post): ?>
                    <div class="post clearfix">
                    <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" class="post-image" alt="">
                    <div class="post-preview">
                        <h2><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h2>
                        <i class="far fa-user"></i><?php echo $post['username']?>
                        &nbsp;
                        <i class="fa-regular fa-calendar-days"></i><?php echo date('F j, Y', strtotime($post['created_at'])); ?>
                        <p class="preview-text"><?php echo html_entity_decode(substr($post['body'],0,150) . '...'); ?></p>
                        <a href="single.php?id=<?php echo $post['id']; ?>" class="btn read-more">Read More</a>
                    </div>
                </div>
                <?php endforeach; ?>
                
                
            </div>
            <div class="sidebar">
                <div class="section search">
                    <h2 class="section-title">Search</h2>
                    <form action="index.php" method="post">
                        <input type="text" name="search-term" class="text-input" placeholder="Search...">
                    </form>
                </div>

                <div class="section topics">
                    <h2 class="section-title">Topics</h2>
                    <ul>
                    <?php foreach ($topics as $key => $topic): ?>
                        <li><a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name=' . $topic['name'] ?>"><?php echo $topic['name']; ?></a></li>
                        <?php endforeach;?>
                        
                    </ul>
                </div>
            </div>
        </div>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>