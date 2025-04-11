<h1>Login</h1>
<form action="?controller=authentication&function=authentication" method="post">
    <?= "<span>" . $msg . "</span>"; ?>
    <label for="usernameUser">Username</label>
    <input type="email" id="usernameUser" name="usernameUser">
    <label for="passwordUser">Password</label>
    <input type="password" id="passwordUser" name="passwordUser">
    <input type="submit" value="Login" class="btn">
</form>