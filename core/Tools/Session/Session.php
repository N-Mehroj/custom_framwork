<?php

namespace Core\Tools\Session;

use Core\Contract\Session\SessionInterface;

class Session implements SessionInterface
{

    public function has($key)
    {
        // TODO: Implement has() method.
    }

    public function exists($key)
    {
        // TODO: Implement exists() method.
    }

    public function missing($key)
    {
        // TODO: Implement missing() method.
    }

    public function flash($key, $value)
    {
        // TODO: Implement flash() method.
    }

    public function now($key, $value)
    {
        // TODO: Implement now() method.
    }

    public function reflash()
    {
        // TODO: Implement reflash() method.
    }

    public function keep(array $keys)
    {
        // TODO: Implement keep() method.
    }

    public function push($key, $value)
    {
        // TODO: Implement push() method.
    }

    public function increment($key, $amount = null)
    {
        // TODO: Implement increment() method.
    }

    public function decrement($key, $amount = null)
    {
        // TODO: Implement decrement() method.
    }

    public function pull($key, $default = null)
    {
        // TODO: Implement pull() method.
    }

    public function get($key, $default = null)
    {
        // TODO: Implement get() method.
    }

    public function put($key, $value)
    {
        // TODO: Implement put() method.
    }

    public function forget($key)
    {
        // TODO: Implement forget() method.
    }

    public function flush()
    {
        // TODO: Implement flush() method.
    }
    public function startSession()
    {
        $handler = new SessionHandler();
        session_set_save_handler(
            [$handler, 'open'],
            [$handler, 'close'],
            [$handler, 'read'],
            [$handler, 'write'],
            [$handler, 'destroy'],
            [$handler, 'gc']
        );
        session_start();
    }
    public function writeSession()
    {

    }
    public function stopSession()
    {
        session_abort();
    }
}