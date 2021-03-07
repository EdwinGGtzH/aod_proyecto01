<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

<div class="container">
    <h1><b>Actualizar datos de la propiedad</b></h1>
    <form action="{{ route('propertys.update', $property->id) }}" method="post">
        @csrf
        @method('PUT')

        <input type="hidden" name="id"> 
        <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Inmueble: </label>
                <input class="form-control" type="text" name="category" value="{{ $property->category }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Estado: </label>
                <input class="form-control" type="text" name="state" value="{{ $property->state }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Municipio: </label>
                <input class="form-control" type="text" name="municipality" value="{{ $property->municipality }}" required>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Localidad o colonia: </label>
                <input class="form-control" type="text" name="town" id="" value="{{ $property->town }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">  
                <label for="">Dirección: </label>
                <input class="form-control" type="text" name="direction" value="{{ $property->direction }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Número de contacto: </label>
                <input class="form-control" type="text" name="contactNumber" value="{{ $property->contactNumber }}" required>
            </div>
        </div>
        <div class="row">   
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Precio: </label>
                <input class="form-control" type="text" name="price" value="{{ $property->price }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Número de habitaciones: </label>
                <input class="form-control" type="number" name="numberOfRooms" value="{{ $property->numberOfRooms }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Número de baños: </label>
                <input class="form-control" type="number" name="numberOfBathrooms" value="{{ $property->numberOfBathrooms }}" required>
            </div>  
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Propietario: </label>
            <input class="form-control" type="text" name="owner" value="{{ $property->owner }}" required>
        </div><br>
        <div>
            <label for="">Comentario: </label>
            <input class="form-control" type="text" name="comment" value="{{ $property->comment }}">
        </div><br>
        <div class="d-grid gap-3 d-md-flex justify-content-md-end">
            <input class="btn btn-info" type="reset" value="Restablecer">
            <input class="btn btn-primary" type="submit" value="Guardar">
        </div>
    </form>
</div>