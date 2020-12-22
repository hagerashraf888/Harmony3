<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Type;
use App\Models\Category;
use App\Models\Project;



class ProjectController extends Controller
{
    public function get_projects()
    {
        $projects = Project::all();
        $type = "Projects";

        return view('admin/projects',compact('projects','type'));
    }

    public function add_project_page()
    {
        $categories = Category::all();
        $types = Type::all();
        $type = "Project";
        return view('admin/addproject',compact('type','categories','types'));
    
    }

    public function add_project(Request $request)
    {
        $project = new Project();
        $project->name=$request->get('project_name');

        //image
        if ($request->hasFile('image')) 
        {
            $file = $request->file('image');
            
            $image_name = time().$file->getClientOriginalName();
            $image_path = 'images/project_images/';
            $file->move($image_path,$image_name);
            $image = $image_path.$image_name;
            $project->image = $image;
        }
        else
        {
            //error
        }

        $project->price=$request->get('project_price');
        $project->quantity=$request->get('project_quantity');
        $project->type_id=$request->get('type_id');
        $project->category_id=$request->get('category_id');

        $project->save();
        return redirect()->route('get_projects');
    }

    public function edit_project_page($id)
    {
        $categories = Category::all();
        $types = Type::all();
        $type = "Project";
        $project = Project::find($id);
        return view('admin/editproject',compact('type','project','categories','types'));
    }

    public function update_project(Request $request, $id)
    {
        $project = Project::find($id);

        $project->name=$request->get('project_name');

        //image
        if ($request->hasFile('image')) 
        {
            $file = $request->file('image');
            
            $image_name = time().$file->getClientOriginalName();
            $image_path = 'images/project_images/';
            $file->move($image_path,$image_name);
            $image = $image_path.$image_name;
            $project->image = $image;
        }
        else
        {
            //error
        }

        $project->price=$request->get('project_price');
        $project->quantity=$request->get('project_quantity');
        $project->type_id=$request->get('type_id');
        $project->category_id=$request->get('category_id');


        $project->save();
        return redirect()->route('get_projects');
        
    }

    public function delete_project($id)
    {
        $project = Project::find($id);
        //dd($brand);
        $project->delete();
        return back();
    }
}
