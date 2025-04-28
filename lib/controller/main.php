<?php

declare(strict_types=1);

class Application
{
    private Model $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     *
     * Use this method to render a view inside layout.php
     * - $viewName is the file name of the views (without ".php") e.g. home 
     * - $data is associative array to pass data to views
     *
     */
    public function render(string $viewName, array $data)
    {
        $data['viewPath'] = VIEWS . $viewName . ".php";
        extract($data);
        require_once VIEWS . "layout.php";
    }

    public function index(): void
    {
        $newsList = $this->model->getAllNews();
        $data = [
            "newsList" => $newsList,
        ];
        $this->render("home", $data);
    }

    public function pageNotFound(): void
    {
        $this->render("404", []);
    }
}
