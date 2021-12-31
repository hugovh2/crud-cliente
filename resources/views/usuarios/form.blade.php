@extends('layouts.app')

@section('content')

<body background="https://s1.1zoom.me/b5149/175/School_White_background_Pencils_Multicolor_568201_1920x1080.jpg">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('usuarios') }}">Voltar</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    @if( Request::is('*/edit'))
                    <form action="{{ url('usuarios/update') }}/{{ $usuario->id }}" method="post">
                    @csrf
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nome:</label>
                        <input type="text" name="name" class="form-control" value="{{ $usuario->name  }}">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">E-mail:</label>
                        <input type="email" name="email" class="form-control" value="{{ $usuario->email }}">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Endereço</label>
                        <input type="endereco" name="endereco" class="form-control" value="{{ $usuario->endereco }}">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">CPF</label>
                        <input type="cpf" name="cpf" class="form-control" value="{{ $usuario->cpf }}">
                      </div>

                      
                      <div class="form-group">
                        <label for="exampleInputEmail1">Telefone</label>
                        <input type="telefone" name="telefone" class="form-control" value="{{ $usuario->telefone }}">
                      </div>

                      <button type="submit" class="btn btn-primary">Atualizar</button>
                    </form>

                    @else

                    <form action="{{ url('usuarios/add') }}" method="post">
                    @csrf
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nome:</label>
                        <input type="text" name="name" class="form-control">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">E-mail:</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Endereço:</label>
                        <input type="endereco" name="endereco" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">CPF</label>
                        <input type="cpf" name="cpf" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Telefone</label>
                        <input type="telefone" name="telefone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>

                      <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
