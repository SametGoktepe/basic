<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Footer;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;


class FooterController extends Controller
{
    public function FooterSetup()
    {
        $allfooter =  Footer::find(1);
        return view('admin.footer.footer_all',compact('allfooter'));
    }

    public function UpdateFooter(Request $request){
        $footer_id=$request->id;
        Footer::findOrFail($footer_id)->update([
            'number'=>$request->number,
            'short_description'=> $request->short_description,
            'Adress'=>$request->Adress,
            'email'=>$request->email,
            'github'=>$request->github,
            'twitter'=>$request->twitter,
            'linkedin'=>$request->linkedin,
            'instagram'=>$request->instagram,
            'created_at'=>Carbon::now(),
        ]);
        $notification = array(
            'message'=>'Footer Update is Successfly',
            'alert-type'=>'success'
        );

        return redirect()->back()->with($notification);
    }
}
