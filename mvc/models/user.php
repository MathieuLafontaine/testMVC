<?php
function user_select()
{
    require(CONNEX_DIR);

    $sql = "SELECT * FROM user ORDER BY nameUser";

    $result = mysqli_query($connex, $sql);
    $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $result;
}

function user_insert($request)
{
    require(CONNEX_DIR);
    foreach ($request as $key => $value) {
        $$key = mysqli_real_escape_string($connex, $value);
    }
    $passwordUser =  password_hash($passwordUser, PASSWORD_BCRYPT, ['cost' => 10]);

    $sql = "INSERT INTO user (nameUser, usernameUser, passwordUser, birthdayUser) VALUES ('$nameUser' ,'$usernameUser','$passwordUser','$birthdayUser')";

    if (mysqli_query($connex, $sql)) {
        return mysqli_insert_id($connex);
    } else {
        return false;
    }
}


function user_select_id($id)
{
    require(CONNEX_DIR);
    $id = mysqli_real_escape_string($connex, $id);
    $sql = "SELECT * FROM user WHERE idUser = '$id'";
    $result = mysqli_query($connex, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        return mysqli_fetch_array($result, MYSQLI_ASSOC);
    } else {
        return false;
    }
}

function user_update($request)
{
    require(CONNEX_DIR);

    foreach ($request as $key => $value) {
        $$key = mysqli_real_escape_string($connex, $value);
    }
    $sql = "UPDATE user SET nameUser = '$nameUser', usernameUser = '$usernameUser', passwordUser = '$passwordUser', birthdayUser = '$birthdayUser' WHERE idUser = '$idUser'";

    if (mysqli_query($connex, $sql)) {
        return true;
    } else {
        return false;
    }
}

function user_delete($id)
{
    require(CONNEX_DIR);
    $id = mysqli_real_escape_string($connex, $id);
    $sql = "DELETE FROM user WHERE idUser ='$id'";

    if (mysqli_query($connex, $sql)) {
        return true;
    } else {
        return false;
    }
    return $result;
}

function user_login($msg)
{
    require(CONNEX_DIR);
    if (isset($_GET['msg']) && $_GET['msg'] == 1) {
        $msg = "Please check username";
    } elseif (isset($_GET['msg']) && $_GET['msg'] == 2) {
        $msg = "Please check password";
    }

    return $msg;
}

/* function user_authentication($_POST)
{
    require(CONNEX_DIR);
    foreach ($_POST as $key => $value) {
        $$key = mysqli_real_escape_string($connex, $value);
    }
    $sql = "SELECT * FROM user WHERE usernameUser = '$usernameUser'";
    $result = mysqli_query($connex, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $password = $user['passwordUser'];
        if (password_verify($passwordUser, $password)) {
            return $user;
        }
        $msg = 2;
        return false;
    }
    $msg = 1;
    return false;
} */
