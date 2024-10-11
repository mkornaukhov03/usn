<?php 

function main() {
    $uri = $_SERVER['REQUEST_URI'];
    var_dump($uri);
    echo "-------------\n";
    var_dump($_GET);
}

main();
