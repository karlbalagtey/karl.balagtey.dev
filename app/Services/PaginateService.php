<?php

namespace App\Services;

use Illuminate\Pagination\LengthAwarePaginator as Paginator;
use Illuminate\Support\Collection;

class PaginateService
{
    /**
     * paginate results default to 20 per page
     * @param $results
     * @param int $perPage
     * @return $this
     */
    public function paginate($results, $perPage = 20)
    {
        $collection = new Collection($results);
        $currentPage = Paginator::resolveCurrentPage();

        $currentPageResults = $collection->slice(($currentPage - 1) * $perPage, $perPage)->all();

        $results = new Paginator($currentPageResults, count($results), $perPage);

        return $results->setPath('');
    }
}