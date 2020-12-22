<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Type;
use App\Models\Category;

class CategoryController extends Controller
{
    public function get_categories()
    {
        $categories = Category::all();
        $type = "Categories";

        return view('admin/categories',compact('categories','type'));
    }

    public function add_category_page()
    {
        $types = Type::all();
        $type = "Category";
        return view('admin/addcategory',compact('type','types'));
    
    }

    public function add_category(Request $request)
    {
        $category = new Category();
        $category->name=$request->get('category_name');

        //image
        if ($request->hasFile('image')) 
        {
            $file = $request->file('image');
            
            $image_name = time().$file->getClientOriginalName();
            $image_path = 'images/svg/';
            $file->move($image_path,$image_name);
            $image = $image_path.$image_name;
            $category->image = $image;
        }
        else
        {
            //error
        }

        $category->type_id=$request->get('type_id');

        $category->save();
        return redirect()->route('get_categories');
    }

    public function edit_category_page($id)
    {
        $types = Type::all();
        $type = "Category";
        $category = Category::find($id);
        return view('admin/editcategory',compact('type','category','types'));
    }

    public function update_category(Request $request, $id)
    {
        $category = Category::find($id);

        $category->name=$request->get('category_name');

        //image
        if ($request->hasFile('image')) 
        {
            $file = $request->file('image');
            
            $image_name = time().$file->getClientOriginalName();
            $image_path = 'images/svg/';
            $file->move($image_path,$image_name);
            $image = $image_path.$image_name;
            $category->image = $image;
        }
        else
        {
            //error
        }

        $category->type_id=$request->get('type_id');


        $category->save();
        return redirect()->route('get_categories');
        
    }

    public function delete_category($id)
    {
        $category = Category::find($id);
        //dd($brand);
        $category->delete();
        return back();
    }
    
}
