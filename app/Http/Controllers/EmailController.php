<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendEmailTest;
use App\Jobs\SendEmailJob;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function test_email(){
        $user['email'] = 'software3@daffodil-bd.com';
        dispatch(new SendEmailJob($user))->delay(now()->addSeconds(45));
        return "Done successfully";
    }
}
