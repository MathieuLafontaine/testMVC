<h1>Forum Create</h1>
<form action="?controller=forum&function=store" method="post">
    <label for="titreForum">Titre</label>
    <input type="text" id="titreForum" name="titreForum" required>
    <label for="article">Article</label>
    <textarea id="article" name="article" rows="5" cols="50" required>
    </textarea>
    <label for="auteurArticle">Auteur</label>
    <input type="text" id="auteurArticle" name="auteurArticle" required>
    <input type="submit" class="btn" value="Save">
</form>