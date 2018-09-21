<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserNotificationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notifications = auth()->user()->notifications->all();
        return view('notification.index')->with('notifications', $notifications);
    }
}
