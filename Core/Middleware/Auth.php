<?php

namespace Core\Middleware;

class Auth
{
    public function handle()
    {
        if (!$_SESSION['admin'] ?? false) {
            header('location: /admin');
            exit();
        }
    }
}