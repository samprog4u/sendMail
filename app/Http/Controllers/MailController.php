<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Session;
use Illuminate\Support\Facades\Auth;
use App\Mail\DefaultMail;

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
       
        $mail = Mail::all();
        return view('admin.mail.index')->with('mail',$mail);
    }

    /**
     * Show the form for sending email
     *
     * @return \Illuminate\Http\Response
     */

    public function send(Request $request){

        $name    = "yourname"; 
        $mail     = "abdurrahman.trimanto@mail.ugm.ac.id"; 
        $data = array(
                    'name'    => $name, 
                    'email'   => "titihanifah25@gmail.com", 
                    'subject' => "subject", 
                    'message'   => "message",
                    );

        $to_mail = $data['email']; //penerima
        $subject = $data['subject'];
        // send email primary
        Mail::to($data['email'])->send(new DefaultMail());

        // Mail::send('mails.toclient', $data, function($kirim) use ($name, $mail, $subject, $to_mail) // pakai anoymous function  
        // {
        //     $kirim->from($mail, $name);
        //     $kirim->to($to_mail)->subject($subject);
        // });

        $msg = "Success! Data has been send";

        die($msg);
    }
    

    public function sendMail()
    {
        // Mail::send(['text' => 'mail'],['name','Titi'],function($message){
        //     $message->receiver('titihanifah25@gmail.com','To Titi')->subject('Test Email');
        //     $message->sender('titihanifah25@gmail.com','Titi');
        // });
    //     Mail::send('emails.welcome', ['key' => 'value'], function($message)
    //     {
    //         $message->to('foo@example.com', 'John Smith')->subject('Welcome!');
    //     });
    // }
        // $mail=[
        //     'title'=>'titihanifah25@gmail.com mail',
        //     'body' => 'The body of your message',
        //     'button' => 'Submit',
        // ];

        // $receiverAddress = 'abdurrahma.trimanto@mail.ugm.ac.id';
        // Mail::to($receiverAddress)->send($content);
        // dd('mail send successfully');
    }

//     public function send()
//     {

//     $this->validate($request, [
//             'subject' => 'required',
//             'receiver' =>'required',
//             'body' => 'required',

//         ]);
//     $mail = new Mail;
//     $mail->subject = $request->subject;
//     $mail->receiver = $request->receiver;
//     $mail->body = $request->body;

//     // Variable data ini yang berupa array ini akan bisa diakses di dalam "view".
//     // $data = ['prize' => 'Peke', 'total' => 3 ];
 
//     // // "emails.hello" adalah nama view.
//     // Mail::send('admin.mail.index', $data, function ($mail)
//     // {
//     //   // Email dikirimkan ke address "momo@deviluke.com" 
//     //   // dengan nama penerima "Momo Velia Deviluke"
//     //   $mail->to('titihanifah25@gmail.com', 'Momo Velia Deviluke');
 
//     //   // Copy carbon dikirimkan ke address "haruna@sairenji" 
//     //   // dengan nama penerima "Haruna Sairenji"
//     //   $mail->cc('titi.hanifah@mail.ugm.ac.id', 'Haruna Sairenji');
 
//     //   $mail->subject('Hello World!');
//     // };
// 

// }

}

