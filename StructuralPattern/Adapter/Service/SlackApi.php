<?php

namespace Lucas\Adapter;

class SlackApi
{
    private Slack $slack;

    public function __construct(string $login, string $apiKey)
    {
        $this->slack = new Slack($login, $apiKey);
    }

    public function logIn(): void
    {
        // Send authentication request to Slack web service.
        echo "Logged in to a slack account '{$this->slack->getLogin()}'.\n";
    }

    public function sendMessage(string $chatId, string $message): void
    {
        // Send message post request to Slack web service.
        echo "Posted following message into the '$chatId' chat: '$message'.\n";
    }
}