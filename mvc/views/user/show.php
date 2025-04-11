<h1>User Show</h1>
<p><strong>Name: </strong> <?= $data['nameUser'] ?></p>
<p><strong>Username: </strong> <?= $data['usernameUser'] ?></p>
<p><strong>Password: </strong>••••••••</p>
<p><strong>Birthday: </strong> <?= $data['birthdayUser'] ?></p>
<a href="?controller=user&function=edit&id=<?= $data['idUser'] ?>" class="lien">Edit</a>
<form action="?controller=user&function=delete" method="post">
    <input type="hidden" name="id" value="<?= $data['idUser'] ?>">
    <input type="submit" value="Delete" class="button__delete">
</form>