<?php

namespace Structural\Adapter;

use Structural\Adapter\NotificationService\Notification;

class AppClient {

    /**
     * sendNotification
     * The client code can work with any class that follows the Target interface.
     *
     * @param  mixed $notification
     * @return void
     */
    public function sendNotification(Notification $notification)
    {
        // ...

        echo $notification->send("Website is down!",
            "<strong style='color:red;font-size: 50px;'>Alert!</strong> " .
            "Our website is not responding. Call admins and bring it up!");

        // ...
    }

}