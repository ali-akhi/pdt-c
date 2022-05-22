<?php

namespace App\Http\Controllers\Management\Content;

use App\Http\Controllers\Controller;
use App\Models\Content\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        $tag= Tag::all();
        return view('dashboard.content.tag-management', ['tags'=> $tag]);
    }

    public function fetch_data(Request $request)
    {
        if ($request->ajax()) {
            $data = Tag::orderby('id', 'desc')->get();
            echo json_encode($data);
        }
    }

    public function add_data(Request $request)
    {
        if ($request->ajax()) {
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'slug' => ['required', 'string', 'max:255'],
            ]);
            Tag::create($request->only('name', 'slug'));
            session()->flash('status', 'برچسب با موفقیت ایجاد شد!');
            return back();
        }
    }

    public function update_data(Request $request)
    {
        if ($request->ajax()) {
            $user= new Tag();
            $data = array(
                $request->column_name => $request->column_value,
            );
            $user->where('id', $request->id)
                ->update($data);
            echo '<div class="alert alert-success">فیلد مورد نظر بروز رسانی شد.</div>';
        }
    }

    public function delete_data(Request $request)
    {
        $user = new Tag();
        if ($request->ajax()) {
            $user->where('id', $request->id)
                ->delete();
            echo '<div class="alert alert-success">برچسب با موفقیت ثبت شد!</div>';
        }


    }
}
