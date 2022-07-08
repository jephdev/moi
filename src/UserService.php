<?php

namespace Jephdev\Moi;

use GuzzleHttp\Client;

class UserService
{
    public static function getById($id)
    {
        if (empty($id)) return "ID required";

        $endpoint = "users/" . $id;
        return self::fetch($endpoint);
    }

    public static function getMany($page_id = 1)
    {
        $endpoint = "users/?page=" . $page_id;
        return self::fetch($endpoint);
    }

    private static function fetch($endpoint)
    {
        $client = new Client();

        try {
            $response = $client->request('GET', "https://reqres.in/api/" . $endpoint);
            return (string)$response->getBody();
        } catch (\Exception $e) {
            if ($e instanceof \GuzzleHttp\Exception\ConnectException) return "Could not reach API";
            if ($e->getCode() == 404) return "User not found";
            if ($e->getCode() == 500) return "System error. Pls try again later";
            return $e->getMessage();
        }
    }
}
