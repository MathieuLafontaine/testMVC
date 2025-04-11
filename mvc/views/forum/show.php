<h1>Forum Show</h1>
<p><strong>Titre: </strong> <?= $data['titreForum'] ?></p>
<p><strong>Article: </strong> <?= $data['article'] ?></p>
<p><strong>Date: </strong><?= $data['dateForum'] ?></p>
<p><strong>Auteur: </strong> <?= $data['usernameUser'] ?></p>
<a href="?controller=forum&function=edit&id=<?= $data['idForum'] ?>" class="lien">Edit</a>
<form action="?controller=forum&function=delete" method="post">
    <input type="hidden" name="id" value="<?= $data['idForum'] ?>">
    <input type="submit" value="Delete" class="button__delete">
</form>