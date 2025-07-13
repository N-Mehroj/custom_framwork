<?php

namespace Core\Contract\Session;

interface SessionCheckInterface
{
    public function has($key);
    public function exists($key);
    public function missing($key);
}