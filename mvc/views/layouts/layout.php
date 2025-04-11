<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC</title>
    <link rel="stylesheet" href="resources\styles.css">
</head>

<body>
    <nav>
        <ul>
            <li><a href="?controller=user">Users</a></li>
            <li><a href="?controller=user&function=create">User Create</a></li>
            <li><a href="?controller=forum">Forum</a></li>
        </ul>
        <ul>
            <li><a href="?controller=authentication&function=login">Login</a></li>
            <li><a href="?controller=authentication&function=logout">Logout</a></li>
        </ul>
    </nav>
    <main>
        <?php echo $content; ?>
    </main>
    <footer>
        <h4>&copy;Copyright 2025, Tout droits réservés</h4>
    </footer>
</body>

</html>