<?php

namespace Test;

require '../vendor/autoload.php';

use Yesbee\Yesbee;






$client = Yesbee::factory(array('base_url' => 'http://localhost/mcoin/yesbee-connector/test'));

$response = $client->get()->exchange(array('store_id' => 'xyz', 'api_token' => 'xxx', 'amount' => '123456'))->send('direct:anu');
// $parameter = $response->json();




$request = $this->client->post($url,array(
                'content-type' => 'application/json'
        ),array());
$request->setBody($data); #set body!
$response = $request->send();

return $response;