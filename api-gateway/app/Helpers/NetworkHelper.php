<?php
namespace App\Helpers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Response;

class NetworkHelper
{
    /**
     * Send a GET request to the specified URL.
     *
     * @param  string  $url
     * @param  array  $queryParams
     * @return Response
     */
    public static function get(string $url, array $queryParams = []): Response
    {
        return Http::get($url, $queryParams);
    }

    /**
     * Send a POST request to the specified URL.
     *
     * @param  string  $url
     * @param  array  $data
     * @return Response
     */
    public static function post(string $url, array $data): Response
    {
        return Http::post($url, $data);
    }

    public static function delete(string $url): Response
    {
        return Http::delete($url);
    }

    public static function put(string $url, array $data): Response
    {
        return Http::put($url, $data);
    }
}
