<?php

namespace Haritsyp\Shipper\Helpers;

use Illuminate\Support\Facades\Log;

trait ApiRequester
{
    protected function get(string $uri, array $param)
    {
        $curl = curl_init();

        $url = $this->getBaseUrl() . $uri;

        if ($param) {
            $query = http_build_query($param);
            $url = $url . '?' . $query;
        }

        /*Log::info(json_encode([
            'url' => $url,
            'body' => "",
            'header' => [
                "Accept: application/json",
                "X-API-Key: " . $this->getApiKey()
            ]
        ]));*/

        curl_setopt_array($curl, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "Accept: application/json",
                "X-API-Key: " . $this->getApiKey()
            ],
        ]);

        $response = curl_exec($curl);

        $err = curl_error($curl);

        curl_close($curl);

        /*Log::info(json_encode([
            'response' => json_decode($response,false)
        ]));*/

        if ($err) {
            return json_decode($err);
        }

        return json_decode($response, false);
    }

    protected function post(string $uri, array $body)
    {
        $curl = curl_init();

        $url = $this->getBaseUrl() . $uri;

        /*Log::info(json_encode([
            'url' => $url,
            'body' => $body,
            'header' => [
                "Accept: application/json",
                "Content-Type: application/json",
                "X-API-Key: " . $this->getApiKey()
            ]
        ]));*/

        curl_setopt_array($curl, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode($body),
            CURLOPT_HTTPHEADER => [
                "Accept: application/json",
                "Content-Type: application/json",
                "X-API-Key: " . $this->getApiKey()
            ],
        ]);

        $response = curl_exec($curl);

        $err = curl_error($curl);

        curl_close($curl);

        /*Log::info(json_encode([
            'response' => json_decode($response,false)
        ]));*/

        if ($err) {
            return json_decode($err, false);
        }

        return json_decode($response, false);
    }

    protected function put(string $uri, array $body)
    {
        $curl = curl_init();

        $url = $this->getBaseUrl() . $uri;

        /*Log::info(json_encode([
            'url' => $url,
            'body' => $body,
            'header' => [
                "Accept: application/json",
                "Content-Type: application/json",
                "X-API-Key: " . $this->getApiKey()
            ]
        ]));*/

        curl_setopt_array($curl, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "PUT",
            CURLOPT_POSTFIELDS => json_encode($body),
            CURLOPT_HTTPHEADER => [
                "Accept: application/json",
                "Content-Type: application/json",
                "X-API-Key: " . $this->getApiKey()
            ],
        ]);

        $response = curl_exec($curl);

        $err = curl_error($curl);

        curl_close($curl);

        /*Log::info(json_encode([
            'response' => json_decode($response,false)
        ]));*/

        if ($err) {
            return json_decode($err, false);
        }

        return json_decode($response, false);
    }

    protected function patch(string $uri, array $body)
    {
        $curl = curl_init();

        $url = $this->getBaseUrl() . $uri;

        /*Log::info(json_encode([
            'url' => $url,
            'body' => $body,
            'header' => [
                "Accept: application/json",
                "Content-Type: application/json",
                "X-API-Key: " . $this->getApiKey()
            ]
        ]));*/

        curl_setopt_array($curl, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "PUT",
            CURLOPT_POSTFIELDS => json_encode($body),
            CURLOPT_HTTPHEADER => [
                "Accept: application/json",
                "Content-Type: application/json",
                "X-API-Key: " . $this->getApiKey()
            ],
        ]);

        $response = curl_exec($curl);

        $err = curl_error($curl);

        curl_close($curl);

        /*Log::info(json_encode([
            'response' => json_decode($response,false)
        ]));*/

        if ($err) {
            return json_decode($err, false);
        }

        return json_decode($response, false);
    }

    protected function delete(string $uri, array $body)
    {
        $curl = curl_init();

        $url = $this->getBaseUrl() . $uri;

        /*Log::info(json_encode([
            'url' => $url,
            'body' => $body,
            'header' => [
                "Accept: application/json",
                "Content-Type: application/json",
                "X-API-Key: " . $this->getApiKey()
            ]
        ]));*/

        curl_setopt_array($curl, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "DELETE",
            CURLOPT_POSTFIELDS => json_encode($body),
            CURLOPT_HTTPHEADER => [
                "Accept: application/json",
                "Content-Type: application/json",
                "X-API-Key: " . $this->getApiKey()
            ],
        ]);

        $response = curl_exec($curl);

        $err = curl_error($curl);

        curl_close($curl);

        /*Log::info(json_encode([
            'response' => json_decode($response,false)
        ]));*/

        if ($err) {
            return json_decode($err, false);
        }

        return json_decode($response, false);
    }
}
