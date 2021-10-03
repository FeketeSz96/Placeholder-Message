<?php
lib('utils/register');
?>

<div class="position-absolute top-50 start-50 translate-middle" style="margin-top: 75px">
    <form method="post">
        <div class="form-floating mb-3">
            <input name="username" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Felhasználónév</label>
            <?php if (isset($errors['username'])): ?>
                <div class="alert alert-danger"><?= implode(', ', ($errors['username'] ?? [])) ?> </div>
            <?php endif; ?>
        </div>
        <div class="form-floating mb-3">
            <input name="email" type="email" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">E-mail cím</label>
            <?php if (isset($errors['email'])): ?>
                <div class="alert alert-danger"><?= implode(', ', ($errors['email'] ?? [])) ?> </div>
            <?php endif; ?>        </div>
        <div class="form-floating mb-3">
            <input name="password" type="password" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Jelszó</label>
            <?php if (isset($errors['password'])): ?>
                <div class="alert alert-danger"><?= implode(', ', ($errors['password'] ?? [])) ?> </div>
            <?php endif; ?>
        </div>
        <div class="form-floating mb-3">
            <input name='password_confirmation' type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Jelszó újra</label>
            <?php if (isset($errors['password_confirmation'])): ?>
                <div class="alert alert-danger"><?= implode(', ', ($errors['password_confirmation'] ?? [])) ?> </div>
            <?php endif; ?>
        </div>