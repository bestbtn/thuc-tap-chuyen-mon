<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\Transaction;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class AdminTransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::with('user:id,name')->paginate(10);
        $viewData = [
          'transactions'  => $transactions
        ];
        return view('admin::transaction.index',$viewData);
    }
    public function viewOrder(Request $request,$id){
        if($request->ajax()){
            $orders = Order::with('product')->where('or_transaction_id',$id)->get();
            $html = view('admin::component.order',compact('orders'))->render();
            return \response()->json($html);
        }
    }
    public function action($action,$id){
        $messenge='';
        if($action){
            $transaction = Transaction::find($id);
            $orders = Order::where('or_transaction_id',$id)->get();
            if ($orders){
                // giảm số lượng sản phẩm đi
                foreach ($orders as $order){
                    $product = Product::find($order->or_product_id);
                    if(  $product->pro_number > $order->or_qty){
                    $product->pro_number = $product->pro_number - $order->or_qty;
                    $product->pro_number_pay +=1;
                    $product->save();
                    }else{
                        return redirect()->back()->with('wrong',"Không đủ số lượng sản phẩm! <br> Vui lòng kiểm tra lại");
                    }

                }
                //tăng số lần mua sản phẩm
            }
            User::where('id',$transaction->tr_user_id)->increment('total_number');
            switch ($action)
            {
                case 'status':
                    $transaction->tr_status = Transaction::STATUS_PUBLIC;
                    $transaction->save();
                    $messenge = "Cập nhật trạng thái đơn hàng thành công";
                    break;
            }
        }
        return redirect()->back()->with('success',$messenge);
    }

}
