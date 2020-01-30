@extends('products.layout')

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2> Mostrar Producto</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('products.inicio') }}"> Volver</a>

            </div>

        </div>

    </div>

   

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Nombre:</strong>

                {{ $product->name }}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Detalles:</strong>

                {{ $product->description }}

            </div>

        </div>

    

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Precio:</strong>

                {{ $product->price }}

            </div>

        </div>
    </div>

@endsection