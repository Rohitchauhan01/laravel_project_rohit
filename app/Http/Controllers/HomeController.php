<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Userdetail;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    //   User
    public function index()
    {
        return view('user.home');
    }

    public function userprofile()
    {
        $url = url('/user/profile');
        $title = "Profile Details";
        $data = compact('url', 'title');
        return view('user.addprofile')->with($data);
    }

    public function createprofile(Request $request)
    {
        $request->validate([
            'fistname' => 'required',
            'lastname' => 'required',
            'phone' => ['required', 'min:10'],
            'gender' => 'required',

        ]);
        $user = new Userdetail();
        $user->fistname = $request->fistname;
        $user->lastname = $request->lastname;
        $user->phone = $request->phone;
        $user->gender = $request->gender;
        $user->status = $request->status;
        $user->address = $request->address;
        $user->city = $request->city;
        $user->state = $request->state;
        $user->zip = $request->zip;
        $result = $user->save();
        if ($result) {
            return back()->with('Success', 'User Data Registered Successfully.');
        } else {
            return back()->with('Fail', 'User Data Not Found Please Try Again.');
        }
        return view('user.addprofile');
    }

    public function userdetail()
    {
        $list = Userdetail::all();
        $data = compact('list');
        return view('user.userdetail')->with($data);
    }

    public function useredit($id)
    {
        $list = Userdetail::find($id);
        if (is_null($list)) {            
            return view('user.userdetail');
        } else {
            $url = url('/user/update') . "/" . $id;
            $title = "Update Details";
            $data = compact('list', 'url', 'title');
            return view('user.addprofile')->with($data);
        }
    }


    public function userupdate($id, Request $request)
    {
        $user = Userdetail::find($id);
        $user->fistname = $request->fistname;
        $user->lastname = $request->lastname;
        $user->phone = $request->phone;
        $user->gender = $request->gender;
        $user->status = $request->status;
        $user->address = $request->address;
        $user->city = $request->city;
        $user->state = $request->state;
        $user->zip = $request->zip;
        $result = $user->save();
        if ($result) {
            return redirect('/user/detail')->with('Success', 'User Data Successfully Update.');
        } else {
            return redirect('/user/detail')->with('Fail', 'User Data Not Update Please Try Again.');
        }
        return view('user.userdetail');
    }
    public function userdelete($id)
    {
        $list = Userdetail::find($id);
        if (!is_null($list)) {
            $list->delete();
        }
        return redirect('/user/detail');
    }

    public function usercontact()
    {
        return view('user.usercontact');
    }
    //   User End
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        $data = User::all();
        $data = compact('data');
        return view('admin.adminHome')->with($data);
    }

    public function adminprofile()
    {
        return view('admin.profile');
    }

    public function adminadd()
    {
        return view('admin.addadmin');
    }

    public function adminsave(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $admin = new User();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = Hash::make($request['password']);
        $admin->type = $request->type;
        $result = $admin->save();
        if ($result) {
            return back()->with('Success', 'Admin Data Registered Successfully.');
        } else {
            return back()->with('Fail', 'Admin Data Not Found Please Try Again.');
        }
        return view('admin.addadmin');
    }

    public function admindelete($id)
    {
        $list = User::find($id);
        if (!is_null($list)) {
            $list->delete();
        }
        return redirect('/admin/home');
    }


    public function adminblank()
    {
        return view('admin.blank');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
}
