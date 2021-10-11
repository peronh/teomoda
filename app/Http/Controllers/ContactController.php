<?php

namespace App\Http\Controllers;


use Exception;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function contact(){
        return view('contact');
    }

    public function contactPost(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'comment' => 'required'
        ]);

        $data = [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'comment' => $request->get('comment'),
            'subject' => $request->get('subject')
        ];

        Mail::send('emails.email',
            $data,
            function ($message) {
                $message->from('info@webron.hu');
                $message->to('info@webron.hu', 'Your Name')
                        ->subject('Your Website Contact Form');
            });

        try
        {
            return back()->with('success', 'Thanks for contacting me, I will get back to you soon!');
        }
        catch (Exception $e) {
            return redirect()->back()->with('error','Something went wrong');
        }
    }
}
