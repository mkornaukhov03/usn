<?php

require_once "DTO/Message.php";

/**
 * Messenger functionality:
 * GET  /v1/chats?chat_id=CHAT_ID -- get last (at most 10) messages from chat
 * PUT  /v1/chats?chat_id=CHAR_ID -- put new message to chat
 * POST /v1/chats                 -- create new chat
 *
 * Blog functionality:
 * TODO
 */


function main()
{
    $msg = new \DTO\Message(0, "example");

    $uri = $_SERVER['REQUEST_URI'];
    var_dump($uri);
    echo "-------------\n";
    var_dump($_GET);
}

main();
