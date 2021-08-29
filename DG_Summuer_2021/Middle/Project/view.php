<?php
require 'layouts/header.php';
require 'models/Post.php';

$postModel = new Post();

$id = $_GET['id'] ?? null;
$like = $_GET['like'] ?? null;

if ($id) {
    $post = $postModel->getSingle($id);
    $newest = $postModel->getNewest($id, 5);
    $postModel->incrementView($id, ++$post['view']);
} else {

}

if ($like) {
    $postModel->incrementLike($id, ++$post['liked']);
}
?>
<main role="main" class="container mt-3">
    <div class="row">
        <div class="col-md-8 blog-main">
            <h3 class="pb-4 mb-4 font-italic border-bottom">
                <?= $post['title'] ?>
            </h3>
            <i style="color: #007bff" class="fa fa-eye"> <?= $post['view'] ?? 0 ?> </i>

            <div class="blog-post mt-3">
                <?= $post['body'] ?>
            </div><!-- /.blog-post -->

            <a href="view.php?id=<?= $post['id'] ?>&like=1" class="btn btn-default mt-2">
                <i style="color: #007bff" class="fas fa-thumbs-up"></i>
                <?= $post['liked'] ?>
            </a>


        </div><!-- /.blog-main -->

        <aside class="col-md-4 blog-sidebar">
            <h4>So'ngi yangiliklar</h4>
            <?php foreach ($newest as $item): ?>
                <div class="card mt-2" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?= $item['title'] ?></h5>
                        <a href="view.php?id=<?= $item['id'] ?>" class="card-link">Batafsil</a>
                    </div>
                </div>
            <?php endforeach; ?>

        </aside><!-- /.blog-sidebar -->

    </div><!-- /.row -->

</main><!-- /.container -->

<?php require 'layouts/footer.php' ?>

