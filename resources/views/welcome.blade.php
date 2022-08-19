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
            <h3>Alunos</h3>
        </header>

        <div class="col-12 mt-5">
            <div class="p-3">
                <a class="btn btn-success" href="{{ route('criar.aluno') }}">Novo Aluno</a>
            </div>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Sexo</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($alunos as $aluno)
                        <tr>
                            <th scope="row">{{ $aluno->id }}</th>
                            <td>{{ $aluno->nome }}</td>
                            <td>{{ $aluno->telefone }}</td>
                            <td>{{ $aluno->nome_sexo }}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a
                                        href="{{ route('editar.aluno', ['id' => $aluno->id]) }}"
                                        class="btn btn-secondary"
                                    >Editar</a>

                                    <a
                                        href="{{ route('deletar.aluno', ['id' => $aluno->id]) }}"
                                        class="btn btn-secondary"
                                    >Deletar</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $alunos->links() }}
        </div>
    </div>
</body>

</html>
