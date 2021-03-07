<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

<div class="container">
<br><br>
    <div class="card">
        <div class="card-header"> 
            <div class="row"> 
                <div class="col-md-8"> 
                    <h3 class="card-title"><b>Listado de zapatos registrados en la base de datos</b></h3> 
                </div>
                <div class="col-md-4"> 
                    <div class="d-grid gap-3 d-md-flex justify-content-md-end"> 
                        <a class="btn btn-primary" href="{{ route('shoeshops.create')}}">+ Nuevo registro</a>
                    </div>    
                </div>
            </div>    
        </div>
        <div class="card-body"> 
            <table class="table table-striped">       
                <thead>
                    <tr>     
                        <th>Zapatos</th>
                        <th>Información</th>
                        <th>Descripción</th>
                    </tr>    
                </thead>
                <tbody>
                    @forelse ($zapatos as $shoeshop)    
                    <tr>     
                        <td>
                            <a class="btn btn-info small" href="{{ route('shoeshops.show', $shoeshop->id) }}">
                                <h5>{{ $shoeshop->category}} {{ $shoeshop->brand}}</h5>
                            </a>
                        </td>
                        <td>
                            <p><b>Modelo: </b>{{ $shoeshop->model }}</p>
                            <p><b>Talla: </b>{{ $shoeshop->size }}</p>
                            <p><b>Color: </b>{{ $shoeshop->color }}</p>
                            <p><b>Precio: </b>$ {{ $shoeshop->price }}</p>
                        </td>
                        <td>
                            <p><b>Descripción: </b>{{ $shoeshop->description }}</p>
                            <p><b>Comentario: </b>{{ $shoeshop->comment }}</p>
                        </td>
                    @empty
                        <h1>La tabla no tiene datos</h1>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div> 
    </div>
</div>