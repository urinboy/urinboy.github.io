<?php

require 'layouts/header.php';
require 'models/Post.php';

$postModel = new Post();

$posts = $postModel->getPosts();

?>

<div class="mt-3">
    <h1>
        Maqolalar
    </h1>

    <div class="row">
        <?php foreach ($posts as $post): ?>
            <div class="col-6 mt-3">
                <div class="card" style="height: 100%">
                    <div class="card-body">
                        <h5 class="card-title"><?= $post['title'] ?></h5>
                        <p class="card-text"><?= $post['body'] ?></p>
                        <a href="view.php?id=<?= $post['id'] ?>" class="btn btn-primary">Batafsil</a>
                        <i style="color: #007bff; float: right" class="fa fa-eye"> <?= $post['view'] ?? 0 ?> </i>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>


</div>

<?php require 'layouts/footer.php' ?>
