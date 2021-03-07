<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

<div class="container">
<br><br>
    <div class="card">
        <div class="card-header"> 
            <div class="row"> 
                <div class="col-md-8"> 
                    <h3 class="card-title"><b>Listado de productos registrados en la base de datos</b></h3> 
                </div>
                <div class="col-md-4"> 
                    <div class="d-grid gap-3 d-md-flex justify-content-md-end"> 
                        <a class="btn btn-primary" href="{{ route('products.create')}}">+ Nuevo registro</a>
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
                    @forelse ($productos as $product)    
                    <tr>     
                        <td>
                            <a class="btn btn-info small" href="{{ route('products.show', $product->id) }}">
                                <h5>{{ $product->kind }} {{ $product->name }}</h5>
                            </a>
                        </td>
                        <td>
                            <p><b>Marca: </b>{{ $product->brand }}</p>
                            <p><b>Precio: </b>$ {{ $product->price }}</p>
                            <p><b>Tamaño: </b>{{ $product->size }}</p>
                            <p><b>Cantidad en gramos: </b>{{ $product->quantity }}</p>
                            <p><b>Expiración: </b>{{ $product->expiration }}</p>
                        </td>
                        <td><p>{{ $product->description }}</p></td>
                    @empty
                        <h1>La tabla no tiene datos</h1>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div> 
    </div>
</div>