<?php

namespace App\Http\Controllers\Mails;

use App\Http\Controllers\Controller;
use App\Mail\RegisterEmail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AuthMailController extends Controller
{
    //

    public function sendRegisterMail() {

        $user = new User();
        $user->name = 'Lucas Vieira.';

        $registerEmail = new RegisterEmail($user);

        //return $registerEmail;

        Mail::to('lucas@email.com')->send($registerEmail);
    }
}
