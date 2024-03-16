<a href="{{route('categoria.create')}}">Criar nova Categoria</a> 

<ul>
@foreach($categorias as $item)
    <li>{{ $item->CATEGORIA_ID }} - {{ $item->CATEGORIA_NOME }} - <a href="{{ route('categoria.edit', $item->CATEGORIA_ID) }}">Editar</a></li>
@endforeach
</ul>