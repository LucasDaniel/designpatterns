<?php

namespace Lucas\FactoryMethod;

abstract class SocialNetworkPoster
{
    protected $login, $password;

    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    abstract public function getSocialNetwork(): SocialNetworkConnector;

    public function post($content): void
    {
        $network = $this->getSocialNetwork();
        
        $network->logIn();
        $network->createPost($content);
        $network->logout();
    }
}