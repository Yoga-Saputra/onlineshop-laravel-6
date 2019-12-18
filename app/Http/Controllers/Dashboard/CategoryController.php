<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    public function index()
    {
        $category = \App\Category::orderby('sort', 'desc')->paginate(7);
        return view('admin.category.index', compact('category'));
    }
    public function insert(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required|string|max:50'
        ]);

        $sort = \App\Category::max('sort');
        $sortatas = $sort + 1;
        
        $category = new Category;
        $category->nama = $request->nama;
        $category->sort = $sortatas;
        $category->save();

        Session::flash('success', 'Data has been successfully added!');
        return redirect('/dashboard/category');
    }
    public function edit($id)
    {
        $category = \App\Category::find($id);
        return view('admin.category.edit', compact('category'));
    }
    public function delete($id)
    {
        /* \App\Product::destroy($id); */
        $category = \App\Category::find($id);
        $category->delete($category);

        Session::flash('success', 'Data has been successfully delete!');
        return redirect('/dashboard/category');
    }
    public function sortup($id)
    {
        $datateratas = \App\Category::max('sort');
        $terpilih = \App\Category::find($id);
        $sortSebelum = $terpilih->sort; // 1
        if($datateratas == $sortSebelum ){
            return back()->with('message','yang terpilih sudah tertinggi');
        }else{
            $sortBaru = $sortSebelum + 1; //2
            $dataAtasnya = \App\Category::where('sort', $sortBaru)->first(); // 2
            //data diatasnya sudah ke save
            $terpilih->sort = $sortBaru;
            $terpilih->save();
            $dataAtasnya->sort = $sortSebelum;
            $dataAtasnya->save();
            return back()->with('message', 'data sudah di pindah ke atas');
        }
    }
    public function sortdown($id)
    {
        $dataterbawah = \App\Category::min('sort');
        $terpilih = \App\Category::find($id);
        $sortSebelum = $terpilih->sort; // 1
        if($dataterbawah == $sortSebelum){
            return back()->with('message', 'yang terpilih sudah terbawah');
        }else{
            $sortBaru = $sortSebelum - 1; //2
            $dataAtasnya = \App\Category::where('sort', $sortBaru)->first(); // 2
            //data diatasnya sudah ke save
            $terpilih->sort = $sortBaru;
            $terpilih->save();
            $dataAtasnya->sort = $sortSebelum;
            $dataAtasnya->save();
            return back()->with('message', 'data sudah di pindah ke bawah');
        }
    }
}
