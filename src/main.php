<?php 

/**
 * Messenger functionality:
 * GET  /v1/chats?chat_id=CHAT_ID -- get last (at most 10) messages from chat
 * PUT  /v1/chats?chat_id=CHAR_ID -- put new message to chat
 * POST /v1/chats                 -- create new chat
 *
 * Blog functionality:
 * TODO
 */

class Message {
    public int $user_id;
    public int $timestamp;
    public string $text;

    public function __construct(int $user_id, string $text) {
        $this->user_id = $user_id;
        $this->text = $text;
    }

    /** @returns Message */
    public static function fromJson(string $json) {
        return JsonEncoder::decode($json, Message::class);
    }
};



function main() {
    $uri = $_SERVER['REQUEST_URI'];
    var_dump($uri);
    echo "-------------\n";
    var_dump($_GET);
}

main();
