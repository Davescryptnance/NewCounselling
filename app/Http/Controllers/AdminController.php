<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Message;

class AdminController extends Controller
{
    public function index() {

        return view('admin/dashboard');

    }

    public function message() {

        return view('admin/message');

    }

    public function sendMessage(Request $request) {

        
            $recipient = $request->input('recipient');
            $message = $request->input('message');
        
            // Validate recipient
            if (!in_array($recipient, ['client1', 'client2', 'client3'])) {
                return redirect('admin/dashboard')->withErrors(['Invalid recipient']);
            }
        
            // Validate message
            if (empty($message)) {
                return redirect('admin/dashboard')->withErrors(['Message cannot be empty']);
            }
        
            // Insert message into database
            DB::table('messages')->insert([
                'recipient' => $recipient,
                'message' => $message
            ]);
        
            // Send message
            // ...
        
            return redirect('admin/dashboard')->with('status', 'Message sent successfully');
        
        
    
    }

    public function view()
    {
        $messages = Message::all();

        return view('/admin/viewmessage', ['messages' => $messages]);
    }

    
    
    
}

