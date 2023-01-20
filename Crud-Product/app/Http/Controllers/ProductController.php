<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Product;

class ProductController extends Controller
{
    //
    function insert(Request $request)
    {
        $name = $request->get('productName');
        $price = $request->get('productPrice');
        $pimage = $request->file('image')->getClientOriginalName();
        //uploaded file image
        $request->image->move(public_path('images'),$pimage);

        $prod = new Product();
        $prod->productName = $name;
        $prod->productPrice = $price;
        $prod->productImage = $pimage;
        $prod->save();
        return redirect('/');
    }

    function readdata()
    {
        $productData = Product::all();
        return view('insertRead',['data'=>$productData]);
    }

    function updateOrDelete(Request $request)
    {
        $id = $request->get('id');
        $name = $request->get('name');
        $price = $request->get('price');
        if($request->get('update') == 'Update'){
            return view('updateView', ['productId' => $id, 'productName' => $name, 'productPrice' => $price]);
        }
        else{
            $prod = product::find($id);
            $prod->delete();
        }
        return redirect('/');
    }

    function update(Request $request){
        $ID = $request->get('id');
        $Name = $request->get('name');
        $Price = $request->get('price');
        $prod = Product::find($ID);
        $prod -> productName = $Name;
        $prod -> productPrice = $Price;
        $prod -> save();
        return redirect('/');
    }
}
