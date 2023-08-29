<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class MessagesController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $unreadNotifications = $user->unreadNotifications;
        $user->unreadNotifications->markAsRead();
        return view('messages.index', compact('unreadNotifications'));
    }
}
