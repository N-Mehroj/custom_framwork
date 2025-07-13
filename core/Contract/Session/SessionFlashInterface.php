<?php

namespace Core\Contract\Session;

interface SessionFlashInterface
{
    public function flash($key, $value);
    public function now($key, $value);
    public function reflash();
    public function keep(array $keys);
}