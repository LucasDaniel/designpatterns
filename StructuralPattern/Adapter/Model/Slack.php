<?php

namespace Lucas\Adapter;

class Slack
{
    private string $login;
    private string $apiKey;

    public function __construct(string $login, string $apiKey)
    {
        $this->login = $login;
        $this->apiKey = $apiKey;
    }

    public function getLogin():string {
        return $this->login;
    }

    public function setLogin($login) {
        $this->login = $login;
    }

    public function getApiKey():string {
        return $this->apiKey;
    }

    public function setApiKey($apiKey) {
        $this->apiKey = $apiKey;
    }


}