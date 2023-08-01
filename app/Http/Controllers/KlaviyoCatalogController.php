<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class KlaviyoCatalogController extends Controller
{
    public function createCatalog()
    {
        $klaviyoApiKey = "pk_466e48ce9d22d163431ed2a604a4cb6798";

        $client = new Client();

        try {
 //           $response = $client->request('GET', 'https://a.klaviyo.com/api/accounts/',[
              $response = $client->request('POST', 'https://a.klaviyo.com/api/catalog-items/', [
                  'body' => '{
                            "data": {
                                "type": "catalog-item",
                                "attributes": {
                                    "external_id": "SAMPLE-DATA-ITEM-4",
                                    "title": "Ocean Blue Shirt (Sample)",
                                    "description": "Ocean blue cotton shirt with a narrow collar and buttons down the front and long sleeves. Comfortable fit and titled kaleidoscope patterns.",
                                    "url": "https://via.placeholder.com/150",
                                    "custom_metadata": {
                                        "newKey": "New Value"
                                    }
                                }

                            }
                        }',
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
