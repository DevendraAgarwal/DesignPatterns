<?php

require_once '__DIR__/../vendor/autoload.php';

use Structural\Adapter\AppClient;
use Structural\Adapter\NotificationProviders\SlackProvider;
use Structural\Adapter\NotificationService\EmailNotificationService;
use Structural\Adapter\NotificationService\SlackNotificationService;

// Create Client App
$app = new AppClient();

// Send Email Notification
echo "Client code is designed correctly and works with email notifications:\n";
$notification = new EmailNotificationService("developers@example.com");
$app->sendNotification($notification);
echo "\n\n";

// Send Slack Notification
echo "The same client code can work with other classes via adapter:\n";
$slackApi = new SlackProvider("example.com", "XXXXXXXX");
$notification = new SlackNotificationService($slackApi, "Example.com Developers");
$app->sendNotification($notification);

/**
 * If We need to Add new Notification Provider
 * Just Add New Provider and Notification Service
 *
 * Logic To Connect With Whatsapp Server and Config
 * $whatsappApi = new WhatsappProvider();
 * $notification = new WhatsappNotificationService($whatsappApi)
 * $app->sendNotification($notification)
 */
