<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class homeController extends Controller
{

    public function __invoke()
    {
        //some codes goes here
    }

    public function home()
    {
        return view('main.landing.home');
    }

    public function about_us()
    {
        return view('main.landing.about');
    }

    public function contact()
    {
        return view('main.landing.contact');
    }

    public function faq()
    {
        return view('main.landing.faq');
    }

    public function terms()
    {
        return view('main.landing.terms');
    }

    public function blog()
    {
        return view('main.blog.index');
    }

    public function researchs()
    {
        return view('main.service.researchs');
    }

    public function scientists()
    {
        return view('main.service.scientists');
    }

    public function projects()
    {
        return view('main.service.projects');
    }

    public function appointment()
    {
        return view('main.service.appointment');
    }

    public function users()
    {
        return view('main.service.user-style');
    }

    public function lab()
    {
        return view('main.service.lab');
    }

    public function profile()
    {
        return view('main.blog.user-profile');
    }

    public function dashboard()
    {
        return view('dashboard.dashboard');
    }

    public function request()
    {
        return view('dashboard.notification.request-notification');
    }

    public function message()
    {
        return view('dashboard.notification.message-notification');
    }

    public function comments()
    {
        return view('dashboard.notification.comments-notification');
    }

    public function catManage()
    {
        return view('dashboard.content.category-management');
    }

    public function tag()
    {
        return view('dashboard.content.tag-management');
    }

    public function creat_news()
    {
        return view('dashboard.content.news.create');
    }

    public function news()
    {
        return view('dashboard.content.news.index');
    }

    public function projects_management()
    {
        return view('dashboard.content.projects.new');
    }

    public function referee_management()
    {
        return view('dashboard.actors.referee-management');
    }


}
