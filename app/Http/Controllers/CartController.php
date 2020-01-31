<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Product;

class CartController extends Controller
{
    
    public function __construct(){
        if(!\Session::has('cart')) \ Session::put('cart',array());//si no existe la var de seccion cart entonces la crea yguardo en un array vacio
    }

    // mostrar carrito
    public function show(){
        return view('cart.carrito');
    }

    //Agregar item
    public function add($id){
        $product = Product::find($id);
        $product = [
            'id'=> $product->id,
            'name' => $product->name,
            'description'=>$product->description,
            'price'=>$product->price
        ];
        session()->put("user.cart".$id.$product);
        return view('cart.carrito');
    }
        /*
        //$cart= \Session::get('cart'); //recibo var de seccion cart y la guardo en la variable local cart
        $products=  Product::find($id); 
        //$product->quantity=1; //propiedad de cantidad, la defino en 1
        $productos= [
            'id'->$products['id'],
            'name'->$products['name'],
            'slug'->$products['slug'],
            'description'->$products['description'],
            'extract'->$products['extract'], //para mostrar una descripcion corta del producto
            'price'->$products['price'],
            'image'->$products['image'],
            'visible'->$products['visible']
        ];
        session()->put('cart.'.$id,$productos);
         }

    //borrar item

    //actualizar item

    // vaciar carrito (remove)


    //obtener total del carrito

    */
    public function remove($id){
        session()->pull('user.cart.'.$id, "default");
        return view('cart.carrito');
    }
}
