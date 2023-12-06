<?php

namespace App\Http\Controllers;


use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use ReCaptcha\ReCaptcha;

class ContactController extends Controller
{

    /**
     * @return Application|Factory|View
     */
    public function contact(){
        return view('contact');
    }

    /**
     * @throws ValidationException
     */
    public function contactPost(Request $request): \Illuminate\Http\RedirectResponse
    {
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

        //TODO: uncomment this when you want to use recaptcha
        $recaptcha = new ReCaptcha(env('GOOGLE_RECAPTCHA_SECRET'));

        $response = $recaptcha->setExpectedHostname('teomoda.com')
            ->setExpectedAction('homepage')
            ->setScoreThreshold(0.5)
            ->verify($request->input('g-recaptcha-response'));

//        $response = $recaptcha->verify($request->input('g-recaptcha-response'));

        if ($response->isSuccess()) {
            Mail::send('emails.email',
                $data,
                function ($message) {
                    $message->from('support@teomoda.com');
                    $message->to('dora@teomoda.com', 'Dora Kery')
                        ->subject('Message from teomoda.com website');
                });
        } else {
            return redirect()->back()->with('error', $response);
        }



        try
        {
            return back()->with('success', 'Thanks for contacting me, I will get back to you soon!');
        }
        catch (Exception $e) {
            return redirect()->back()->with('error','Something went wrong');
        }
    }
}
