<?php

namespace Lucas\FactoryMethod;

class LinkedInPoster extends SocialNetworkPoster
{
    public function getSocialNetwork(): SocialNetworkConnector
    {
        return new LinkedInConnector($this->login, $this->password);
    }
}