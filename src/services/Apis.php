<?php 

class Apis {
    private string $url;
    private array $data;
    private string $search;
    public function __construct(string $url) {
        $this->url = $url;
    }

    public function responseCar() {
        return $this->requestCar();
    }

    public function responseSearch() {
        return $this->requestSearch();
    }

    public function setSearch(string $search) {
        $this->search = $search;
    }

    private function requestSearch() {

        $url = $this->url;

        if(empty($this->search)) {
            http_response_code(400);
            return json_encode(['status' => 'Erro']);
        }

        try {
            $api = json_decode(file_get_contents($url . $this->search));
            return $api->results;
        } catch (\Exception $err) {
            return $err;
        }     

    }

    private function requestCar() {

        $url = $this->url;

        try {
            $api = json_decode(file_get_contents($url));
            return $api;
        } catch (\Exception $err) {
            return $err;
        }

    }

}

?>