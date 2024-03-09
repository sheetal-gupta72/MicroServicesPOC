<?php

namespace App\Helpers;

// use Illuminate\Support\Facades\Http;
// use Illuminate\Http\Client\Response;
use App\Services\GuzzleClientWrapper;
use App\Exceptions\BadRequestException;
use App\Exceptions\ServiceCallFailedException;

class NetworkHelper
{
    /**
     * Send a GET request to the specified URL.
     *
     * @param  string  $url
     * @param  array  $queryParams
     * @return Response
     */
    public static function get(string $url, array $queryParams = [])
    {
        $guzzleWrapper = new GuzzleClientWrapper();
        try {
            $response = $guzzleWrapper->getRequest($url, $queryParams);
            return $response;
        } catch (BadRequestException $e) {
            \Log::error('Bad Request Exception: ' . $e->getMessage());
            return response()->json(['error' => 'Bad request encountered. Please check your request and try again.'], 400);
        } catch (ServiceCallFailedException $e) {
            \Log::error('Service Call Failed Exception: ' . $e->getMessage());
            return response()->json(['error' => 'An error occurred on the server. Please try again later.'], 500);
        }
        // return Http::get($url, $queryParams);
    }

    /**
     * Send a POST request to the specified URL.
     *
     * @param  string  $url
     * @param  array  $data
     * @return Response
     */
    // public static function post(string $url, array $data): Response
    // {
    //     return Http::post($url, $data);
    // }

    // public static function delete(string $url): Response
    // {
    //     return Http::delete($url);
    // }

    // public static function put(string $url, array $data): Response
    // {
    //     return Http::put($url, $data);
    // }
}
