<?php

namespace App\Http\Controllers;
use App\Models\Image;
use Illuminate\Http\Request;

class ImageUploadController extends Controller
{
   public function imageupload(){
    return view('image_upload');

    }
    public function images(Request $request){
        $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg,gif|max:2048'
        ]);
    
        $imageName = time() . '.' . $request->image->extension();
      
        $imagePath = $request->image->storeAs('public/images', $imageName);

        // Save image information to the database
       
        $image = new Image();
        $image->name = $imageName;
        $image->path = $imagePath;
        $image->save();
        
        return back()
            ->withSuccess('You have successfully uploaded the image!')
            ->withImageName($imageName);
    }


}
