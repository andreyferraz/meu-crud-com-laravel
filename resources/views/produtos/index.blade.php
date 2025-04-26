<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Lista de Produtos</title>
</head>
<body>
    <h1>Lista de Produtos</h1>
    <a href="{{ route('produtos.create') }}">Novo Produto</a>
    <ul>
        @foreach ($produtos as $produto)
            <li>
                {{ $produto->nome }}
                <a href="{{ route('produtos.show', $produto->id) }}">Ver</a>
                <a href="{{ route('produtos.edit', $produto->id) }}">Editar</a>
                <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>