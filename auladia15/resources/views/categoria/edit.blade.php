<form action="{{ route('categoria.update', $categoria->CATEGORIA_ID)}}" method="POST">
    @csrf
    Nome: <input type="text" name="CATEGORIA_NOME" value="{{$categoria->CATEGORIA_NOME}}"><br>
    Categoria: <input type="text" name="CATEGORIA_DESC" value="{{$categoria->CATEGORIA_DESC}}">
    <button type="submit">Salvar!</button>
</form>