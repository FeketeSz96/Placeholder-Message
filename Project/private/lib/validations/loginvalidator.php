<?php
$errors = [];
if (isset($_POST['submit'])) {
    $user = db_fetch('users', 'username LIKE :username', [':username' => $_POST['username']]);
    if (password_verify($_POST['password'], $user['password'])) {
        $_SESSION['user'] = $user;
    } else {
        $errors['_'][] = 'Username or password is wrong';
    }
}
