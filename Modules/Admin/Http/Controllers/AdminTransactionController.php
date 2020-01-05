<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Order;
use App\Models\Transaction;
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
            switch ($action)
            {
                case 'delete':
                    $transaction->delete();
                    $messenge = "Xóa thành công";
                    break;
                case 'status':
                    $transaction->tr_status = $transaction->tr_status==1 ? 0 : 1;
                    $transaction->save();
                    $messenge = "Cập nhật thành công";
                    break;

            }
        }
        return redirect()->back()->with('success',$messenge);
    }

}
