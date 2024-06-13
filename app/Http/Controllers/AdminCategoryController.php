<?php

namespace App\Http\Controllers;

use App\Models\Restaurant_categories;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class AdminCategoryController extends Controller
{
    public function index()
    {
        $categories = restaurant_categories::all();
        return view('admin.categorys', compact('categories'));
    }

    public function tableList()
    {
        return view('admin.listCategoryRestaurant');
    }

    public function addcategory()
    {
        return view('admin.addcategory');
    }

    public function create(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'category_name' => 'required|unique:restaurant_categories,category_name',
            'description' => 'required',
        ]);

        if ($request->hasFile('path')) {
            $file = $request->file('path');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets/restaurantCategory'), $fileName);
            $data['path'] = $fileName;
        }

        try {
            $category = Restaurant_categories::create($data);
            notify()->success('Berhasil Menambahkan Category ' . $category['category_name']);
            return redirect('/admin/categorys')->with('success', 'Restaurant Category created successfully');
        } catch (\Exception $e) {
            notify()->warning('Gagal Menambahkan');
            return redirect()->back()->withErrors(['error' => 'Failed to create category. ' . $e->getMessage()])->withInput();
        }
    }

    public function editCategory()
    {
        $categories = restaurant_categories::all();
        return view('admin.editcategory', compact('categories'));
    }


    public function formedit($id)
    {
        $category = Restaurant_categories::find($id);
        if ($category) {
            return view('admin.formeditcategory', compact('category'));
        } else {
            notify()->warning('Tidak Menemukan ' . $category['category_name']);
            return redirect()->back()->with('error', 'Category not found');
        }
    }

    public function update(Request $request, $id)
    {
        $category = Restaurant_categories::find($id);
        if ($category) {
            $data = $request->validate([
                'category_name' => 'required',
                'description' => 'required',
            ]);

            if ($request->hasFile('path')) {
                $file = $request->file('path');
                $fileName = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('assets/restaurantCategory'), $fileName);
                $data['path'] = $fileName;
                // Delete the old image
                if ($category->path) {
                    unlink(public_path('assets/restaurantCategory' . $category->path));
                }
            }

            $category->update($data);
            notify()->success('Berhasil Mengupdate Category ' . $category['category_name']);
            return redirect('admin/categorys')->with('success', 'Category updated successfully');
        } else {
            notify()->warning('Menghapus Gagal Update');
            return redirect()->back()->with('error', 'Category not found');
        }
    }

    public function destroy($id): RedirectResponse
    {
        $category = Restaurant_categories::find($id);
        if ($category) {
            $category->delete();
            $imagePath = public_path('assets/restaurantCategory/' . $category->path);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
            notify()->success('Berhasil Menghapus Category ' . $category['category_name']);
            return redirect()->back()->with('success', 'Category deleted successfully');
        } else {
            notify()->warning('Menghapus Gagal');
            return redirect()->back()->with('error', 'Category not found');
        }
    }
}
