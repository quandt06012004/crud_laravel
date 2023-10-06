<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class CategoryController extends Controller
{
    public function index(){
        $list = DB::table('categories')->get();
        // dd($list);
        return view('category.index',compact('list'));
    }

    public function add() {
        
        return view('category.add');
    }

    public function store(Request $request) {
       
        DB::table('categories')->insert([
            'name'=>$request->name,
            'status'=>$request->status,
        ]);

        return redirect()->route('category.index')->with('message','Thêm mới thành công');
    }

    public function edit($id){
        // $category = DB::table('categories')->where('id',$id)->first();
        $category = DB::table('categories')->find($id);
        // dd($category);
        return view('category.edit',compact('category'));
    }

    public function update(Request $request,$id){
        // dd($id);
        // dd($request->all());
        DB::table('categories')->where('id',$id)->update([
            'name'=>$request->name,
            'status'=>$request->status,
        ]);
        return redirect()->route('category.index')->with('message','Cập nhật thành công');
    }

    public function delete($id){
        DB::table('categories')->where('id',$id)->delete();
        return redirect()->back()->with('message','Xía thành công');
    }
}
