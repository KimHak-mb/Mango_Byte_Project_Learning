<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Accessory;

class AccessoryController extends Controller
{
    function insert(Request $request)
    {
        $name = $request->get('name');
        $upload_image = $request->file('image')->getClientOriginalName();
        //uploaded file image
        $request->image->move(public_path('images'),$upload_image);

        $prod = new Accessory();
        $prod->name = $name;
        $prod->accessoryImage = $upload_image;
        $prod->save();
        return redirect('/product');
    }

    function readdata()
    {
        $accessorytData = Accessory::all();
        return view('pages.product',['data'=>$accessorytData]);
    }

    function updateOrDelete(Request $request)
    {
        $id = $request->get('id');
        $name = $request->get('name');
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
        $prod = Accessory::find($ID);
        $prod -> productName = $Name;
        $prod -> save();
        return redirect('/product');
    }
}
