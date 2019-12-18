<?php

namespace App\Http\Controllers;
use App\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function getcart()
    {   
        if(!Auth::check() || Auth::user()->level != 'member'){
            return response()->json([
                "status" => 0,
                "message" => "anda belum login"
            ]);
        }
        $cart = Cart::where('user_id', Auth::id())->get();
        $list = array();
        foreach($cart as $row){
            $list[] = [
                "id"=>$row->product->id,  
                "nama"=>$row->product->name, 
                "qty"=>$row->qty,
                "harga"=>$row->product->harga
            ];
        }
        $all = [
            "status" => 1,
            "message" => "berhasil",
            "user_Id" => $row->user_id
        ];
        $all["list"] = $list;
        return response()->json($all);
    }
    public function postcart()
    {   
        
    }
}
