<?php

namespace Structural\Adapter\NotificationService;

use Structural\Adapter\NotificationService\Notification;
use Structural\Adapter\NotificationProviders\SlackProvider;

class SlackNotificationService implements Notification {

    private $slack;
    private $chatId;

    public function __construct(SlackProvider $slack, string $chatId)
    {
        $this->slack = $slack;
        $this->chatId = $chatId;
    }

    /**
     * An Adapter is not only capable of adapting interfaces, but it can also
     * convert incoming data to the format required by the Adaptee.
     */
    public function send(string $title, string $message): void
    {
        $slackMessage = "#" . $title . "# " . strip_tags($message);
        $this->slack->logIn();
        $this->slack->sendMessage($this->chatId, $slackMessage);
    }
}
