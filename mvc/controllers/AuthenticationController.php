<?php
/* 
function authentication_controller_login()
{
    $msg = null;
    $msg = user_login($_POST['msg']);

    render('login.php', ['msg' => $msg]);
}

function authentication_controller_authentication($_POST)
{
    if ($_SERVER['REQUEST_METHOD'] != 'POST') {
        header('Location: ?controller=authentication&function=login');
    }

    require_once(MODEL_DIR . "/user.php");
    $user = user_authentication($_POST);
    if ($user) {
        session_regenerate_id();
        $_SESSION['idUser'] = $user['idUser'];
        $_SESSION['usernameUser'] = $user['usernameUser'];
        $_SESSION['fingerPrint'] = md5($_SERVER['HTTP_USER_AGENT'] . $_SERVER['REMOTE_ADDR']);

        header('location:?controller=user&function=index');
    } else {
        header('location:?controller=authentication&function=login&msg=' . $msg);
    }
}

function authentication_controller_logout()
{
    session_start();
    session_destroy();
    header('location:?controller=authentication&function=login');
}

function authentication_controller_check_session()
{
    require_once(MODEL_DIR . "/user.php");
    session_start();
    if ($_SESSION['fingerPrint'] !== md5($_SERVER['HTTP_USER_AGENT'] . $_SERVER['REMOTE_ADDR'])) {
        header('location:?controller=authentication&function=login');
        exit();
    }
}
 */