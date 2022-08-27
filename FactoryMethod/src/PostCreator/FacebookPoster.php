<?php

namespace FactoryMethod\PostCreator;

use FactoryMethod\PostCreator\PostCreator;
use FactoryMethod\SocialNetworkConnector\FacebookConnector;
use FactoryMethod\SocialNetworkConnector\SocialNetworkConnector;

/**
 * This Concrete Creator supports Facebook. Remember that this class also
 * inherits the 'post' method from the parent class. Concrete Creators are the
 * classes that the Client actually uses.
 */
class FacebookPoster extends PostCreator
{
    private $login, $password;

    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function getSocialNetwork(): SocialNetworkConnector
    {
        return new FacebookConnector($this->login, $this->password);
    }
}