<?php

$users = db_fetchAll('SELECT * FROM users WHERE 1 ORDER BY `auth` DESC ');
?>
<table>
        <thead>
            <tr>
                <th>id</th>
                <th>Felhasználónév</th>
                <th>E-mail cím</th>
                <th>Jogosultsága</th>
                <th>Felhasználó módosítása</th>
                <th>Felhasználó törlése</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $user['id'] ?></td>
                <td><a href="<?= route('mainpages/users/read', ['u'=>$user['username']]) ?>"><?= $user['username'] ?></a></td>
                <td><?= $user['email'] ?> </td>
                <td><?= getAuth($user) ?> </td>
                <td>
                    <div class="d-grid gap-2">
                        <a href="<?= route('mainpages/users/edit', ['u' => $user['username']]) ?> " class="btn btn-primary">
                            Edit
                        </a>
                    </div>

                </td>
                <td>
                    <div class="d-grid gap-2">
                        <a href='<?= route('mainpages/users/delete', ['u' => $user['username']]) ?> ' class='btn btn-danger'>
                            Delete
                        </a>
                    </div>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
</table>
