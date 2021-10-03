<?php
$user = $_SESSION['user']
?>
<div class="position-absolute top-50 start-50 translate-middle">
    <div class="container">
        <table class="table-responsive" style="color: white">
            <tbody>
            <tr>
                <th>Id:</th>
                <td><?= $user['id'] ?></td>
            </tr>
            <tr>
                <th scope='row'>Username:</th>
                <td><?= $user['username'] ?> </td>
            </tr>
            <tr>
                <th scope='row'>Email:</th>
                <td><?= $user['email'] ?> </td>
            </tr>
            <tr>
                <th scope='row'>Auth:</th>
                <td><?= getAuth($user) ?> </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>