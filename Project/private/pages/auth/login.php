<?php
lib('validations/loginvalidater');
?>
<div class="position-absolute top-50 start-50 translate-middle" style="margin-top: 75px">
    <form method="post">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" name="username" placeholder="name@example.com">
            <label for="floatingInput">Felhasznlónév</label>
            <?php if (isset($errors['username'])): ?>
                <div class='alert alert-danger'><?= implode(', ', $errors['username']) ?> </div>
            <?php endif; ?>
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
            <label for="floatingPassword">Jelszó</label>
            <?php if (isset($errors['password'])): ?>
                <div class='alert alert-danger'><?= implode(', ', $errors['password']) ?> </div>
            <?php endif; ?>
        </div>


        <input class="btn btn-primary" type="submit" name="submit" value="Login">
        <?php if (isset($errors['_'])): ?>
            <div class='alert alert-danger m-2'><?= implode(', ', $errors['_']) ?> </div>
        <?php endif; ?>
    </form>
</div>
