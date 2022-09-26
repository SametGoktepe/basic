<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\MultiImage;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;  
use Illuminate\Support\Carbon;

class AboutController extends Controller
{
    public function AboutPage()
    {
        $aboutpage =  About::find(1);
        return view('admin.about_page.about_page_all',compact('aboutpage'));
    }

    public function UpdateAbout(Request $request)
    {
        $about_id = $request->id;

        if ($request->file('about_image')) {
            $image = $request->file('about_images');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(638,852)->save('upload/about_images/'.$name_gen);
            $save_url='upload/about_images/'.$name_gen;

            About::findOrFail($about_id)->update([
                'title'=>$request->title,
                'short_title'=>$request->short_title,
                'short_description'=>$request->short_description,
                'long_description'=>$request->long_description,
                'about_image'=>$save_url,
                
            ]);
            $notification = array(
                'message'=>'About Page Update With Image Successfly',
                'alert-type'=>'success'
            );

            return redirect()->back()->with($notification);

        }
        else {
            About::findOrFail($about_id)->update([
                'title'=>$request->title,
                'short_title'=>$request->short_title,
                'short_description'=>$request->short_description,
                'long_description'=>$request->long_description,
                
            ]);
            $notification = array(
                'message'=>'About Page Update Without Image Successfly',
                'alert-type'=>'info'
            );

            return redirect()->back()->with($notification);
        }
        
    }

    public function HomeAbout(){
        $aboutpage = About::find(1); 
        return view('frontend.about_page',compact('aboutpage'));
    }
    
    public function AboutMultiImages(){
        return view('admin.about_page.multimages');
    }

    public function StoreMultiImage(Request $request){
        $image = $request->file('multi_image');
        foreach ($image as $multi_image) {
            $name_gen = hexdec(uniqid()).'.'.$multi_image->getClientOriginalExtension();
            Image::make($multi_image)->resize(220,220)->save('upload/multi/'.$name_gen);
            $save_url='upload/multi/'.$name_gen;

            MultiImage::insert([
                'multi_image'=>$save_url,
                'created_at'=> Carbon::now()
                
            ]);
        }
            $notification = array(
                'message'=>'Multiple Image Insert Successfly',
                'alert-type'=>'success'
            );
            return redirect()->back()->with($notification);
    }

    public function AllMultiImages(){
        $allMultiImage = MultiImage::all();
        return view('admin.about_page.all_multi_image',compact('allMultiImage'));
    }

    public function EditMultiImage($id){
        $multiImage = MultiImage::findOrFail($id);
        return view('admin.about_page.edit_multi_image',compact('multiImage'));
    }

    public function UpdateMultiImage(Request $request){
        $multi_image_id = $request->id;

        if ($request->file('multi_image')) {
            $image = $request->file('multi_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(220,220)->save('upload/multi/'.$name_gen);
            $save_url='upload/multi/'.$name_gen;

            MultiImage::findOrFail($multi_image_id)->update([
                'multi_image'=>$save_url,
                
            ]);
            $notification = array(
                'message'=>'Image Update Successfly',
                'alert-type'=>'success'
            );

            return redirect()->route('all.multi.images')->with($notification);
        }
    }

    public function DeleteMultiImage($id){
        $multi=MultiImage::findOrFail($id);
        $img=$multi->multi_image;
        unlink($img);

        MultiImage::findOrFail($id)->delete();

        $notification = array(
            'message'=>'Image Delete Successfully',
            'alert-type'=>'success'
        );

        return redirect()->back()->with($notification);
    }
}
