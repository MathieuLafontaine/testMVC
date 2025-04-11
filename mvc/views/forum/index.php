<h1>Forum</h1>
<table>
    <thead>
        <tr>
            <th>Titre</th>
            <th>Article</th>
            <th>Date</th>
            <th>Auteur</th>
            <th>Show</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($data as $row) {
        ?>
            <tr>
                <td><?= $row['titreForum']; ?></td>
                <td><?= $row['article']; ?></td>
                <td><?= $row['dateForum']; ?></td>
                <td><?= $row['usernameUser']; ?></td>
                <td><a href="?controller=forum&function=show&id=<?= $row['idForum']; ?>"> Show </a></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
<button><a href="?controller=forum&function=create">Nouvelle publication</a></button>