<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class BlogCategoryController extends Controller
{
    public function AllBlogCategory(){
        $blog_category=BlogCategory::latest()->get();
        return view('admin.blog_category.blog_category_all',compact('blog_category'));
    }

    public function AddBlogCategory()
    {
        return view('admin.blog_category.add_blog_category');
    }

    public function StoreBlogCategory(Request $request){
            BlogCategory::insert([
                'blog_category' => $request->blog_category,
                'created_at' => Carbon::now(),

            ]); 
            $notification = array(
            'message' => 'Blog Category Inserted Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->route('all.blog.category')->with($notification);
    }

    public function EditBlogCategory($id)
    {
        $blogcategory = BlogCategory::findOrFail($id);
        return view('admin.blog_category.blog_category_edit',compact('blogcategory'));
    }

    public function UpdateBlogCategory(Request $request,$id)
    {
        BlogCategory::findOrFail($id)->update([
            'blog_category'=>$request->blog_category,
        ]);
        $notification = array(
            'message' => 'Blog Category Updated Successfully', 
            'alert-type' => 'success'
        );
        return redirect()->route('all.blog.category')->with($notification);
    }

    public function DeleteBlogCategory($id){
        BlogCategory::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Blog Category Deleted Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
