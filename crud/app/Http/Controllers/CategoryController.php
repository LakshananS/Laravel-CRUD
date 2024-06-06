<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('index', compact('categories'));
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:255|string',
            'quantity' => 'required|integer'
        ]);

        Category::create([
            'name' => $request->name,
            'description' => $request->description,
            'quantity' => $request->quantity,
        ]);

        return redirect('create')->with('status', 'Item Added Successfully');
    }

    public function edit(int $id){
        $category = Category::findOrFail($id);
        return view('edit', compact('category'));
    }

    public function update(Request $request, int $id) {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:255|string',
            'quantity' => 'required|integer'
        ]);

        $category = Category::findOrFail($id);
        $category->update([
            'name' => $request->name,
            'description' => $request->description,
            'quantity' => $request->quantity,
        ]);

        return redirect('categories')->with('status', 'Item Updated Successfully');
    }

    public function destroy(int $id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect('categories')->with('status', 'Item Deleted Successfully');
    }
}
