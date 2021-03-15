<!DOCTYPE html>
<html lang="PT-br">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale = 1.0"/>
        <title>BASE</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
        <link rel="stylesheet" href="style.css"/>
        <script src="script.js"></script>
    </head>
    <body>
        <form action="{{ route('alterar_produto', ['id' => $produto->id]) }}" method="POST">
            @csrf
            <label for="">Nome</label><br/>
            <input type="text" name="nome" value="{{ $produto->nome}}"><br/>
            <label for="">Custo</label><br/>
            <input type="text" name="custo" value="{{ $produto->custo}}"><br/>
            <label for="">Preço</label><br/>
            <input type="text" name="preco" value="{{ $produto->preco}}"><br/>
            <label for="">Quantidade</label><br/>
            <input type="text" name="quantidade" value="{{ $produto->quantidade}}"><br/>
            <button>salvar</button>
        </form>
    </body>
</html>