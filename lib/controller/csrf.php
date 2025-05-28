<?php

class CSRF
{
    public function generateCSRF(string $name): string
    {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }

        $csrfToken = bin2hex(random_bytes(32));
        $_SESSION["csrf_" . $name] = $csrfToken;
        return $csrfToken;
    }

    public function verifyCSRF(string $name, string $clientToken): bool
    {
        session_start();
        if (!isset($_SESSION["csrf_" . $name])) {
            return false;
        }

        $sessionToken = $_SESSION["csrf_" . $name];
        unset($_SESSION["csrf_" . $name]);
        session_write_close();

        // hash_equals for safer string comparison
        if (!hash_equals($sessionToken, $clientToken)) {
            return false;
        }
        return true;
    }
}
