@extends('store.template')

@section('content')

@include('store.partials.slider')

<br>
<div id="prod-" class="container text-center">
    <div id="products">
        @foreach ($products as $product)

            <div class="product white-panel">
                <h3>{{ $product->name }}</h3> <hr> 
                <img src="{{$product->image}}" alt="" width='200'>
                <div class="product-description panel">
                    <p>{{$product->extract}}</p>
                    <h3> <span class="label label-success">Precio: ${{number_format($product->price,2)}}</span></h3>
                  
                    <p>
                    <a class="btn btn-warning" href="{{ route('cart-add',$product->slug)}}"> <i class="fa fa-cart-plus"></i> Lo Quiero</a>
                        <a class="btn btn-primary" href="{{ route('product-detail',$product->slug)}}"> <i class="fa fa-chevron-circle-right"></i> Leer Mas</a>
                    </p>
                </div>
            </div>

        @endforeach
    </div>
</div>
@endsection