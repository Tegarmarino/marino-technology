<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Validate form
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'subject'=>'required',
            'message'=>'required',
        ]);

        if($this->isOnline())
        {
            $mail_data = [
                'recipient'=> $request->email,
                'fromEmail'=> $request->email,
                'fromName'=> $request->name,
                'subject'=> $request->subject,
                'body'=> $request->message,
            ];

            
            Mail::send('main.contact.email-template', $mail_data, function($message) use ($mail_data) {
                $message->to($mail_data['recipient'])
                        ->from($mail_data['fromEmail'],$mail_data['fromName'])
                        ->subject($mail_data['subject']);
            });

            return redirect()->back()->with('success', 'Email terkirim');
        }
        else
        {
            return redirect()->back()->withInput()->with('error', 'Perikas koneksi internet anda');
        }
    }

    public function isOnline($site="https://youtube.com/")
    {
        if(@fopen($site, "r"))
        {
            return true;
        }
        else 
        {
            return false;
        }
    }
}

