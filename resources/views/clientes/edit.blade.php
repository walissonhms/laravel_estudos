<h3>Editando cliente</h3>

<form action="{{ route('clientes.update', $cliente['id']) }}" method="post">
    @csrf
    @method('put')
    <input type="text" name="nome" value="{{ $cliente['nome'] }}"/>
    <input type="submit" value="Salvar"/>
</form>
