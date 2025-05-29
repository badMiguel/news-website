<?php

class CSRF
{
    public function generateCSRF(string $name): string
    {
        $csrfToken = bin2hex(random_bytes(32));

        $_SESSION["csrf_{$name}"] = [
            "token" => $csrfToken,
            "time" => time(),
        ];

        return $csrfToken;
    }

    public function verifyCSRF(string $name, string $clientToken): bool
    {
        $key = "csrf_{$name}";

        if (!isset($_SESSION[$key])) {
            unset($_SESSION[$key]);
            return false;
        }

        $data = $_SESSION[$key];
        unset($_SESSION[$key]);

        $tokenExpiration = 900;
        if (isset($data["time"]) && (time() - $data["time"] > $tokenExpiration)) {
            return false;
        }

        // hash_equals for safer string comparison
        if (!hash_equals($data["token"], $clientToken)) {
            return false;
        }

        return true;
    }
}
