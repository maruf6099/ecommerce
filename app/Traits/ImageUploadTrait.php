<?php


namespace App\Traits;
use Illuminate\http\Request;

trait ImageUploadTrait{


    public function uploadImage(Request $request,$inputName,$path){


        // if($request->file('$inputName')){
        //     $file=$request->{'$inputName'};
        //     //@unlink(public_path('upload/user_images/'.$user->image));
        //     $filename=date('YmdHi').$file->getClientOriginalName();
        //     $file->move(public_path($path),$filename);
        //     //$user['image']=$filename;
        //     return $path.'/'.$filename;

            
        // }
        if($request->hasFile($inputName)){
            $image=$request->{$inputName};
            // $text=$image->getClientOriginalExtension()
            // $imageName='media'.date('YmdHi').'-'.$text;
            $imageName=date('YmdHi').'-'.$image->getClientOriginalName();;
            //$imageName=rand().'-'.$image->getClientOriginalName();

            $image->move(public_path($path),$imageName);

            return $path.'/'.$imageName;

        }
    }
}