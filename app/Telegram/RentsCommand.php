<?php

namespace App\Telegram;

use Telegram\Bot\Actions;
use Telegram\Bot\Commands\Command;
use App\Models\Rent;

class RentsCommand extends Command
{
    /**
     * @var string Command Name
     */
    protected $name = "rents";

    /**
     * @var string Command Description
     */
    protected $description = "لیست تمام اجاره ها";

    /**
     * @inheritdoc
     */
    public function handle($arguments)
    {
        $this->replyWithChatAction(['action' => Actions::TYPING]);

        if($arguments == null or isEmpty($arguments))
            $arguments = "50:1";

        $args = explode(':',$arguments);

        $perPage = $args[0];
        $page = $args[1];

        // dump($perPage,$page);


        $rents = Rent::paginate($perPage,['*'],null,$page);

        // dump($rents);
        $responde = "";


        foreach ($rents as $rent) {
            $start_at = verta($rent->start_at)->format('%B/j H:i') ;
            $end_at = verta($rent->end_at)->format('%B/j H:i');
            $responde = "
            id: {$rent->id}
            room: {$rent->room->name},\n
            teacher: {$rent->user->full_name},\n
            lesson: {$rent->lesson->title},\n
            start_at: {$start_at},\n
            end_at: {$end_at},\n
            ";
           $this->replyWithMessage(['text' => $responde]);
        }

        dd($arguments);
    }
}