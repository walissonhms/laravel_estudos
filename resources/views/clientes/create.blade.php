<form action="{{ route('clientes.store') }}" method="post">
    @csrf
    <input type="text" name="nome"/>
    <input type="submit" value="Salvar"/>
</form>