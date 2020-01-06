<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Article;
use App\Models\Product;
use App\Models\Rating;
use App\Models\Transaction;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $ratings = Rating::with('user:id,name','product:id,pro_name')->take(5)->orderByDesc('created_at')->get();

        //doanh thu ngày
        $moneyDay = Transaction::whereDay('updated_at',date('d'))
            ->where('tr_status',Transaction::STATUS_PUBLIC )
            ->sum('tr_total');
        $moneyMonth = Transaction::whereMonth('updated_at',date('m'))
            ->where('tr_status',Transaction::STATUS_PUBLIC )
            ->sum('tr_total');
        //so thành viên tăng trong ngày
        $memberThisDay = User::whereDay('updated_at',date('d'))
            ->where('active',User::STATUS_PUBLIC )
            ->count();
        //so thành viên tăng trong tháng
        $memberThisMonth = User::whereMonth('updated_at',date('m'))
            ->where('active',User::STATUS_PUBLIC )
            ->count();
        $viewMoney = [
            [
                'name' => 'doanh thu ngày',
                'y'    => (int)$moneyDay
            ],
            [
                'name' => 'doanh thu tháng',
                'y'    => (int)$moneyMonth
            ]
        ];
        $users = User::all();
        //tong số các thành viên
        $totalMember = User::all()->count();
        //tổng số sản phẩm
        $totalProduct = Product::all()->count();
        //tong số bài viết
        $totalArticle = Article::all()->count();

        //tồng số đánh giá
        $totalRating = Rating::all()->count();

        //danh sách đơn hàng mới
        $transactionNews = Transaction::with('user:id,name')->limit(5)->orderByDesc('id')->get();
        $viewData = [
            'ratings'           => $ratings,
            'moneyDay'          =>$moneyDay,
            'moneyMonth'        =>$moneyMonth,
            'viewMoney'         => json_encode( $viewMoney),
            'memberThisDay'=>$memberThisDay,
            'memberThisMonth'=>$memberThisMonth,
            'transactionNews'   =>$transactionNews,
            'totalMember'       =>$totalMember,
            'totalProduct'      =>$totalProduct,
            'totalArticle'     =>$totalArticle,
            'totalRating'      =>$totalRating,
            'users'              => $users,

        ];


        return view('admin::index',$viewData);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('admin::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('admin::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('admin::edit');
    }


}
