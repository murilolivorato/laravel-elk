<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Elastic\Elasticsearch\ClientBuilder;
use Elastica\Client as ElasticaClient;
class SiteController extends Controller
{
    protected $elasticSearch;
    protected $elastica;
    protected $elasticaIndex;

    public function index(Request $request)
    {

        $client = ClientBuilder::create()->setHosts(['http://elasticsearch:9200'])->setBasicAuthentication('elastic', 'changeme')
            ->build();
        //  ->setHosts(['localhost:9200'])

    // CREATTE
     /*   $params = [
            'index' => 'sample_index_2',
            'id' => 'sampleId',
            'body' => [
                'price' => '3400',
                'name'  => 'sample_product',
                'descriotion' => 'my description'
            ]
        ];

        $response = $client->index($params);
        dd($response->asObject());*/

        // GET
       $params = [
            'index' => 'sample_index_2',
            'id' => 'sampleId'
        ];

        $response = $client->get($params);
        dd($response->asObject());

        // UPDATE
 /*       $params = [
            'index' => 'sample_index',
            'id' => 'sampleId',
            'body' => [
                'doc' => [
                        'price' => '50000'
                    ]
            ]
        ];
        $response =  $client->update($params);
       */

        // DELETE
       /* $params = [
            'index' => 'sample_index',
            'id' => 'sampleId'
        ];
        $response =  $client->delete($params);
       ;*/

        // DELETE INDICE
       /* $params = [
            'index' => 'sample_index'
        ];
        $response =  $client->indices()->delete($params);
        dd($response->asObject());*/
    }
}
