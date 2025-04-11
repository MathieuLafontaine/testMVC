<h1>Forum Edit</h1>
<form action="?controller=forum&function=update" method="post">
    <input type="hidden" name="idForum" value="<?= $data['forum']['idForum']; ?>" required>
    <label for="titreForum">Name</label>
    <input type="text" id="titreForum" name="titreForum" value="<?= $data['forum']['titreForum']; ?>" required>
    <label for="article">Article</label>
    <input type="textarea" id="article" name="article" value="<?= $data['forum']['article']; ?>" required>
    <label for="dateForum">Date/label>
        <input type="text" id="dateForum" name="dateForum" value="<?= $data['forum']['dateForum']; ?>" required>
        <input type="submit" value="Update" class="btn">
</form>