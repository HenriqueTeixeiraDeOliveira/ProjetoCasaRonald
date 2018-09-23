<?php

namespace App\Traits;

use App\Notifications\UserGotStickers;
use App\Sticker;

trait GetStickers
{
    public function wentToSchool()
    {
        $type = 'escola';
        $sticker = $this->chooseSticker($type);
        $this->stickerNotification($sticker, $type);
    }

    public function readOneBook()
    {
        $type = 'livro';
        $sticker = $this->chooseSticker($type);
        $this->stickerNotification($sticker, $type);
    }

    public function didAnActivity()
    {
        $type = 'atividade';
        $sticker = $this->chooseSticker($type);
        $this->stickerNotification($sticker, $type);
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