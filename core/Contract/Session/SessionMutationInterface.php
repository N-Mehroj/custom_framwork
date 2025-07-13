<?php

namespace Core\Contract\Session;

interface SessionMutationInterface
{
    public function push($key, $value);
    public function increment($key, $amount = null);
    public function decrement($key, $amount = null);
}