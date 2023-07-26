<?php
namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class KlaviyoController extends Controller
{
    public function createList()
    {
        $klaviyoApiKey = "pk_466e48ce9d22d163431ed2a604a4cb6798";

        $client = new Client();

        try {
            $response = $client->request('POST', 'https://a.klaviyo.com/api/lists/', [
                'body' => '{"data":{"type":"list","attributes":{"name":"Newsletter"}}}',
                'headers' => [
                    'Authorization' => 'Klaviyo-API-Key pk_466e48ce9d22d163431ed2a604a4cb6798',
                    'accept' => 'application/json',
                    'content-type' => 'application/json',
                    'revision' => '2023-07-15',
                ],
            ]);

            $responseData = json_decode($response->getBody(), true);
            dd($responseData);
        }
        catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
}
