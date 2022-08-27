<?php

require 'vendor/autoload.php';

use FactoryMethod\PostCreator\FacebookPoster;
use FactoryMethod\PostCreator\InstagramPoster;

use FactoryMethod\PostCreator\PostCreator;

class PostCreatorService 
{
    /**
     * The client code can work with any subclass of SocialNetworkPoster since it
     * doesn't depend on concrete classes.
     */
    function clientCode(PostCreator $creator)
    {
        // ...
        $creator->post("Hello world!");
        // ...
    }
}

$service = new PostCreatorService();
print("Test Facebook Poster\n");
$service->clientCode(new FacebookPoster('test@gmail.com','myPassword'));

print("Test Instagram Poster\n");
$service->clientCode(new InstagramPoster('test@gmail.com','myPassword'));