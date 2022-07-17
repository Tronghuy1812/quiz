<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Image;
class UploadController extends Controller
{
    public function upload(Request $request)
    {
        $path=null;
        if($request->_token)
        {
            // dd($request->image->getClientOriginalName(),$request->image->extension(),$request->image->getRealPath());
            // Storage::disk('local')->put("uploads/".$request->image->getClientOriginalName(),'Contents');
            //   $path = $request->file('image')->store('uploads');
            $realFile= $request->image->getRealPath();
            $extFile = $request->image->extension();

            $imgFile = Image::make($realFile);
            $fileName=  time().'.'.$extFile; 
            $img = Image::make(storage_path('app/public/uploads/1634525654.jpg'))
                    
                    ->insert(public_path('img/download.png'),'bottom-right',10,10)
                    ->save(storage_path('app/public/uploads/test.jpg'));
     
            // $imgFile->text('© 2021 websolutionstuff.com', 100, 100, function($font) { 
            //     $font->size(50);  
            //     $font->color('#f1f1f1');  
            //     $font->align('center');  
            //     $font->valign('bottom');  
            // })->save(storage_path('app/public/uploads/').$fileName);  
        }

        $data= [];
        if(!empty($fileName))
        {
           $data['path'] = "storage/uploads/". $fileName;
        }
        return view('upload',$data);
    }
}
