<h1>Crear soldado</h1>
<form action="{{route('soldados.store')}}" method="POST">

    @csrf
    <label>
        Nombre:
        <br>
        <input type="text" name="Nom_s">
    </label>
    <br>
    <label>
        Apellido:
        <br>
        <input type="text" name="Apell_s">
    </label>
    <label>
        Grado:
        <br>
        <input type="text" name="Grado_s">
    </label>
    <button type="submit">Enviar Formulario:</button>
</form>