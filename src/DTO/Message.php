<?php

namespace DTO;

class Message
{
    public int $user_id;
    public int $timestamp;
    public string $text;

    public function __construct(int $user_id, string $text)
    {
        $this->user_id = $user_id;
        $this->text = $text;
    }

    /** @returns Message */
    public static function fromJson(string $json)
    {
        return JsonEncoder::decode($json, Message::class);
    }
};


