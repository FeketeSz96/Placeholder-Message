<?php
function getAuth(array $user): string
{
    return match ($user['auth']) {
        0 => 'User',
        1 => 'Moderator',
        9 => 'Admin',
        default => '',
    };
}

function isModerator(): bool
{
    return isset($_SESSION['user']['auth']) && $_SESSION['user']['auth'] > 0;
}

function isAdmin(): bool
{
    return isset($_SESSION['user']['auth']) && $_SESSION['user']['auth'] === 9;
}

function loggedIn(): bool
{
    return isset($_SESSION['user']);
}
