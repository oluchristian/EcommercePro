<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function view_category ()
    {
        $data = Category::all();
        return view('Admin.category', compact('data'));
    }

    public function add_category (Request $request)
    {
         $data = new Category;
         $data->category_name = $request->category;
         $data->save();

        return redirect()->back()->with('message', 'Categroy Added Successfully');
    }

    public function delete_category ($id)
    {
        $data = Category::find($id);
        $data->delete();

        return redirect()->back()->with('message', 'Categroy Deleted Successfully');
    }

    public function view_product ()
    {
        
        return view('admin.product');
    }

    public function add_product (Request $request)
    {

    }
}
