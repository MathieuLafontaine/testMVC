<h1>Users</h1>
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Username</th>
            <th>Birthday</th>
            <th>Show</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($data as $row) {
        ?>
            <tr>
                <td><?= $row['nameUser']; ?></td>
                <td><?= $row['usernameUser']; ?></td>
                <td><?= $row['birthdayUser']; ?></td>
                <td><a href="?controller=user&function=show&id=<?= $row['idUser']; ?>"> Show </a></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>