<a href="{{ route('clientes.create') }}">Novo Cliente</a>
<ol>
    @foreach($clientes as $cliente)
        <li>{{ $cliente['nome'] }} | <a href="{{ route('clientes.edit', $cliente['id']) }}">Editar</a> | <a href="{{ route('clientes.show', $cliente['id']) }}">Info</a></li>
    @endforeach
</ol><meta name="csrf-token" content="{{ csrf_token() }}">