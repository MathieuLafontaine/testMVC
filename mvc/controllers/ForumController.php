<?php

//controller pour affichage de la page index
function forum_controller_index()
{
    require_once(MODEL_DIR . "/forum.php");
    $forums = forum_select();
    render('forum/index.php', $forums);
};

//controller pour l'affichage de la page create de forum
function forum_controller_create()
{
    return render('forum/create.php');
};

//controller pour l'insertion de donnee dans la table forum
function forum_controller_store($request)
{
    require_once(MODEL_DIR . "/forum.php");
    print_r($request);
    $forum = forum_insert($request);

    header('location:?controller=forum&function=show&id=' . $forum);
}

//affichage de la page show
function forum_controller_show($request)
{
    $id = $request['id'];
    require_once(MODEL_DIR . "/forum.php");
    $forum = forum_select_id($id);


    if ($forum) {
        return render('forum/show.php', $forum);
    } else {
        echo "pas trouve";
    }
}

//affichage de la page edit
function forum_controller_edit($request)
{

    $id = $request['id'];
    require_once(MODEL_DIR . "/forum.php");
    $forum = forum_select_id($id);

    if ($forum) {
        $forum = array('forum' => $forum);
        return render('forum/edit.php', $forum);
    } else {
        echo "pas trouve";
    }
}

//modification des donnees deja dans le tableau
function forum_controller_update($request)
{
    require_once(MODEL_DIR . "/forum.php");
    $forum = forum_update($request);
    if ($forum) {
        header('location:?controller=forum');
    } else {
        echo "error";
    }
}

//deletion de donnees dans le tableau
function forum_controller_delete($request)
{
    $id = $request['id'];
    require_once(MODEL_DIR . "/forum.php");
    $forum = forum_delete($id);

    if ($forum) {
        header('location:?controller=forum');
    } else {
        echo "error";
    }
}
