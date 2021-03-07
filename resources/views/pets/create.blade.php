<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

<div class="container">
    <h1><b>Formulario para registrar una mascota</b></h1>
    <form action="{{ route('pets.store') }}" method="post">
        @csrf
        <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Categoria: </label>
                <input class="form-control" type="text" name="category" id="" placeholder="Categoria" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Nombre: </label>
                <input class="form-control" type="text" name="name" id="" placeholder="Nombre" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Raza: </label>
                <input class="form-control" type="text" name="race" id="" placeholder="Raza" required>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Sexo: </label>
                <input class="form-control" type="text" name="sex" id="" placeholder="Sexo" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">  
                <label for="">Edad: </label>
                <input class="form-control" type="number" name="age" id="" placeholder="Edad" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Peso: </label>
                <input class="form-control" type="number" name="weight" id="" placeholder="Peso" required>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">  
                <label for="">Tamaño: </label>
                <input class="form-control" type="number" name="size" id="" placeholder="Tamaño en cm" required>
            </div>
            <div>
                <label for="">Descripción: </label>
                <textarea class="form-control"  name="description" id="" cols="30" rows="4" required></textarea>
            </div>
        </div><br>
        <div class="d-grid gap-3 d-md-flex justify-content-md-end">
            <input class="btn btn-info" type="reset" value="Restablecer">
            <input class="btn btn-primary" type="submit" value="Guardar">
        </div>
    </form>
</div>