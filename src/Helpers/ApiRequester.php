<?php

namespace Haritsyp\Shipper\Helpers;

trait ApiRequester
{
    protected function get(string $uri, array $param)
    {
        $curl = curl_init();

        $param['limit'] = 100;

        $query = http_build_query($param);

        $url = $this->getBaseUrl() . $uri . '?' . $query;

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

        if ($err) {
            return json_decode($err);
        }

        return json_decode($response, false);
    }

    protected function post(string $uri, array $body)
    {
        $curl = curl_init();

        $url = $this->getBaseUrl() . $uri;

        dump($body);

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

        dump(curl_getinfo($curl));

        curl_close($curl);


        if ($err) {
            dump($err);
            return json_decode($err, false);
        }

        dump($response);
        return json_decode($response, false);
    }
}
