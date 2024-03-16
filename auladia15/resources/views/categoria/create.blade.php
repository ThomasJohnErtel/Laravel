<form action="{{ route('categoria.insert')}}" method="POST">
    @csrf
    Nome: <input type="text" name="CATEGORIA_NOME"><br>
    Categoria: <input type="text" name="CATEGORIA_DESC">
    <button type="submit">Criar!</button>
</form>