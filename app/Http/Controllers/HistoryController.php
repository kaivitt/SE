<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\History;

class HistoryController extends Controller
{
    public function index(Request $request)
    {
        $members = json_decode($request->members);

        $historyhead = DB::table('orders')
            ->select('orders.orderID', 'orders.date', 'orders.memberID', 'orders.status', 'member.Address')
            ->join('member', 'orders.memberID', '=', 'member.memberID')
            ->where('orders.memberID', $request->memID)
            ->get();
        
        //$od = DB::table
         //dd($pd);
        $historybody = DB::table('orderProduct')
            ->select('product.name', 'product.price', 'orderProduct.Quantity')
            ->join('product', 'product.productID', '=', 'orderProduct.productID')
            //->where('order.orderID',$historyhead['orderID'])
            //->where('member.memberID',$request->memID)
            ->get();
            //$historybody['orderID'] =  
            //dd($historybody);
        
        return view('History', compact('historyhead', 'members', 'historybody'));
    }

}
