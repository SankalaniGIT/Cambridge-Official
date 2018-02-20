<?php

namespace App\Http\Controllers\Messages;

use App\Messages\Messages;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MessagesController extends Controller
{
    //
    protected $requestedView = false;

    public function __construct()
    {
    }

    public function index(){

    }

    public function viewMessage($id){
        $msg = Messages::find($id);

        $senderName = $msg->name;

        $senderEmail = $msg->email;

        $subject = $msg->subject;

        $content = $msg->message;

        $ip = $msg->IP_address;

        $browser = $msg->browser_type;




        //saving read status true
        $msg->read = 1;

        if($msg->save()){
            $this->requestedView = true;
            return view('messages.messages',['requestedView' =>$this->requestedView,'senderName' => $senderName, 'senderEmail' => $senderEmail,'subject' => $subject,'content' => $content,'ip' => $ip,'browser' => $browser,'success' => '','bgColor' => '']);

        }else{
            $this->requestedView = false;
            return view('messages.messages',['requestedView' =>$this->requestedView,'success' => '','bgColor' => '']);

        }





    }

    public function deleteMessage($id){
        $msg = Messages::find($id);

        if($msg->delete()){
            $this->requestedView = false;
            return view('messages.messages',['requestedView' =>$this->requestedView,'success' => 'Message has been deleted','bgColor' => 'green']);
        }else{
            return view('messages.messages',['requestedView' =>$this->requestedView,'success' => 'Error Occured while deleting','bgColor' => 'red']);
        }
    }
}
