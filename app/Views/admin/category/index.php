<h1>Administrer les catégories</h1>

<table class="table">
    <thead>
        <tr>
            <td>ID</td>
            <td>Titre</td>
            <td>Actions</td>
        </tr>
    </thead>

    <tbody>
        <?php foreach($categories as $category):?>
            <tr>
                <td><?= $category->id;?></td>
                <td><?= $category->title; ?></td>
                <td>
                    <a href="?p=admin.category.edit&id=<?= $category->id;?>" class="btn btn-primary">Editer</a>

                    <form action="?p=admin.category.delete" method="post" style="display:inline">
                        <input type="hidden" name="id" value="<?= $category->id;?>">
                        <button type="submit" class="btn btn-danger" href="?p=category.delete&id=<?= $category->id;?>">Supprimer</button>
                    </form>
                </td>
            </tr>


        <?php endforeach; ?>
    </tbody>
</table>

<p><a href="?p=admin.category.add" class="btn btn-success">Ajouter une catégorie </a></p>