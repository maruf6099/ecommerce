<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    public function index(){
        return view('frontend.dashboard.profile');
    }
    public function updateProfile(Request $request){
        //dd($request->all());
        $request->validate([
            'name'=>['required','max:30'],
            'email'=>['required','email','unique:users,email,'.Auth::user()->id],
            'image'=>['image','max:2048']
        ]);

        $user=Auth::user();

        if($request->file('image')){
            $file=$request->file('image');
            @unlink(public_path('upload/user_images/'.$user->image));
            $filename=date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('uploads/user_images'),$filename);
            $user['image']=$filename;
            
        }

        
        $user->name=$request->name;
        $user->email=$request->email;
        $user->save();
        toastr()->success('Data has been updated successfully!', 'Congrats');

        return redirect()->back();
    }
    public function updatePassword(Request $request){
        //dd($request->all());
        $request->validate([
            'current_password'=>['required','current_password'],
            'password'=>['required','confirmed','min:4']
        ]);

        $request->user()->update([
            'password'=>bcrypt($request->password)
        ]);
        toastr()->success('Password has been changed successfully!', 'Congrats');

         return redirect()->back();
    }
}
