@extends('store.template')
@section('assets')
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

@endsection

@section('content')

<div class="container col-10"> 
    <section class="row">
        @if (session()->get('user.cart'))

        <article class="col-12">
            <br>
            <section class="table-responsive">
                <table class="table table-striped">
                    <thead>

                        <tr>
                            <th scope="col"> </th>
                            <th scope="col">Producto</th>
                            <th scope="col">Descripcion </th>
                            <th scope="col">Disponible</th>
                            <th scope="col" class="text-center">Cantidad</th>
                            <th scope="col" class="text-center">Precio</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
            
                            @php
                                 $total = 0;
                            @endphp
                        @foreach (session()->get('user.cart') as $product)
                            
                            @php
                                $total = $total + $product['price'];
                            @endphp

                            <tr>
                                <td class="initialism">{{$product['name']}}</td>
                                <td class="">{{$product['description']}}</td>
                                <td >En stock</td>
                                <td><input id="quantity" class="form-control" type="number" value="1" /></td>
                                <p id="errorQuantity"></p>
                                <td class="text-right">$ {{$product['price']}}</td>
                            <td class="text-right"><a href='{{route('cart.remove', $product['id'])}}' class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </a> </td>
                            </tr>


                        @endforeach
                        
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Sub-Total</td>
                        <td></td>
                        <td class="text-right" id="subtotal">$ {{$total}}</td>
                        <td></td>

                    </tr>
                
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><strong>Total</strong></td>
                        <td></td>
                    <td class="total"></td>
                        <td></td>

                        </tr>
                    </tbody>
                </table>
            </section>
        </article>
        <section class="col mb-2">
            <article class="row">
                <section class="col-sm-12  col-md-6">
                <a href='{{route('men')}}' class="btn btn-block btn-light">Continue Shopping</a>
                </section>
                <section class="col-sm-12 col-md-6 text-right">
                    <button class="btn btn-lg btn-block btn-success text-uppercase">Checkout</button>
                </section>
            </article>
            <br>
        </section>
            
            @else
            <div class='container mb-5 mt-5'>
                <h2 class='text-center mb-5 mt-5'> Aun no tienes nada en el carrito, Busca algo de tu utilidad y ponlo en el carrito... </h2>
            </div>
            @endif  

</section>
</div>


<script src ="{{asset('js/cart.js')}}"></script>
@endsection
