<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\makeMail;
use Illuminate\Support\Facades\Mail;

class EmailSend extends Controller
{
    
    public function send(Request $request)
    {
        Mail::to('serge.py97@outlook.com.br')
            ->send(new makeMail());
    }
}
