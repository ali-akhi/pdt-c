<?php

namespace App\Http\Controllers\Management\Content;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function index()
    {
        return view('dashboard.content.plan.index');
    }

    public function edite()
    {
        return view('dashboard.content.plan.opinion');
    }
}
