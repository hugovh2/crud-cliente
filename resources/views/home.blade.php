@extends('layouts.app')

@section('content')
<body background="https://s1.1zoom.me/b5149/175/School_White_background_Pencils_Multicolor_568201_1920x1080.jpg">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h3>
                    {{ __('Logado') }}
                </h3>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>Seja Bem-vindo!</h1>
                    <a href="{{ url('usuarios') }}">Lista dos usuários</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection
