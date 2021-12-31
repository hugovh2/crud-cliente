@extends('layouts.app')

@section('content')
<body background="https://s1.1zoom.me/b5149/175/School_White_background_Pencils_Multicolor_568201_1920x1080.jpg">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a href="{{ url('usuarios/new') }}">Novo usuário</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>Lista dos usuarios</h1>



                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Nome</th>
                          <th scope="col">E-mail</th>
                          <th scope="col">Endereço</th>
                          <th scope="col">CPF</th>
                          <th scope="col">Telefone</th>
                          <th scope="col">Editar</th>
                          <th scope="col">Deletar</th>
                        </tr>
                      </thead>
                      <tbody>
                    @foreach( $usuarios as $u )

                        <tr>
                          <th scope="row">{{ $u->id }}</th>
                          <td>{{ $u->name }}</td>
                          <td>{{ $u->email }}</td>
                          <td>{{ $u->endereco }}</td>
                          <td>{{ $u->cpf }}</td>
                          <td>{{ $u->telefone }}</td>
                          <td>
                                <a href="usuarios/{{ $u->id }}/edit" class="btn btn-info">Editar</button>
                                

                          </td>
                          <td>
                                <form action="usuarios/delete/{{ $u->id }}" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger">Deletar</button>
                                </form>
                          </td>
                        </tr>

                    @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
