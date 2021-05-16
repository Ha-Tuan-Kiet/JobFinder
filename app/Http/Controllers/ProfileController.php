<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile = DB::table('profiles')->get();
        return View('profiles.show',['profile'=>$profile]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('profiles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'avatar' => 'required|mimes:jpg,jpeg,png,xlx,xls,pdf|max:2048',
            'birthday'=>'nullable|date',
            'full_name'=>'required',
            'address'=>'required'
        ]);

        if ($request->file()) {
            $profile = DB::table('profiles');
            $profile->user_id = $request->input('user_id');
            $profile->full_name = $request->input('full_name');
            $profile->address = $request->input('address');
            $profile->birthday = $request->input('birthday');

            $fileName = $request->file('avatar')->getClientOriginalName();
            $filePath = $request->file('avatar')->storeAs('uploads', $fileName, 'public');
            //tham số thứ 3 là chỉ lưu trên disk 'public', tham số thứ 1:  lưu trong thư mục 'uploads' của disk 'public'
            $profile->avatar = '/storage/app/public/' . $filePath;
            // $filepath='uploads/'+$fileName --> $profile->avatar = 'storage/uploads/tenfile --> đường dẫn hình trong thư mục public
            DB::table('profiles')
                ->insert([
                    'user_id' =>  $profile->user_id,
                    'full_name' =>  $profile->full_name,
                    'address' =>  $profile->address,
                    'birthday' =>  $profile->birthday,
                    'avatar' => $profile->avatar
                ]);
//        Session::put('message', 'Thêm profile thành công');
            return redirect('/users');
        }
//        Session::put('message', 'Thêm profile thành công');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user =  DB::table('users')->where('id', $id)->first();
        if ($profiles = DB::table('profiles')->where('id', '=',$id)->first()) {

            return view('profiles.show', ['profiles' => $profiles],['user' => $user]);
        } else if ($profiles = DB::table('profiles')) {
            return View('profiles.create',['id'=>$id])->with('messages','Done');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profile =  DB::table('profiles')->where('id','=',$id)->first();
        return View('profiles.edit',['profile'=>$profile]);
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
        //Validate dữ liệu nhập
        $validate = $request->validate([
            'avatar' => 'required|mimes:jpg,jpeg,png,xlx,xls,pdf|max:2048',
            'birthday'=>'nullable|date',
            'full_name'=>'required',
            'address'=>'required'
        ]);
        if ($request->file()) {
            $profile = Profile::find($id);//eloquent
//            $profile = DB::table('profiles')->find($id);
            $profile->full_name = $request->input('full_name');
            $profile->address = $request->input('address');
            $profile->birthday = $request->input('birthday');
            $fileName = $request->file('avatar')->getClientOriginalName();
            $filePath = $request->file('avatar')->storeAs('uploads', $fileName, 'public');
            //tham số thứ 3 là chỉ lưu trên disk 'public', tham số thứ 1:  lưu trong thư mục 'uploads' của disk 'public'
            $profile->avatar = '/storage/' . $filePath;
            // $filepath='uploads/'+$fileName --> $profile->avatar = 'storage/uploads/tenfile --> đường dẫn hình trong thư mục public


//


            $profile->save(); //lưu
            return back()//trả về trang trước đó
            ->with('success', 'Profile has updated.')//lưu thông báo kèm theo để hiển thị trên view
            ->with('file', $fileName);
//            $affected = DB::table('profiles')
//                ->where('id', $id)
//                ->update(['full_name' =>  $profile->full_name,
//                    'address' =>  $profile->address,
//                    'birthday' =>  $profile->birthday
//                ]);
//            return redirect('/users');
        }
        return back() //trả về trang trước đó
        ->with('error', 'Profile not updated.'); //lưu thông báo kèm theo để hiển thị trên view
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }

    public function profile_detail($id)
    {
        $profile =  DB::table('profiles')->where('id','=',$id)->get()->dd();
        return view('profiles.edit',compact('profile'));
    }

}
