<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Project;

class MainController extends Controller
{
    public function projects()
    {
    	$category_rooms = Category::where('type_id',1)->get();
    	$category_types = Category::where('type_id',2)->get();

    	//dd($category_rooms);
    	return view('pages/projects',compact('category_rooms','category_types'));
    }

    public function display($id)
    {
    	$category_rooms = Category::where('type_id',1)->get();
    	$category_types = Category::where('type_id',2)->get();
    	$dinning_rooms = Project::where('category_id',$id)->get();

    	$category = Category::where('id',$id)->first();
    	if($category->type_id == 1)
    	{
    		$image = 'images/header2.jpg';
    	}
    	elseif($category->type_id == 2)
    	{
    		$image = 'images/header1.jpg';
    	}

    	//dd($category_rooms);
    	return view('pages/rooms/dinning',compact('dinning_rooms','category_rooms','category_types','image','category'));
    }


}
