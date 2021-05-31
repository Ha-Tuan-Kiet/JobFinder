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
        $request->validate([
            'avatar' => 'required|mimes:jpg,jpeg,png,xlx,xls,pdf|max:2048',
            'birthday'=>'nullable|date',
            'full_name'=>'required',
            'address'=>'required'
        ]);

            $profile = new Profile();

            $profile->full_name = $request->input('full_name');
            $profile->address = $request->input('address');
            $profile->birthday = $request->input('birthday');
            $fileName = $request->file('avatar')->getClientOriginalName();
            $filePath = $request->file('avatar')->storeAs('uploads', $fileName, 'public');
            //tham số thứ 3 là chỉ lưu trên disk 'public', tham số thứ 1:  lưu trong thư mục 'uploads' của disk 'public'
            $profile->avatar = '/storage/app/public/uploads/avatar' . $filePath;
            $profile->user_id = auth()->id();
            $profile->save();
            // $filepath='uploads/'+$fileName --> $profile->avatar = 'storage/uploads/tenfile --> đường dẫn hình trong thư mục public
            return redirect()->route('profiles.create');
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
        if ($profiles = DB::table('profiles')->where('user_id', '=',$id)->first()) {

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
        $profile =Profile::find($id);
        return View('profiles.edit',compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //Validate dữ liệu nhập
        $request->validate([
            'avatar' => 'required|mimes:jpg,jpeg,png,xlx,xls,pdf|max:2048',
            'birthday'=>'nullable|date',
            'full_name'=>'required',
            'address'=>'required'
        ]);
        if ($request->isMethod('POST')) {
            $profile = Profile::find($id);//eloquent
            $profile->full_name = $request->input('full_name');
            $profile->address = $request->input('address');
            $profile->birthday = $request->input('birthday');
            $fileName = $request->file('avatar')->getClientOriginalName();
            $filePath = $request->file('avatar')->storeAs('uploads', $fileName, 'public');
            //tham số thứ 3 là chỉ lưu trên disk 'public', tham số thứ 1:  lưu trong thư mục 'uploads' của disk 'public'
            $profile->avatar = '/storage/' . $filePath;
            // $filepath='uploads/'+$fileName --> $profile->avatar = 'storage/uploads/tenfile --> đường dẫn hình trong thư mục public
            $profile->save(); //lưu
            return back()//trả về trang trước đó
            ->with('success', 'Profile has updated.')//lưu thông báo kèm theo để hiển thị trên view
            ->with('file', $fileName);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profile=Profile::find($id);
        $profile->delete();
    }

//    public function profile_detail($id)
//    {
//        $profile =  DB::table('profiles')->where('id','=',$id)->get()->dd();
//        return view('profiles.edit',compact('profile'));
//    }

}
