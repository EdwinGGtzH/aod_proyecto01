<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

<div class="container">
    <h1><b>Formulario para registrar los zapatos {{ $shoeshop->category }} {{$shoeshop->brand}}</b></h1>
    <form action="{{ route('shoeshops.update', $shoeshop->id) }}" method="post">
        @csrf
        @method('PUT')

        <input type="hidden" name="id">
        <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Categoria: </label>
                <input class="form-control" type="text" name="category" value="{{ $shoeshop->category }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Marca: </label>
                <input class="form-control" type="text" name="brand" value="{{ $shoeshop->brand }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Modelo: </label>
                <input class="form-control" type="text" name="model" value="{{ $shoeshop->model }}" required>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Talla: </label>
                <input class="form-control" type="number" name="size" value="{{ $shoeshop->size }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">  
                <label for="">Color: </label>
                <input class="form-control" type="text" name="color" value="{{ $shoeshop->color }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Precio: </label>
                <input class="form-control" type="text" name="price" value="{{ $shoeshop->price }}" required>
            </div>
        </div>
        <div>
            <label for="">Descripción: </label>
            <textarea class="form-control"  name="description" id="" cols="30" rows="4" required>{{ $shoeshop->description }}</textarea>
        </div><br>
        <div>
            <label for="">Comentario: </label>
            <input class="form-control" type="text" name="comment" value="{{ $shoeshop->comment }}">
        </div><br>
        <div class="d-grid gap-3 d-md-flex justify-content-md-end">
            <input class="btn btn-info" type="reset" value="Restablecer">
            <input class="btn btn-primary" type="submit" value="Guardar">
        </div>
    </form>
</div>