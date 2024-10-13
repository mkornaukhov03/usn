<?php

namespace engine;

require_once '../DTO/Message.php';
require_once '../DTO/Chat.php';

interface IEngine
{
    // TODO separate on chat meta info and chat messages
    /** @return  ?\DTO\Chat */
    public function get_chat_by_id(int $chat_id);

    public function put_chat_by_id(int $chat_id, \DTO\Chat $chat): bool;
};
