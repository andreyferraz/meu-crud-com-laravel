<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Detalhes do Produto</title>
</head>
<body>
    <h1>Detalhes do Produto</h1>
    <p><strong>Nome:</strong> {{ $produto->nome }}</p>
    <p><strong>Descrição:</strong> {{ $produto->descricao ?? 'Nenhuma descrição' }}</p>
    <a href="{{ route('produtos.edit', $produto->id) }}">Editar</a>
    <a href="{{ route('produtos.index') }}">Voltar</a>
</body>
</html>