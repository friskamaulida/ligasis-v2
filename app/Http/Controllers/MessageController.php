<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
   public function store(Request $request)
    {
        $validated = $request->validate([
            'first-name' => 'required|max:100',
            'last-name' => 'required|max:100',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Message::create([
            'first_name' => $validated['first-name'],
            'last_name' => $validated['last-name'],
            'email' => $validated['email'],
            'message' => $validated['message'],
        ]);

        return redirect()->back()->with('success', 'Pesan Anda telah berhasil dikirim.');
    }
}
