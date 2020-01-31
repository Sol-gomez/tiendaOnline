@extends('store.template')


@section('content')
<br>
<br>
<br>
<br>
<div class="container">
    <h1 class="text-center">¡Bienvenido!</h1>
    <div class="row justify-content-center">

        <div class="col-md-8">
            <div class="card">
               
                <div class="card-header">Felicidades!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Te has registrado con exito
                    </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
@endsection
