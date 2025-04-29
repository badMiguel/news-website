<?php

declare(strict_types=1);

class Paginator
{
    public int $amountToDisplay;
    private int $totalNews;
    private array $newsList;
    private int $currentNews;
    public int $currentPage;

    public function __construct()
    {
        $this->amountToDisplay = 5;
        $this->currentNews = 0;
        $this->currentPage = 1;
    }

    public function start(array $newsList)
    {
        $this->newsList = $newsList;
        $this->totalNews = count($newsList);

        $maxItem = $this->currentNews + $this->amountToDisplay;
        if ($maxItem - 1 > $this->totalNews) {
            $maxItem = $this->totalNews - 1;
        }
        return array_slice($this->newsList, $this->currentNews, $maxItem);
    }

    public function getTotalPages(): int
    {
    }

    /**
     *
     * Returns the start and end of page to display based on the current page.
     *
     */
    public function getPageRange(): array
    {
    }

    public function changeAmountToDisplay(int $value)
    {
        $this->amountToDisplay = $value;
        // TODO re-render home
    }

    public function skipToPage(): array {}

    public function nextPage(): array {}

    public function prevPage(): array {}
}
