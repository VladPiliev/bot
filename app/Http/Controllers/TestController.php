<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TestController extends Controller
{
    public function FunctionName()
    {
        Http::post('https://api.tlgr.org/bot5111107809:AAGuxAaKiRnHna9wnAWSqh62QRQJP-fKP2E/sendMessage',[
            'chat_id' => 778399078,
            'text' => 'Hi'
        ]);
    }
}
