<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Mail;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function sendEmail(Request $request)
    {

        $data=[
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'message'=>$request->message,
        ];
        Mail::to('designerartx@gmail.com')->send(new ContactMail($data));
        return back()->with('message_sent','Message has been sent successfully!');

//        return back()->with(['message' => 'Email successfully sent!']);
    }

}
