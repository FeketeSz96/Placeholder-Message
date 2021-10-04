<?php
lib('utils/request');

$result = db_execute('DELETE FROM users WHERE username = :username', [':username' => $_GET['u']]);

if($result['affected'] === 1){
    redirect('mainpages/users/browse');
}
