<?php

namespace App\Http\Controllers\Management\Content;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReminderController extends Controller
{
    public function index()
    {
        return view('dashboard.content.reminder.index');
    }
}
