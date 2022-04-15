<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\detail;
use Illuminate\Support\Str;

class projectcontroller extends Controller
{
    
    function addData(Request $req)

    {
        
        $detail=new detail;
        $detail->First_Name=$req->name1;
        $detail->Last_Name=$req->lastname;
        $detail->Email=$req->email;
        $detail->Project_Title=$req->Title;
        $detail->Introduction=$req->intro;
        if($req ->hasfile('pdf'))
        {
            $file=$req->file('pdf');
            $extension=$file->getClientOriginalExtension(); //getting extension
            $filename=time().'.'.$extension;
            $file->move('upload/detail/', $filename);
            $detail->pdf=$filename;
            

        }

        
        if($req ->hasfile('ppt'))
        {
            $file=$req->file('ppt');
            $extension1=$file->getClientOriginalExtension();//getting extension
            $filename=Str::random(4). '.' . $extension1;
            $file->move('upload/detail/', $filename);
            $detail->ppt=$filename;
    
        }
            

        


        
        
        $detail->github=$req->url;
        $detail->save();

         return redirect()->back()->with('status','Data Updated Succussfully');
    }
    
    
}
            
        
        
        
            
        
        




    
    

