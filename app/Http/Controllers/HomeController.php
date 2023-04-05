<?php

namespace App\Http\Controllers;

use Faker\Guesser\Name;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
class HomeController extends Controller
{
    public function index()
    {
        return view('v_welcome');
    }
    public function emailAction(Request $request)
    {    
        $request->validate([
            'email' => 'required|email',
            'subject' => 'required',
            'name' => 'required',
            'content' => 'required',
          ]);
  
          $data = [
            'subject' => $request->subject,
            'name' => $request->name,
            'email' => $request->email,
            'content' => $request->content
          ];
  
          Mail::send('email-template', $data, function($message) use ($data) {
            $message->to('syntetisgasnasional@gmail.com',$data['name'])
            ->subject($data['subject']);
          });
          // Mail::to("tykozidane2015@gmail.com")->send(new SendMail($data));
          return back()->with(['message' => 'Email successfully sent!']);
      }
            
    
}

