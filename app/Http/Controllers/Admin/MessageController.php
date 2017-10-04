<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Events\SendMessage;
use Cookie, Session, DB, Auth;

class MessageController extends Controller
{
    public function sendMessage(Request $request) {
    	
    	event(new SendMessage($request->time, $request->messages, $request->send_from, $request->send_to));
    }

    public function createFormChat(Request $request) {

    	$session_id = $request->session_id;

        //Save into cookie
        if (Cookie::get('chat_session', null) == null){
            Cookie::queue(Cookie::forever('chat_session', Session::getId()));
        }

        return view('message.chat_box', compact(['session_id']));
    }

    public function getHistoryMessage() {
    	$chat_session = '';
    	if (Auth::check()) 
    		$chat_session = 'user_'.Auth::user()->id;
    	else
        	$chat_session = Cookie::get('chat_session', Session::getId());

        $messages = DB::table('messages')->where('send_to', $chat_session)
                                        ->orWhere('send_from', $chat_session)
                                        ->orderBy('created_at', 'desc')
                                        ->paginate(10);
        $data = '';
        foreach ($messages as $key => $value) {
            $time = "sent on ".date("M j Y g:i a", (integer)$value->time);
            if ($value->send_from == $chat_session) 
                $data = '<li class="from" title="'.$time.'"><span>'.$value->message.'</span></li>'.$data;
            else 
                $data = '<li class="to" title="'.$time.'"><span>'.$value->message.'</span></li>'.$data;
        }

        return ['view'=>$data, 'next_url'=>$messages->nextPageUrl()];
    }

    public function getHistoryMessageAdmin($chat_session) {

        $messages = DB::table('messages')->where('send_to', $chat_session)
                                        ->orWhere('send_from', $chat_session)
                                        ->orderBy('created_at', 'desc')
                                        ->paginate(10);

        $data = '';
        foreach ($messages as $key => $value) {
            $time = "sent on ".date("M j Y g:i a", (integer)$value->time);
            if ($value->send_from == $chat_session) 
                $data = '<li class="to" title="'.$time.'"><span>'.$value->message.'</span></li>'.$data;
            else 
                $data = '<li class="from" title="'.$time.'"><span>'.$value->message.'</span></li>'.$data;
        }

        return ['view'=>$data, 'next_url'=>$messages->nextPageUrl()];
    }
}
