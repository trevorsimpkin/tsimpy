<?php

namespace Tsimpy\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function postMail(Request $request)
    {
        $validate = $this->validate(
            $request,
            [
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required',
                'message' => 'required'
                //, 'phone => 'required'
            ]
        );
        \Mail::send('emails.contact', array(
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'user_message' => $request->get('message')
        ), function($message)
        {
            $message->from('testingaccount12345678@gmail.com');
            $message->to('trevorsimpkin@gmail.com', 'Admin')->subject('Someone Wants to Talk');
        });

        \Session::flash('message', ' Your message was sent! I will be getting back to you shortly.');
        $url = '/';
        return redirect($url);
    }
}
