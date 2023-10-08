<?php

namespace Lucas\FactoryMethod;

class ServiceConnector
{
    protected ModalConnector $connector;

    public function __construct(string $email, string $password)
    {
        $this->connector = new ModalConnector($email,$password);
    }
}