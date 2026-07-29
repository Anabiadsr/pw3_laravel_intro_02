<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oficinas</title>
</head>

<body>
    <h1>Cadastro de Oficinas</h1>
    <form action="/oficinas" method="post">
        @csrf
        <label for="nome_oficina">Nome Oficina</label>
        <input type="text" id="nome_oficina" required><br><br>

        <label for="professor_responsavel">Professor responsável</label>
        <input type="text" id="professor_responsavel" required><br><br>

        <label for="carga_horaria">Carga Horária</label>
        <input type="number" id="carga_horaria" required><br><br>

        <label for="turno">turno</label>
        <input type="text" id="turno" required><br><br>

        <button type="submit">Salvar</button>
    </form>

    <h2>Lista de Produtos</h2>
    @if($oficinas->isEmpty())
    <p>Nenhuma Oficina cadastrado</p>
    @else
    <ul>
        @foreach($oficinas as $oficina)
        <li>
            Nome: {{$oficina->nome_oficina}} - Professor Responsavel: {{$oficina->professor_responsavel}} - Carga Horaria: {{$oficina->carga_horaria}} - Turno: {{$oficina->turno}}
        </li>
        @endforeach
    </ul>
    @endif

</body>

</html>