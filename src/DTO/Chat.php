<?php

namespace DTO;

require_once "Message.php";

class Chat
{
    public int $owner_id;
    public int $creation_timestamp;
    /** @var int[] */
    public $members;
    public string $name;
    /** @var Message[] */
    public $messages;

    public function __construct(int $owner_id, array $members, string $name)
    {
        $this->owner = $owner;
        $this->creation_timestamp = time();
        $this->members = $members;
        $this->name = $name;
        $this->messages = [];
    }

    /** @returns Message */
    public static function fromJson(string $json)
    {
        return JsonEncoder::decode($json, Message::class);
    }
};
