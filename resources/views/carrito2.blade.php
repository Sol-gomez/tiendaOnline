@extends('products.layout')
 
@section('content')
<div class="container-fluid">
    <br>
    <h1 class="text-center">Detalle del Pedido</h1>
    <hr>
    <br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <br>
                <h2>Datos del Pedido</h2>
            </div>
            <div class="pull-right">
                <br>
                {{-- <a class="btn btn-success" href="{{ route('products.create') }}"> Crear Producto Nuevo</a> --}}
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table">
        <tr>
            <th>Nombre</th>
            <th>Detalle</th>
            <th>Precio</th>
            <th width="280px">Accion</th>
        </tr>
        @dd($products);

        @foreach($orders as $order)
        {{-- @foreach ($products as $product)
        @if($order->product_id == $products->id)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->price }}</td>
           
        </tr>
        @endif --}}
        {{-- @endforeach --}}
        
        
        @endforeach;
        {{-- @foreach ($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->price }}</td>
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
   
                    <a class="btn btn-primary" href="{{ route('product-detail',$product->slug)}}"> <i class="fa fa-chevron-circle-right"></i> Mostrar</a>
    
                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Editar</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
            </td>
            
        </tr>

        @endforeach --}}
    
    </table>
    
    
</div>  
@endsection