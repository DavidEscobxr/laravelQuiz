<h1>Crear cuartel</h1>
<form action="{{route('cuartels.store')}}" method="POST">

    @csrf
    <label>
        Nombre:
        <br>
        <input type="text" name="Nom_c">
    </label>
    <br>
    <label>
        Ubicación:
        <br>
        <input type="text" name="Ubic_c">
    </label>
    <button type="submit">Enviar Formulario:</button>
</form>