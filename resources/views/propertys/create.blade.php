<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

<div class="container">
    <h1><b>Formulario para registrar una propiedad</b></h1>
    <form action="{{ route('propertys.store') }}" method="post">
        @csrf
        <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Inmueble: </label>
                <input class="form-control" type="text" name="category" id="" placeholder="Tipo de inmueble" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Estado: </label>
                <input class="form-control" type="text" name="state" id="" placeholder="Estado" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Municipio: </label>
                <input class="form-control" type="text" name="municipality" id="" placeholder="Municipio" required>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Localidad o colonia: </label>
                <input class="form-control" type="text" name="town" id="" placeholder="Localidad o colonia" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">  
                <label for="">Dirección: </label>
                <input class="form-control" type="text" name="direction" id="" placeholder="Dirección" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Número de contacto: </label>
                <input class="form-control" type="text" name="contactNumber" id="" placeholder="Número de contacto" required>
            </div>
        </div>
        <div class="row">   
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Precio: </label>
                <input class="form-control" type="text" name="price" id="" placeholder="Precio" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Número de habitaciones: </label>
                <input class="form-control" type="number" name="numberOfRooms" id="" placeholder="Número de habitaciones" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Número de baños: </label>
                <input class="form-control" type="number" name="numberOfBathrooms" id="" placeholder="Número de baños" required>
            </div>  
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Propietario: </label>
            <input class="form-control" type="text" name="owner" id="" placeholder="Propietario" required>
        </div><br>
        <div>
            <label for="">Comentario: </label>
            <input class="form-control" type="text" name="comment" id="" placeholder="Comentario">
        </div><br>
        <div class="d-grid gap-3 d-md-flex justify-content-md-end">
            <input class="btn btn-info" type="reset" value="Restablecer">
            <input class="btn btn-primary" type="submit" value="Guardar">
        </div>
    </form>
</div>