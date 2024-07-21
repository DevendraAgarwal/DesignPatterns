<?php

namespace Structural\Adapter\NotificationService;

/**
 * @interface Notification
 */
interface Notification {
    public function send(string $title, string $message);
}
