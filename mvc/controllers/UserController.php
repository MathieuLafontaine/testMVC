<?php

//controller pour affichage de la page index
function user_controller_index()
{
    require_once(MODEL_DIR . "/user.php");
    $users = user_select();
    render('user/index.php', $users);
};

//controller pour l'affichage de la page create de user
function user_controller_create()
{
    return render('user/create.php');
};

//controller pour l'insertion de donnee dans la table user
function user_controller_store($request)
{
    require_once(MODEL_DIR . "/user.php");
    $user = user_insert($request);

    header('location:?controller=user&function=show&id=' . $user);
}

//affichage de la page show
function user_controller_show($request)
{
    $id = $request['id'];
    require_once(MODEL_DIR . "/user.php");
    $user = user_select_id($id);

    if ($user) {
        return render('user/show.php', $user);
    } else {
        echo "pas trouve";
    }
}

//affichage de la page edit
function user_controller_edit($request)
{

    $id = $request['id'];
    require_once(MODEL_DIR . "/user.php");
    $user = user_select_id($id);

    if ($user) {
        $user = array('user' => $user);
        return render('user/edit.php', $user);
    } else {
        echo "pas trouve";
    }
}

//modification des donnees deja dans le tableau
function user_controller_update($request)
{
    require_once(MODEL_DIR . "/user.php");
    $user = user_update($request);
    if ($user) {
        header('location:?controller=user');
    } else {
        echo "error";
    }
}

//deletion de donnees dans le tableau
function user_controller_delete($request)
{
    $id = $request['id'];
    require_once(MODEL_DIR . "/user.php");
    $user = user_delete($id);

    if ($user) {
        header('location:?controller=user');
    } else {
        echo "error";
    }
}
