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