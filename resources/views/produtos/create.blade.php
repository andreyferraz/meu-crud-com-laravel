<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Novo Produto</title>
</head>
<body>
    <h1>Novo Produto</h1>
    <form action="{{ route('produtos.store') }}" method="POST">
        @csrf
        <div>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
        </div>
        <div>
            <label for="descricao">Descrição:</label>
            <textarea id="descricao" name="descricao"></textarea>
        </div>
        <button type="submit">Salvar</button>
    </form>
    <a href="{{ route('produtos.index') }}">Voltar</a>
</body>
</html>