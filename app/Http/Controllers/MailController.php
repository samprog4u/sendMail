<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;
use Illuminate\Support\Facades\Auth;


class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       
        // $email = Emaill::all();
        return view('admin.mail.index');
    }

    /**
     * Show the form for sending email
     *
     * @return \Illuminate\Http\Response
     */
    

    // public function sendMail()
    // {
    //     // Mail::send(['text' => 'mail'],['name','Titi'],function($message){
    //     //     $message->receiver('titihanifah25@gmail.com','To Titi')->subject('Test Email');
    //     //     $message->sender('titihanifah25@gmail.com','Titi');
    //     // });
    // //     Mail::send('emails.welcome', ['key' => 'value'], function($message)
    // //     {
    // //         $message->to('foo@example.com', 'John Smith')->subject('Welcome!');
    // //     });
    // // }
    //     $mail=[
    //         'title'=>'titihanifah25@gmail.com mail',
    //         'body' => 'The body of your message',
    //         'button' => 'Submit',
    //     ];

    //     $receiverAddress = 'abdurrahma.trimanto@mail.ugm.ac.id';
    //     Mail::to($receiverAddress)->send($content);
    //     dd('mail send successfully');
    // }
}

