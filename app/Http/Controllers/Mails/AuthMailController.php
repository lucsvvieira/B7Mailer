<?php

namespace App\Http\Controllers\Mails;

use App\Http\Controllers\Controller;
use App\Mail\RegisterEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AuthMailController extends Controller
{
    //

    public function sendRegisterMail() {
        $registerEmail = new RegisterEmail();

        return $registerEmail;

        // Mail::to('lucas@email.com')->send($registerEmail);
    }
}
