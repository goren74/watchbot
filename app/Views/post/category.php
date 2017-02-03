<?php

$app = App::getInstance();
$category = $app->getTable('category');

$category_used = $category->find($_GET['id']);

if($category_used === false){
    $app->notFound();
}
$posts = $app->getTable('Post')->lastByCategory($_GET['id']);
$categories = $category->all();


?>

<h1><?= $category_used->title; ?></h1>
<div class="row">
    <div class="col-sm-8">
        <?php foreach ($posts as $post):?>
            <h2><a href="<?= $post->url;?>"><?= $post->title;?></a></h2>

            <p><em><?= $post->categorie; ?></em></p>

            <p><?= $post->extrait; ?></p>
        <?php endforeach;?>
    </div>

    <div class="col-sm-4">
        <ul>
            <?php foreach ($categories as $categ):?>
                <li><a href="<?= $categ->url;?>"><?= $categ->title;?></a></li>
            <?php endforeach;?>
        </ul>
    </div>
</div>


