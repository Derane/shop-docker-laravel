<?php

namespace App\Services\Telegram;

use App\Services\Telegram\Exceptions\TelegramBotApiException;
use Illuminate\Support\Facades\Http;

class TelegramBotApi
{
    const BASE_URL = 'https://api.telegram.org/bot';

    public static function sendMessage(string $token, int $chatId, string $text)
    {
        try {
            Http::get(self::BASE_URL . $token . '/sendMessage', [
                'chat_id' => $chatId,
                'text' => $text
            ]);
        } catch (\Throwable $e) {
            throw new TelegramBotApiException();
        }
    }
}
