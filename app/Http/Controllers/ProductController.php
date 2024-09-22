<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(){
        $products = DB::table('products')->get();
        return view('product.index', ['products'=>$products]);
    }

    public function create(){
        return view('product.create');
    }

    public function postCreate(Request $request){
        $id = $request->input('id');
        $name = $request->input('name');
        $quantity = $request->input('quantity');
        $price = $request->input('price');

        DB::table('products')->insert([
            'id' => intval($id),
            'name' => $name,
            'quantity' => $quantity,
            'price' => intval($price)
        ]);

        return redirect()->action([ProductController::class, 'index']);
    }

    public function update($id){
        $b = DB::table('products')->where('id', intval($id))->first();
        return view('product.update', ['b' =>$b]);
    }

    public function postUpdate(Request $request, $id){
        $name = $request->input('name');
        $quantity = $request->input('quantity');
        $price = $request->input('price');
        $b = DB::table('products')->where('id', intval($id))->update(['name' => $name, 'quantity' => $quantity, 'price' => intval($price)]);

        return redirect()->action([ProductController::class, 'index']);
    }

    public function delete($id){
        $b = DB::table('products')->where('id', intval($id))->delete();
        return redirect()->action([ProductController::class, 'index']);
    }
}
