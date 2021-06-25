<?php
/**
 * Created by PhpStorm.
 * User: Лука
 * Date: 16.05.2020
 * Time: 14:49
 */
include 'check_auth.php';

include('../../vendor/autoload.php');
include('../../keyboards.php');
include('../../BotHelper.php');

use Longman\TelegramBot\Request;

$users = $_REQUEST['users'];
$message = $_REQUEST['message'];
$users = explode(',', $users);
$telegram = new Longman\TelegramBot\Telegram($telegram_key, '@Sarafaner_bot');

foreach ($users as $chat_id)
{
    Request::sendMessage([
        'chat_id' => $chat_id,
        'text' => $message
    ]);
}


echo 1;