<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use NotificationChannels\Telegram\TelegramChannel;
use Illuminate\Support\Facades\Config;
use App\Notifications\TelegramNotification;
use Illuminate\Support\Facades\Notification;

class UserController extends Controller
{
    public function dispararMensagem(){
        $user= \App\Models\User::find(1);
        Notification::route('telegram',Config::get('services.telegram_id'))
            ->notify(new TelegramNotification($user));
    }
}
