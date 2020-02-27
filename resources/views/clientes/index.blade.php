<a href="{{ route('clientes.create') }}">Novo Cliente</a>
<ol>
    @foreach($clientes as $cliente)
        <li>{{ $cliente['nome'] }} | <a href="{{ route('clientes.edit', $cliente['id']) }}">Editar</a></li>
    @endforeach
</ol>