<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function index()
    {
        $active_messages = 'active';
        $title = 'Admin - Messages';
        $messages = Message::paginate(8);
        return view('backend.messages.index')
                    ->with('active_messages', $active_messages)
                    ->with('title', $title)
                    ->with('messages', $messages);
    }

    public function show($id)
    {
        $active_messages = 'active';
        $title = 'Admin - Messages';
        $message = Message::findOrFail($id);

        return view('backend.messages.show')
                    ->with('active_messages', $active_messages)
                    ->with('title', $title)
                    ->with('message', $message);
    }

    public function destroy($id)
    {
      $message = Message::findOrFail($id);
      $result = $message->delete();
      
      if($result) {
             session()->flash('success', 'Message deleted Successfully!');
        } else {
             session()->flash('error', 'Something went wrong.');
        }

        return redirect() -> route('backend.messages');
    }
    
}
