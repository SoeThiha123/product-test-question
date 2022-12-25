<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index(){
        $products =Product::all()->toArray();
        // dd($products);
        return view('index',compact('products'));
    }
    public function create(){
        return view('create');
    }
    public function postCreate(Request $request)
    {
        $data = $this->getPostData($request);
        Product::create($data);
        return redirect()->route('product#create');
        // dd($data);
        // dd($request->all());
    }

    public function postDelete($id){
        Product::where('id',$id)->delete();
        return redirect()->route('product#index');
    }

    public function editPage($id){
        $product = Product::where('id',$id)->first()->toArray();
        return view('edit',compact('product'));
    }
    public function update(Request $request,$id)
    {
        // dd($request->all());
        $updateData = $this->getPostData($request);
        Product::where('id',$id)->update($updateData);
        return redirect()->route('product#index');

    }
    public function show($id)
    {
        $product = Product::where('id',$id)->first()->toArray();
        return view('show',compact('product'));
    }



    private function getPostData($request){
        return [
            'name' => $request->name,
            'detail' => $request->detail
        ];
    }
}
