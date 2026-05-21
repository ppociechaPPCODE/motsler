<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\App;

class LlmsTxtController extends Controller
{
    public function __invoke(): Response
    {
        $savedLocale = App::getLocale();
        $body = view('llms-txt', ['savedLocale' => $savedLocale])->render();
        App::setLocale($savedLocale);

        return response($body, 200, [
            'Content-Type' => 'text/plain; charset=UTF-8',
        ]);
    }
}
