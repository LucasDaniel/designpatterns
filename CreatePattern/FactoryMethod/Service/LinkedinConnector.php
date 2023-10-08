<?php

namespace Lucas\FactoryMethod;

class LinkedInConnector extends ServiceConnector implements SocialNetworkConnector
{
    public function logIn(): void
    {
        echo "Send HTTP API request to log in user ".$this->connector->getLogin()." with " .
            "password ".$this->connector->getPassword()."\n";
    }

    public function logOut(): void
    {
        echo "Send HTTP API request to log out user ".$this->connector->getLogin()."\n";
    }

    public function createPost($content): void
    {
        echo "Send HTTP API requests to create a post in LinkedIn timeline.\n";
    }
}