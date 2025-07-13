<?php

namespace Core\Contract\Session;

interface SessionStorageInterface
{
    public function get($key, $default = null);
    public function put($key, $value);
    public function forget($key);
    public function flush();
}