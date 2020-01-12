<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Requests\RequestProduct;
use App\Models\Category;
use App\Models\gallery;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class AdminProductController extends Controller
{

    public function index(Request $request)
    {
        $products = Product::with('category:id,c_name');
        if($request->name) $products->where('pro_name','like','%'.$request->name.'%');
        if($request->cate) $products->where('pro_category_id',$request->cate);
        $products = $products->orderByDesc('id')->paginate(10);
        $categories = $this->getCategories();
        $viewData = [
            'products' => $products,
            'categories'=>$categories
        ];
        return view('admin::product.index',$viewData);
    }
    public function create()
    {
        $categories  = Category::all();

        return view('admin::product.create',compact('categories'));
    }

    public function store(RequestProduct $requestProduct)
    {
        $this->insertOrUpdate($requestProduct);
        return redirect()->back()->with('success',"Lưu sản phẩm thành công");
    }
    public function getCategories(){
        return Category::all();
    }
    public function insertOrUpdate($requestProduct,$id=''){
        $product = new Product();
        if($id){
            $product = Product::find($id);
        }
        $product->pro_name = $requestProduct->pro_name;
        $product->pro_slug = str_slug($requestProduct->pro_name);
        $product->pro_description = $requestProduct->pro_description;

        $product->pro_content = $requestProduct->pro_content;
        $product->pro_title_seo = $requestProduct->pro_title_seo ? $requestProduct->pro_title_seo :  $requestProduct->pro_name;
        $product->pro_description_seo = $requestProduct->pro_description_seo;
        $product->pro_category_id = $requestProduct->pro_category_id;
        $product->pro_price = $requestProduct->pro_price;
        $product->pro_sale = $requestProduct->pro_sale;
        $product->pro_number = $requestProduct->pro_number;

        //dd($requestProduct->all());
        if($requestProduct->hasFile('avatar')){
            $file = upload_image('avatar');
            if (isset($file['name'])){
                $product->pro_avatar = $file['name'];
            }
        }

        $product->save();
    }
    public function edit($id){
        $product = Product::find($id);
        $categories = Category::all();
        return view('admin::product.update',compact('product','categories'));

    }
    public function update(RequestProduct $requestProduct,$id){
        $this->insertOrUpdate($requestProduct,$id);
        return redirect()->back()->with('success',"Cập nhật sản phẩm thành công");
    }
    public function action($action,$id){
        $message='';
        if($action){
            $product = Product::find($id);
            switch ($action)
            {
                case 'delete':
                    $product->delete();
                    $message = "Xóa sản phẩm thành công";
                    break;
                case 'status':
                    $product->pro_active = $product->pro_active==1 ? 0 : 1;
                    $product->save();
                    $message = "Cập nhật trạng thái thành công";
                    break;
                case 'hot':
                    $product->pro_hot = $product->pro_hot==1 ? 0 : 1;
                    $product->save();
                    $message = "Cập nhật sản phẩm hot thành công";
                    break;
            }
        }
        return redirect()->back()->with('success',$message);
    }
    public function createImage(){
        $products = Product::select('id','pro_name')->take(10)->get();
        $viewData = [
          'products'  =>$products
        ];
        return view('admin::product.image',$viewData);
    }
    public function postCreateImage(Request $request){
        if($request->hasFile('avatar')){
            foreach ($request->avatar as $key=>$file){
                //Lấy full đường dận + public_path() là địa chỉ tuyệt đối của laravel đang dùng
                //Kiểm tra $_FILES xem cấu trúc
                $baseFilename = public_path() . '/uploads/' . $_FILES['avatar']['name'][$key];
                // lấy extension bằng pathinfo
                $path = pathinfo($baseFilename);
                $ext = $path['extension'];
                //lấy tên ảnh không có extension
                $nameFile = trim(str_replace('.'.$ext,'',strtolower($_FILES['avatar']['name'][$key])));
                $filename = date('Y-m-d__').str_slug($nameFile) . '.' . $ext;

                //thư mục upload
                $path = public_path().'/uploads/'.date('Y/m/d/');
                if ( !\File::exists($path))
                {
                    mkdir($path,0777,true);
                }
                // di chuyen file vao thu muc uploads
                move_uploaded_file($_FILES['avatar']['tmp_name'][$key], $path. $filename);

                $gallery = new gallery();
                $gallery ->image_product_id = $request->image_product_id;
                $gallery->image = $filename;
                $gallery->save();
            }
            return redirect()->back()->with('success',"Bạn đã lưu thành công");
        }
        return redirect()->back()->with('wrong',"Thất bại");
    }
}
