<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Telegram\Bot\Laravel\Facades\Telegram;

class TelegramController extends Controller
{

    private $webhookUrl = '/651957262:AAELCjsHoPbGxRNcsd4QYSmD964vmQVFH3o/webhook';
    private $ngrokUrl = 'https://mohamad.liara.run';



    public function webhook()
    {
        // $updates = Telegram::getWebhookUpdates();
         $update = Telegram::commandsHandler(true);

        return 'ok';
    }


    public function setWebhook()
    {
        $response = Telegram::setWebhook(['url' => "{$this->ngrokUrl}{$this->webhookUrl}"]);

        return 'ok';
    }
}
