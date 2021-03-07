<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

<div class="container">
    <h1><b>Formulario para registrar un producto</b></h1>
    <form action="{{ route('products.store') }}" method="post">
        @csrf
        <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Marca: </label>
                <input class="form-control" type="text" name="brand" id="" placeholder="Marca" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Tipo: </label>
                <input class="form-control" type="text" name="kind" id="" placeholder="Tipo de producto" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Nombre: </label>
                <input class="form-control" type="text" name="name" id="" placeholder="Nombre" required>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Precio: </label>
                <input class="form-control" type="number" name="price" id="" placeholder="Precio" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">  
                <label for="">Tamaño: </label>
                <input class="form-control" type="text" name="size" id="" placeholder="Tamaño del producto" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Cantidad: </label>
                <input class="form-control" type="number" name="quantity" id="" placeholder="Cantidad en gramos" required>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">  
                <label for="">Expiración: </label>
                <input class="form-control" type="date" name="expiration" id=""  required>
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