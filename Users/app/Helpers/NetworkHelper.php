<?php
namespace App\Helpers;

use GuzzleHttp\Client;

class NetworkHelper
{
    public static function makeRequest($method, $url, $options = [])
    {
        $client = new Client();
        $response = $client->request($method, $url, $options);
        return json_decode($response->getBody()->getContents(), true);
    }
}
