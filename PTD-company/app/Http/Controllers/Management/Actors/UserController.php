<?php

namespace App\Http\Controllers\Management\Actors;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
// use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('dashboard.actors.user.index', compact('users'));
    }

    public function create()
    {
        return view('dashboard.actors.user.new-user');
    }

    public function store(CreateUserRequest $request)
    {
        $data = $request->validated();
        if ($request->ajax()) {
            $users = User::create($data);
            return response()->json($users);

            // // return response()->json($data);
            // return redirect()->route('user.index')->with('success','کاربر با موفقیت ایجاد شد!');
        }
    }

    public function destroy($id)
    {
        User::find($id)->delete($id);

        return response()->json([
            'success' => 'No new orders!',
        ]);
    }

    public function edite($id)
    {
        $user = User::find($id);
        return view('dashboard.actors.user.update-user', compact('user'));
    }

    public function show(Request $request)
    {
        if ($request->ajax()) {
            $data = User::orderby('id', 'desc')->get();
            echo json_encode($data);
        }
        // $users = User::all();
        // return response()->json([
        //     'users' => $users,
        // ]);
    }

    public function update(UpdateUserRequest $request, $id)
    {
        $data = $request->validated();
        $user = User::find($id);
        $user->update($data);
        return redirect()->route('user.index')->with('success', 'کاربر با موفقیت ویرایش شد!');
    }
}
