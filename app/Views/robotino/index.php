<?php if($errors): ?>
<div class="alert alert-danger">
    Identifiants incorrects
</div>
<?php endif; ?>


<form method="post">
    <?= $form->submit('Gauche'); ?>
    <?= $form->submit('Droite'); ?>
    <?= $form->submit('Reculer'); ?>
    <?= $form->submit('Avancer'); ?>
</form>