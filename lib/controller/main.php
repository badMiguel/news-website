<?php

declare(strict_types=1);

class Application
{
    private Model $model;
    private Paginator $paginator;

    public function __construct(Model $model, Paginator $paginator)
    {
        $this->model = $model;
        $this->paginator = $paginator;
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
        $currNewsList = $this->paginator->start($newsList);

        $data = [
            "currNewsList" => $currNewsList,
        ];
        $this->render("home", $data);
    }

    public function pageNotFound(): void
    {
        $this->render("404", []);
    }
}
