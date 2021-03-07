<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

<div class="container">
<br><br>
    <div class="card">
        <div class="card-header"> 
            <div class="row"> 
                <div class="col-md-8"> 
                    <h3><b>Producto: {{ $product->kind }} {{ $product->name }}</b></h3> 
                </div>
                <div class="col-md-4"> 
                    <div class="d-grid gap-3 d-md-flex justify-content-md-end"> 
                        <a class="btn btn-secondary" href="{{ route('products.index')}}"> <- Regresar</a>
                    </div>    
                </div>
            </div>    
        </div>
        <div class="card-body"> 
            <table class="table table-striped">       
                <thead>
                    <tr>     
                        <th>Producto</th>
                        <th>Información</th>
                        <th>Descripción</th>
                    </tr>    
                </thead>
                <tbody>   
                    <tr>
                        <td><p>Imagen</p></td>       
                        <td>
                            <p><b>Marca: </b>{{ $product->brand }}</p>
                            <p><b>Precio: </b>$ {{ $product->price }}</p>
                            <p><b>Tamaño: </b>{{ $product->size }}</p>
                            <p><b>Cantidad: </b>{{ $product->quantity }}</p>
                            <p><b>Expiración: </b>{{ $product->expiration }}</p>
                        </td>
                        <td><p>{{ $product->description }}</p></td>
                    </tr>
                </tbody>
            </table>
        </div> 
        <div class="card-footer">
            <div class="col">
                <div class="d-grid gap-3 d-md-flex justify-content-md-end"> 
                    <a class="btn btn-primary" href="{{ route('products.edit', $product->id)}}"> + Editar</a>
                    <form action="{{ route('products.destroy', $product->id)}}" method="post">
                        @csrf 
                        @method('DELETE')
                        <input class="btn btn-danger" type="submit" value="Eliminar">
                    </form>
                </div>                   
            </div>
        </div>
    </div>
</div>