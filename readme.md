
# Api facades for selena api

На данный момент покрыто 70% ендпоинтов.

Документация на api: https://selena-online.ru/rest/documentation

Пример взаимодействия с Api facade
```php
$client = new Client(['auth' => ['username' => 'username', 'password' => 'pass']]);
//Для упрощения примера сделал анонимный класс 
$responder = new class implements ResponderContract {
    public function handle(ClientInterface $client, BasicQuery $query): ResponseInterface
    {
        $response = $client->sendRequest(new Request($query->getMethod(), $query->getUrl(), $query->getHeaders(), $query->getBody(), $query->getVersion()));
        //your logic
    	return $response;
    }
};
$frontApi = new FrontApi($client);
$response = $frontApi->apartmentList(payload: ['objectid'=>9], responder: $responder);
```
