<?php

namespace engine;

require_once '../DTO/Message.php';
require_once '../DTO/Chat.php';

require_once "IEngine.php";

class EtcdEngine implements IEngine
{

    /** @return  ?\DTO\Chat */
    public function get_chat_by_id(int $chat_id)
    {
        // TODO implement
        return null;
    }

    public function put_chat_by_id(int $chat_id, \DTO\Chat $chat): bool
    {
        // TODO implement
        return false;
    }
}
