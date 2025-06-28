<?php

namespace Core\Tools\Log\Event;

class MessageLogged
{
    public $level;
    public $message;
    public $context;

    public function __construct($level, $message,array $context = [])
    {
           $this->level = $level;
           $this->message = $message;
           $this->context = $context;
    }


}