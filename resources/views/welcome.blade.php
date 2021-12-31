<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
</head>
<body>
    <h1>teste</h1>

    
    <form action="{{ url('/usuarios/new') }}" method="get">
        @csrf
        <label>Endereço</label>
        <input type="endereco" name="endereco">
<br><br>
        <label>CPF</label>
        <input type="cpf" name="cpf">
        <br><br>
        <label>Telefone</label>
        <input type="telefone" name="telefone">
        <br><br>
        <button>Salvar</button>


    </form>
</body>
</html>