<?php
lib('utils/request');
$user = db_fetch('users', 'username LIKE :username', [':username' => $_GET['u']]);

if(isset($_POST['submit'])){
    $result = db_execute('UPDATE users SET username = :username, email = :email, auth = :auth WHERE username = :old_username', [
        ':username' => $_POST['username'],
        ':email' => $_POST['email'],
        ':auth' => $_POST['auth'],
        ':old_username' => $user['username'],
    ]);
    if($result['affected'] === 1){
        redirect('mainpages/users/edit&u=' . $_POST['username']);
    }
}
?>
<div class="position-absolute top-50 start-50 translate-middle">
    <form method="post">
        <div class="input-group" style="color: white">
            <label for="username" class='form-label me-3'>Username: </label>
            <input id="username" name="username" class='form-control' value="<?= $user['username'] ?>" placeholder="Username">
        </div>

        <div class='input-group' style="color: white">
            <label for='email' class="form-label me-3">Email: </label>
            <input id='email' class="form-control" name='email' value="<?= $user['email'] ?>" placeholder='email@example.com'>
        </div>

        <div class='input-group' style="color: white">
            <label for='auth' class='form-label me-3'>Auth: </label>
            <select name='auth' class='form-control' id="auth">
                <option value="0" <?= $user['auth'] === 0 ? 'selected' : '' ?> >User</option>
                <option value='1' <?= $user['auth'] === 1 ? 'selected' : '' ?>>Moderator</option>
                <option value='9' <?= $user['auth'] === 9 ? 'selected' : '' ?>>Admin</option>
            </select>
        </div>

        <input type="submit" value="Save" class="btn btn-primary" name="submit">
    </form>
</div>