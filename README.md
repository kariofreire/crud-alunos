##### Instalação do Projeto

Copia o arquivo `.env.example` e cola com o nome `.env`.

Instalar os pacotes do projeto:

```bash
$ composer install
```

Gera a chave do laravel:

```bash
$ php artisan key:generate
```

Configura o banco de dados com as variaveis ambiente:

```bash
DB_CONNECTION=
DB_HOST=
DB_PORT=
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```

Startando a aplicação:

```bash
$ php atisan serve
```

### TABELAS

Cria uma migration de tabela de alunos

```bash
# Criando a tabela de alunos
$ php artisan make:migration create_alunos_table
```

Cria um model para tabela de alunos

```bash
$ php artisan make:model Alunos
```

Verifica os status das migrations

```bash
$ php artisan migrate:status
```

Criando as tabelas no banco de dados

```bash
$ php artisan migrate
```

Criando o controller de Alunos

```bash
$ php artisan make:controller AlunosController --resource
```
