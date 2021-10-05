<?php
if(isset($_POST['submit'])){
    lib('validations/registervalidater');
    $errors = validateuser($_POST);
    if(empty($errors)){
        db_execute('INSERT INTO `users` (id, username, email, password) VALUES (:id, :username, :email, :password)', [
            ':id' => uniqid('', true),
            ':username' => $_POST['username'],
            ':email' => $_POST['email'],
            ':password' => password_hash($_POST['password'], PASSWORD_BCRYPT, ['cost' => 12]),
        ]);
        $_SESSION['user'] = db_fetch('users', 'username LIKE :username', [':username' => $_POST['username']]);
    }
}