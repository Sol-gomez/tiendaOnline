@extends('store.template')

@section('content')
<div class="container text-center">
    <br>
    <div class="page-header">
        <h1><i class="fa fa-shopping-cart"></i> Detalle del Producto</h1>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-6">
                <div class="producto-bloque">
                        <img src="{{$product->image}}" >
                </div>
        </div>
        <div class="col-md-6">
                <div class="producto-bloque">
                        <h3>{{$product->name}}</h3>
                        <hr>
                        <div class="product-description panel">
                            <p>{{$product->description}}</p>
                            <h3> <span class="label label-success">Precio: ${{number_format($product->price,2)}}</span></h3>
                            <p>
                                <a class="btn btn-warning btn-block" href="{{ route('prueba',$product->id)}}"> Lo Quiero <i class="fa fa.cart-plus fa-2x"></i></a>
                            </p>
                        </div>
                </div>
        </div>
    </div>
    <hr>
<p> <i class="fa fa-chevron-circle-left" ></i> <a class="btn btn-primary" href="{{route('home')}}">Regresar</a></p>
</div>

