<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Requests\RequestCategory;
use App\Models\Category;
use http\Client\Request;
use Illuminate\Routing\Controller;

class AdminCategoryController extends Controller
{
    public function index()
    {
        $categories = Category::select('id','c_name','c_title_seo','c_active')->get();
        $viewData = [
            'categories' => $categories
        ];
        return view('admin::category.index',$viewData);
    }
    public function create()
    {
        return view('admin::category.create');
    }
    public function store(RequestCategory $requestCategory)
    {
        $this->insertOrUpdate($requestCategory);
        return redirect()->back();
    }
    public function edit($id){
        $category = Category::find($id);
        return view('admin::category.update',compact('category'));

    }
    public function update(RequestCategory $requestCategory,$id){
        $this->insertOrUpdate($requestCategory,$id);
        return redirect()->back();

    }
    public function insertOrUpdate(RequestCategory $requestCategory,$id = ''){
        $category = new Category();
        if ($id){
            $category = Category::find($id);
        }
        $category->c_name = $requestCategory->name;
        $category->c_slug = str_slug($requestCategory->name);
        $category->c_title_seo = $requestCategory->title ? $requestCategory->title : $requestCategory->name;
        $category->c_description = $requestCategory->description;

        $category->save();

    }
    public function action($action,$id){
        $messenge='';
        if($action){
            $category = Category::find($id);
            switch ($action)
            {
                case 'delete':
                    $category->delete();
                    $messenge = "Xóa thành công";
                   break;
                case 'status':
                    $category->c_active = $category->c_active==1 ? 0 : 1;
                    $category->save();
                    $messenge = "Cập nhật thành công";
                    break;
            }
        }
        return redirect()->back()->with('success',$messenge);
    }
}
