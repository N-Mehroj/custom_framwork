<?php

namespace Core\Contract\Session;

interface SessionPullInterface
{
    public function pull($key, $default = null);
}