<?php

namespace API;

class PostRequest
{
    public int $owner_id;
    public string $name;
    /** @var int[] */
    public $members;
};
