<?php

namespace App\Traits;

use App\Book;
use App\Event;
use App\Notifications\UserGotStickers;
use App\School;
use App\Sticker;

trait GetStickers
{
    public function wentToSchool(School $school, $num_stickers)
    {
        $type = 'escola';
        $this->schools()->attach($school);
        for ($i = 1; $i <= $num_stickers; $i++) {
            $sticker = $this->fresh()->chooseSticker($type);
            $this->stickerNotification($sticker, $type);
        }
    }

    public function readOneBook(Book $book, $num_stickers)
    {
        $type = 'livro';
        $this->books()->attach($book);
        for ($i = 1; $i <= $num_stickers; $i++) {
            $sticker = $this->fresh()->chooseSticker($type);
            $this->stickerNotification($sticker, $type);
        }
    }

    public function attendedAnEvent(Event $event, $num_stickers)
    {
        $type = 'atividade';
        $this->events()->attach($event);
        for ($i = 1; $i <= $num_stickers; $i++) {
            $sticker = $this->fresh()->chooseSticker($type);
            $this->stickerNotification($sticker, $type);
        }
    }

    public function chooseSticker($type)
    {
        $stickers_type = Sticker::all()->where('type', $type)->pluck('id')->toArray();  // Find all the stickers from a specific type
        $user_stickers = $this->stickers->pluck('id')->toArray();   // Find all the stickers that the User has
        $result = array_diff($stickers_type,$user_stickers);        // Find out witch stickers the user does not have

        if (!empty($result)) {
            $key = array_rand($result, 1);
            $sticker = Sticker::all()->where('id', $result[$key])->first();
            $this->stickers()->attach($sticker->id);
            return $sticker;
        }
    }

    public function stickerNotification($sticker, $type){
        if (!empty($sticker)) {
            if ($type == 'escola') {
                $message = 'Parabéns! Você acaba de receber a figurinha ' . $sticker->name . ' por ter ido à escola';
            } elseif ($type == 'livro') {
                $message = 'Parabéns! Você acaba de receber a figurinha ' . $sticker->name . ' por ter lido um livro';
            } elseif ($type == 'atividade') {
                $message = 'Parabéns! Você acaba de receber a figurinha ' . $sticker->name . ' por ter feito uma atividade';
            }
        $this->notify(new UserGotStickers($message));
        }
    }
}