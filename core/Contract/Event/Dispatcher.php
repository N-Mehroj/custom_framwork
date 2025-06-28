<?php

namespace Core\Contract\Event;

interface Dispatcher
{
    public function listen($events, $listener = null);
    public function dispatch($event, $payload = [], $halt = false);
}
