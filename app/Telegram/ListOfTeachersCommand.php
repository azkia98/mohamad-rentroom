<?php

namespace App\Telegram;

use Telegram\Bot\Actions;
use Telegram\Bot\Commands\Command;
use App\User;

class ListOfTeachersCommand extends Command
{
    /**
     * @var string Command Name
     */
    protected $name = "teachers";

    /**
     * @var string Command Description
     */
    protected $description = "لیست اساتید";

    /**
     * @inheritdoc
     */
    public function handle($arguments)
    {
        // $this->replyWithMessage(['text' => 'Hello! Welcome to our bot, Here are our available commands:']);

        // This will update the chat status to typing...
        $this->replyWithChatAction(['action' => Actions::TYPING]);

        $teachers = User::teachers()->get();
        
        $response = "";
        
        foreach ($teachers as $teacher)
        {
            // dd('fasdf');
            $response .= " name= {$teacher->name} \n familyname: {$teacher->familyname} \n national code: {$teacher->national_code} \n --------------------------------- \n";
        }
        
        $this->replyWithMessage(['text' => $response]);
    }
}