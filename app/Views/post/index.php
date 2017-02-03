<div class="row">
    <div class="col-sm-8">

        <?php
        foreach ($posts as $post) :?>

            <h2><?= $post->title;?></h2>

            <p><em><?= $post->category;?></em></p>

            <p><?= $post->extrait; ?></p>
            <p><a href="<?= $post->url ?>">Lire la suite &rarr;</a></p><!--&rarr = fleche a droite-->


        <?php endforeach; ?>


    </div>

    <div class="col-sm-4">
        <ul>
            <?php foreach ($categories as $category):?>
                <li>
                    <a href="<?= $category->url ?>"><?= $category->title ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

</div>