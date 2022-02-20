<?php

namespace MohammadZarifiyan\Telegram\Abstractions;

use Exception;
use Symfony\Component\HttpFoundation\Response;
use function MohammadZarifiyan\Telegram\Traits\response;

abstract class TelegramGainerException extends Exception
{
    public function render()
    {
        return http_response_code(Response::HTTP_NO_CONTENT);
    }

    abstract public function report();
}
