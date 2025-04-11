<h1>User Edit</h1>
<form action="?controller=user&function=update" method="post">
    <input type="hidden" name="idUser" value="<?= $data['user']['idUser']; ?>" required>
    <label for="nameUser">Name</label>
    <input type="text" id="nameUser" name="nameUser" value="<?= $data['user']['nameUser']; ?>" required>
    <label for="usernameUser">Username</label>
    <input type="email" id="usernameUser" name="usernameUser" value="<?= $data['user']['usernameUser']; ?>" required>
    <label for="passwordUser">Password</label>
    <input type="text" id="passwordUser" name="passwordUser" value="<?= $data['user']['passwordUser']; ?>" required>
    <label for="birthdayUser">Birthday</label>
    <input type="date" id="birthdayUser" name="birthdayUser" value="<?= $data['user']['birthdayUser']; ?>" required>
    <input type="submit" value="Update" class="btn">
</form>