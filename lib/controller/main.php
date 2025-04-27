<?php

declare(strict_types=1);

class Application
{
    protected PDO $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

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
