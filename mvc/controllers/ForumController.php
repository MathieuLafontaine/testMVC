<?php

function forum_controller_index()
{
    require_once(MODEL_DIR . "/forum.php");
    $forums = forum_select();
    render('forum/index.php', $forums);
};

function forum_controller_create()
{
    return render('forum/create.php');
};

function forum_controller_store($request)
{
    require_once(MODEL_DIR . "/forum.php");
    print_r($request);
    $forum = forum_insert($request);

    header('location:?controller=forum&function=show&id=' . $forum);
}

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
