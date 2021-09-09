<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class adminController extends Controller
{
    public function count()
    {
        $messages = Message::all();
        $count = Message::where('status', 0)->count();

        return view('index', compact('messages', 'count'));
    }
}
