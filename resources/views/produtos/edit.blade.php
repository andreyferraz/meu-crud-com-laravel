<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Editar Produto</title>
</head>
<body>
    <h1>Editar Produto</h1>
    <form action="{{ route('produtos.update', $produto->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" value="{{ $produto->nome }}" required>
        </div>
        <div>
            <label for="descricao">Descrição:</label>
            <textarea id="descricao" name="descricao">{{ $produto->descricao }}</textarea>
        </div>
        <button type="submit">Atualizar</button>
    </form>
    <a href="{{ route('produtos.index') }}">Voltar</a>
</body>
</html>