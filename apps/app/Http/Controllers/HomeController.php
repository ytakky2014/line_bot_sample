<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index() {
        $httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient(env('CHANNEL_ACCESS_TOKEN'));
        $textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello');
        $response = $bot->replyMessage('<replyToken>', $textMessageBuilder);

        echo $response->getHTTPStatus() . ' ' . $response->getBody();
    }
}