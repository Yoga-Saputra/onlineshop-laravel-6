<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
/* use Illuminate\Support\Facades\DB; */
use App\Product;
use Illuminate\Support\Facades\Session;



class ProductController extends Controller
{
    public function index()
    {
         //menampilkan data dari database
        $products = \App\Product::orderBy('id', 'desc')->paginate(5);/* where('name','baju 5')
                                    ->orderBy('stock', 'desc')
                                    ->get(); */
        $category = \App\Category::all();
        return view('admin.product.index', compact('products','category'));
        /* $products = DB::table('products')->where('name','baju 5')->orderBy('stock', 'desc')->get();
        return view('admin.product.index', compact('products')); */
        
    }

   public function insert(Request $request)
    {
        $this->validate($request,[
            'picture'     =>'required|string',
            'name'        =>'required|string|max:50',
            'category'    => 'required|integer',
            'stock'       =>'required|integer',
            'harga'       =>'required|integer',
            'keterangan'  =>'required|string'
        ]);

        $product = new Product;
        
        $product->picture = $request->picture;
        $product->name = $request->name;
        $product->category_id = $request->category;
        $product->stock = $request->stock;
        $product->harga = $request->harga;
        $product->keterangan = $request->keterangan;

        $product->save();

        Session::flash('success', 'Data has been successfully added!');
        return redirect('/dashboard/product'); 

        
        /* \App\Product::create($request->all());
        return redirect('/product')->with('sukses', 'Data berhasil diinput'); */
        
    }
    public function edit($id)  
    {
        $product = \App\Product::find($id);
        $category = \App\Category::all();

        return view('admin.product.edit', compact('product','category'));
    }
    

    /* public function edit($id)
    {
        $siswa = \App\Siswa::find($id);
        return view('siswa/edit', ['siswa' => $siswa]);
    } */

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'picture'     =>'required|string',
            'name'    =>'required|string|max:50',
            'stock'    =>'required|integer',
            'harga'       =>'required|integer',
            'keterangan'  =>'required|string'
        ]);
        $product = \App\Product::find($id);
        $product->update($request->all());
        

        Session::flash('success', 'Data has been successfully update!');
        return redirect('/dashboard/product');
    }

    public function delete($id)
    {
        /* \App\Product::destroy($id); */

        $product = \App\Product::find($id);
        $product->delete($product);

        Session::flash('success', 'Data has been successfully delete!');
        return redirect('/dashboard/product');
    }

    public function detail()
    {
        return redirect('/product');
    }
}


    
