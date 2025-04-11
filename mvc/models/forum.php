<?php
function forum_select()
{
    require(CONNEX_DIR);

    $sql = "SELECT forum.*, usernameUser FROM forum INNER JOIN user ON user.idUser = forum.auteurArticle ORDER BY titreForum";

    $result = mysqli_query($connex, $sql);
    $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $result;
}

function forum_insert($request)
{
    require(CONNEX_DIR);
    foreach ($request as $key => $value) {
        $$key = mysqli_real_escape_string($connex, $value);
    }

    $date = date('Y-m-d');

    $sql = "INSERT INTO forum (titreForum, article, dateForum, auteurArticle) VALUES ('$titreForum' ,'$article','$date','$auteurArticle')";

    if (mysqli_query($connex, $sql)) {
        return mysqli_insert_id($connex);
    } else {
        return false;
    }
}


function forum_select_id($id)
{
    require(CONNEX_DIR);
    $id = mysqli_real_escape_string($connex, $id);
    $sql = "SELECT forum.*, usernameUser FROM forum INNER JOIN user ON user.idUser = forum.auteurArticle WHERE forum.idForum = '$id'";
    $result = mysqli_query($connex, $sql);
    $count = mysqli_num_rows($result);

    if ($count >= 1) {
        return mysqli_fetch_array($result, MYSQLI_ASSOC);
    } else {
        return false;
    }
}

function forum_update($request)
{
    require(CONNEX_DIR);

    foreach ($request as $key => $value) {
        $$key = mysqli_real_escape_string($connex, $value);
    }

    $sql = "UPDATE forum SET titreForum = '$titreForum', article = '$article' WHERE idForum ='$idForum'";

    if (mysqli_query($connex, $sql)) {
        return true;
    } else {
        return false;
    }
}

function forum_delete($id)
{
    require(CONNEX_DIR);
    $id = mysqli_real_escape_string($connex, $id);
    $sql = "DELETE FROM forum WHERE idForum ='$id'";

    if (mysqli_query($connex, $sql)) {
        return true;
    } else {
        return false;
    }
}
