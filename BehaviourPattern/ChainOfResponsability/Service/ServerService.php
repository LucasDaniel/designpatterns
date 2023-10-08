<?php

namespace Lucas\ChainOfResponsibility;

class ServerService
{

    public static function logIn(Middleware $middleware, string $email, string $password): bool
    {
        if ($middleware->check($email, $password)) {
            echo "Server: Authorization has been successful!\n";

            // Do something useful for authorized users.

            return true;
        }

        return false;
    }

}