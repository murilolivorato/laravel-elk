<?php

namespace App\Http\Controllers;

use Elastic\Elasticsearch\ClientBuilder;
use Elastica\Client as ElasticaClient;
class ClientController extends Controller
{
    // ELASTIC SEARCH PHP CLIENT
    protected $elasticSeach;
    // ELASTICA CLIENT
    protected $elastica;

    public function index() {
        /*$this->elasticSeach = ClientBuilder::create()->setHosts(['http://elasticsearch:9200'])->setBasicAuthentication('elastic', 'changeme')->build();*/

        $params = [
            'index' => 'sample_index_2'
        ];
        $elastica = new ElasticaClient(['host' => 'http://elasticsearch', 'port' => '9200']);
        $index = $elastica->getIndex('pets');
        $doggType = $index->getType('dog');

        dd($doggType->getMapping());
    }
}
