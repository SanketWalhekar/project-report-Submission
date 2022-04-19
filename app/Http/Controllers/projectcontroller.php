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
        $file=$req->file('pdf');
        $extension=$file->getClientOriginalExtension(); //getting extension
        if($req ->hasfile('pdf') && $extension=='pdf')
        {
            
            $filename=time().'.'.$extension;
            $file->move('upload/detail/', $filename);
            $detail->pdf=$filename;
            

        }
        else{
            return redirect()->back()->with('show','You uploaded Wrong File. You have allowed to upload PDF Files Only....!!!!');
        }
       
        $file1=$req->file('ppt');
        $extension1=$file1->getClientOriginalExtension();//getting extension
        
        if($req ->hasfile('ppt') && $extension1=='pptx')
        {
            
            $filename=Str::random(6). '.' . $extension1;
            $file1->move('upload/detail/', $filename);
            $detail->ppt=$filename;
    
        }
        else{
            return redirect()->back()->with('view','You uploaded Wrong File. You have allowed to upload PPT Files Only....!!!!');
            
        }
            

        


        
        
        $detail->github=$req->url;
        $detail->save();

         return redirect()->back()->with('status','Data Updated Succussfully...!!!!!!');
    }
    
    
}
            
        
        
        
            
        
        




    
    

