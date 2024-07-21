<?php

namespace Structural\Adapter\NotificationProviders;

class SlackProvider {

    private $login;
    private $apiKey;
    
    /**
     * __construct
     *
     * @param  string $login
     * @param  string $apiKey
     * @return void
     */
    public function __construct(string $login, string $apiKey)
    {
        $this->login = $login;
        $this->apiKey = $apiKey;
    }
    
    /**
     * logIn In Slack Account
     *
     * @return void
     */
    public function logIn(): void
    {
        // Send authentication request to Slack web service.
        echo "Logged in to a slack account $this->login and Key $this->apiKey.\n";
    }
    
    /**
     * Send Message
     *
     * @param  mixed $chatId
     * @param  mixed $message
     * @return void
     */
    public function sendMessage(string $chatId, string $message): void
    {
        // Send message post request to Slack web service.
        echo "Posted following message into the '$chatId' chat: '$message'.\n";
    }
}
