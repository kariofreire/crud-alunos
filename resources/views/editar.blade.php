<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>CRUD</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <header class="text-center mt-2">
            <h3>Alunos EDITAR</h3>
        </header>

        <div class="col-12 mt-5">
            <div class="p-3">
                <a class="btn btn-success" href="{{ route('lista.alunos') }}">Lista de Aluno</a>
            </div>

            <form method="POST" action="{{ route('atualizar.aluno', ['id' => $aluno->id]) }}">
                @csrf

                <input
                    type="hidden"
                    name="id"
                    value="{{ $aluno->id }}"
                />

                <div class="form-group">
                    <label>Nome:</label>
                    <input
                        type="text"
                        class="form-control"
                        name="nome"
                        value="{{ $aluno->nome }}"
                        required
                    >
                </div>

                <div class="form-group">
                    <label>Telefone:</label>
                    <input
                        type="text"
                        class="form-control"
                        name="telefone"
                        value="{{ $aluno->telefone }}"
                        required
                    >
                </div>

                <div class="form-group">
                    <label>Telefone:</label>

                    <select class="form-control" name="sexo">
                        @foreach ($sexos as $sexo)
                        <option
                            value="{{ $sexo['value'] }}"
                            @if($aluno->sexo == in_array($sexo['value'], ['true'])) selected @endif
                        >{{ $sexo['nome'] }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <button class="btn btn-primary" type="submit">
                        Editar
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
