<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

<div class="container">
    <h1><b>Actualizar datos de un producto</b></h1>
    <form action="{{ route('products.update', $product->id) }}" method="post">
        @csrf
        @method('PUT')

        <input type="hidden" name="id">
        <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Marca: </label>
                <input class="form-control" type="text" name="brand" value="{{ $product->brand }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Tipo: </label>
                <input class="form-control" type="text" name="kind" value="{{ $product->kind }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Nombre: </label>
                <input class="form-control" type="text" name="name" value="{{ $product->name }}" required>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Precio: </label>
                <input class="form-control" type="number" name="price" value="{{ $product->price }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">  
                <label for="">Tamaño: </label>
                <input class="form-control" type="text" name="size" value="{{ $product->size }}" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Cantidad: </label>
                <input class="form-control" type="number" name="quantity" value="{{ $product->quantity }}" required>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">  
                <label for="">Expiración: </label>
                <input class="form-control" type="date" name="expiration" value="{{ $product->expiration }}" required>
            </div>
            <div>
                <label for="">Descripción: </label>
                <textarea class="form-control"  name="description" id="" cols="30" rows="4" required>{{ $product->description }}</textarea>
            </div>
        </div><br>
        <div class="d-grid gap-3 d-md-flex justify-content-md-end">
            <input class="btn btn-info" type="reset" value="Restablecer">
            <input class="btn btn-primary" type="submit" value="Guardar">
        </div>
    </form>
</div>