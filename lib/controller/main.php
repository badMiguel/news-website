<?php

declare(strict_types=1);

class Application
{
    private function render(string $viewName, array $data)
    {
        $data['viewPath'] = VIEWS . $viewName . ".php";
        extract($data);
        require_once VIEWS . "layout.php";
    }

    public function index(): void
    {
        $this->render("home", ["foo" => "bar"]);
    }

    public function pageNotFound(): void
    {
        $this->render("404", []);
    }
}
