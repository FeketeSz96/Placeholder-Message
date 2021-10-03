<?php
function redirect(string $to, array $parameters = []): void{
    echo "<script>window.location.replace('" . route($to, $parameters) . "');</script>";
}

function route(string $page, array $parameters = []): string{
    $result = ROOT_URL . "?p=$page";
    foreach ($parameters as $key=>$value) {
        $result .= "&$key=$value";
    }
    return $result;
}
