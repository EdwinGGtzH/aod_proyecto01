<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

<div class="container">
    <h1><b>Actualizar datos de la mascota {{ $pet->category }} {{ $pet->name }}</b></h1>
    <form action="{{ route('pets.update', $pet->id) }}" method="post">
        @csrf
        @method('PUT')

        <input type="hidden" name="id">
        <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Categoria: </label>
                <input class="form-control" type="text" name="category" value="{{ $pet->category }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Nombre: </label>
                <input class="form-control" type="text" name="name" value="{{ $pet->name }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Raza: </label>
                <input class="form-control" type="text" name="race" value="{{ $pet->race }}" required>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Sexo: </label>
                <input class="form-control" type="text" name="sex" value="{{ $pet->sex }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">  
                <label for="">Edad: </label>
                <input class="form-control" type="number" name="age" value="{{ $pet->age }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Peso: </label>
                <input class="form-control" type="number" name="weight" value="{{ $pet->weight }}" required>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">  
                <label for="">Tamaño en cm: </label>
                <input class="form-control" type="number" name="size" value="{{ $pet->size }}" required>
            </div>
            <div>
                <label for="">Descripción: </label>
                <textarea class="form-control"  name="description" id="" cols="30" rows="4" required>{{ $pet->description }}</textarea>
            </div>
        </div><br>
        <div class="d-grid gap-3 d-md-flex justify-content-md-end">
            <input class="btn btn-info" type="reset" value="Restablecer">
            <input class="btn btn-primary" type="submit" value="Guardar">
        </div>
    </form>
</div>