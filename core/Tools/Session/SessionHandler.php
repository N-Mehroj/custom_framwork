<?php

namespace Core\Tools\Session;

use Core\Contract\Session\SessionHandlerInterface;

class SessionHandler implements SessionHandlerInterface
{

    public function open($savePath, $sessionName)
    {
        // DB connection, fayl yo‘li tayyorlash
        return true;
    }

    public function close()
    {
        // DB close, yoki tozalash
        return true;
    }

    public function read($id)
    {
        // Sessionni o‘qish (DBdan yoki boshqa joydan)
        // return session data string
        return ''; // agar topilmasa, bo‘sh qaytarish zarur
    }

    public function write($id, $data)
    {
        // Sessionni saqlash (id + data)
        return true;
    }

    public function destroy($id)
    {
        return true;
    }

    public function gc($maxLifetime)
    {
        return true;
    }
}