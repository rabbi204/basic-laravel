<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{

    // constructor
    public function __construct()
    {
        $this -> middleware('auth');
    }

    //show categroy page
    public function allCategory()
    {
        $categories = Category::latest() -> paginate(5);
        $trashCategory = Category::onlyTrashed() -> latest()-> paginate();
        return view('admin.category.index',compact('categories','trashCategory'));
    }

    // add category
    public function addCategory(Request $request)
    {
        $validate = $request -> validate([
            'category_name' => 'required|unique:categories|max:255'
        ],
        [
            'category_name.required' => 'Please Input Category Name',
            'category_name.max' => 'Category less then 250 Chars'
        ]);

        Category::create([
            'category_name' => $request -> category_name,
            'user_id'       => Auth::user() -> id,
            'created_at'    => Carbon::now()
        ]);

        return redirect() -> route('all.category') -> with('success', "Category Added Successfully");

    }
    // edit category
    public function editCategory($id)
    {
        $categories = Category::find($id);
        return view('admin.category.edit', compact('categories'));
    }
    // update category
    public function updateCategory(Request $request, $id)
    {
        $category_update = Category::find($id) -> update([
            'category_name'  => $request -> category_name,
            'user_id'       =>  Auth::user() -> id
        ]);
        return redirect() -> route('all.category') -> with('success', 'Category Updated Successful');
    }
    // soft delete Category
    public function softDelete($id)
    {
        $delete = Category::find($id) -> delete();
        return redirect() -> back() -> with('success','Category soft Delete successfully');
    }
    //restore Category
    public function restoreCategory($id)
    {
        $delete = Category::withTrashed()-> find($id) -> restore();
        return redirect() -> back() -> with('success','Category restore successfully');
    }
    // permanently category delete
    public function permanentlyDeleteCategory($id)
    {
        $delete = Category::onlyTrashed() -> find($id) -> forceDelete();
        return redirect() -> back() -> with('success','Category Deleted Permanently');
    }
}
