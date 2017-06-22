<?php

namespace App\Repositories;

use GuzzleHttp\Client;
use App\Services\PaginateService;
use App\Contracts\NewsRepository;

class ApiNewsRepository implements NewsRepository
{
    protected $client;
    protected $paginateService;

    public function __construct(Client $client, PaginateService $paginateService)
    {
        $this->client = $client;
        $this->paginateService = $paginateService;
    }

    public function getNextWeb()
    {
        $res = $this->client->get('https://newsapi.org/v1/articles?source=the-next-web&sortBy=latest&apiKey=33fe78daed884e7aa4efc8f305c5ad8b');
        $results = json_decode($res->getBody());

        return $this->paginateService->paginate($results->articles,5);
    }
}