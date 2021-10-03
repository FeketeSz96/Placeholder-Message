<?php
lib('utils/addpizza');
?>

<div class="position-absolute top-50 start-50 translate-middle" style="margin-top: 75px">
    <form method="post">
        <div class="form-floating mb-3">
            <input name="nev" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Név</label>
            <?php if (isset($errors['nev'])): ?>
                <div class="alert alert-danger"><?= implode(', ', ($errors['nev'] ?? [])) ?> </div>
            <?php endif; ?>
        </div>
        <div class="form-floating mb-3">
            <input name="feltet" type="text" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Feltét</label>
            <?php if (isset($errors['feltet'])): ?>
                <div class="alert alert-danger"><?= implode(', ', ($errors['feltet'] ?? [])) ?> </div>
            <?php endif; ?>        </div>
        <div class="form-floating mb-3">
            <input name="kicsi_ar" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Kicsi ára</label>
            <?php if (isset($errors['kicsi_ar'])): ?>
                <div class="alert alert-danger"><?= implode(', ', ($errors['kicsi_ar'] ?? [])) ?> </div>
            <?php endif; ?>
        </div>
        <div class="form-floating mb-3">
            <input name='nagy_ar' type="text" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Nagy ára</label>
            <?php if (isset($errors['nagy_ar'])): ?>
                <div class="alert alert-danger"><?= implode(', ', ($errors['nagy_ar'] ?? [])) ?> </div>
            <?php endif; ?>
        </div>

        <input class="btn btn-primary" type="submit" name="submit" value="Felvétel az étlapra">
        <?php if (isset($errors['_'])): ?>
            <div class='alert alert-danger m-2'><?= implode(', ', $errors['_']) ?> </div>
        <?php endif; ?>
    </form>
</div>

