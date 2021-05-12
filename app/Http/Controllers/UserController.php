<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//            $users = DB::table('users')->get();
////        return View('user.userlist',['users'=>$users]);
//        return view('user.index');
        $users = DB::table('users')->get();
        return View('users.index',['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = DB::table('users');
//        $user->id = ($user->count()-1);
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->name = $request->input('name');


        $affected = DB::table('users')->insert(
            [
//                "id" => ($user->count()+1),
                "email" => $user->email,
                "password" => $user->password,
                "name" => $user->name,

            ]
        );
        return redirect('/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users =  DB::table('users')->find($id);
        return View('users.show',['users'=>$users]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return redirect('/users')->with('messages',"Cap nhanh cong");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
//        $users =  DB::table('users')->where('id','=',$id)->delete();
////        if(!$product)
////        {
////
////        }
//        return redirect()->route('users.index');

         User::where('id','=',$id)->delete();
    }
}
