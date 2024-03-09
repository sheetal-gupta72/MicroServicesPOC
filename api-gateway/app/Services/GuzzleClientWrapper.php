<?php

namespace App\Services;

use GuzzleHttp\Client;
use App\Exceptions\BadRequestException;
use App\Exceptions\ServiceCallFailedException;

class GuzzleClientWrapper
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function getRequest($url)
    {
        try {
            $response = $this->client->request('GET', $url);
            // If the request is successful, just return the response
            return $response;
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            throw new BadRequestException('Bad Request', 400);
        } catch (\GuzzleHttp\Exception\ServerException $e) {
            throw new ServiceCallFailedException('Service Call Failed', 500);
        }
    }
}
