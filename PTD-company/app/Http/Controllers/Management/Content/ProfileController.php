<?php

namespace App\Http\Controllers\Management\Content;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('dashboard.content.profile.index');
    }

    public function create()
    {
        return view('dashboard.content.profile.new-profile');
    }
}
