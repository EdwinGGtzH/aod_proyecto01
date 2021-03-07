<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

<div class="container">
    <h1>Formulario para crear un nuevo registro</h1>
    <form action="{{ route('vehicles.store') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Marca: </label>
                <input class="form-control" type="text" name="brand" id="" placeholder="Marca" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Modelo: </label>
                <input class="form-control" type="text" name="model" id="" placeholder="Modelo" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Color: </label>
                <input class="form-control" type="text" name="color" id="" placeholder="Color" required>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">  
                <label for="">Número de serie: </label>
                <input class="form-control" type="text" name="serialNumber" id="" placeholder="Número de serie" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Matricula: </label>
                <input class="form-control" type="text" name="carRegistration" id="" placeholder="Matricula" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Número de puertas: </label>
                <input class="form-control" type="number" name="numberOfDoors" id="" placeholder="Número de puertas" required>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Número de asientos: </label>
                <input class="form-control" type="number" name="numberOfSeats" id="" placeholder="Número de asientos" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Kilometraje: </label>
                <input class="form-control" type="number" name="mileage" id="" placeholder="Kilometraje" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Capacidad de cilindros: </label>
                <input class="form-control" type="number" name="cylinderCapacity" id="" placeholder="Capacidad de cilindros" required>
            </div>
        </div><br>
        <div>
            <label for="">Descripción: </label>
            <textarea class="form-control"  name="description" id="" cols="30" rows="5" required></textarea>
        </div><br>
        <div>
            <label for="">Comentarios: </label>
            <input class="form-control" type="text" name="comment" id="" placeholder="Comentarios">
        </div><br>
        <div class="d-grid gap-3 d-md-flex justify-content-md-end">
            <input class="btn btn-info" type="reset" value="Restablecer">
            <input class="btn btn-primary" type="submit" value="Guardar">
        </div>
    </form>
</div>