<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

<div class="container">
<br><br>
    <div class="card">
        <div class="card-header"> 
            <div class="row"> 
                <div class="col-md-8"> 
                    <h3 class="card-title"><b>Listado de propiedades registradas en la base de datos</b></h3> 
                </div>
                <div class="col-md-4"> 
                    <div class="d-grid gap-3 d-md-flex justify-content-md-end"> 
                        <a class="btn btn-primary" href="{{ route('propertys.create')}}">+ Nuevo registro</a>
                    </div>    
                </div>
            </div>    
        </div>
        <div class="card-body"> 
            <table class="table table-striped">       
                <thead>
                    <tr>     
                        <th>Inmueble</th>
                        <th>Localización</th>
                        <th><Cap>Información</Cap></th>
                    </tr>    
                </thead>
                <tbody>
                    @forelse ($propiedades as $property)    
                    <tr>     
                        <td>
                            <a class="btn btn-info small" href="{{ route('propertys.show', $property->id) }}">
                                <h5>{{ $property->category}}</h5>
                            </a>
                        </td>
                        <td>
                            <p><b>Estado: </b>{{ $property->state }}</p>
                            <p><b>Municipio: </b>{{ $property->municipality }}</p>
                            <p><b>Locacalidad: </b>{{ $property->town }}</p>
                            <p><b>Dirección: </b>{{ $property->direction }}</p>
                        </td>
                        <td>
                            <p><b>Propietario: </b>{{ $property->owner }}</p>
                            <p><b>Contacto: </b>{{ $property->contactNumber }}</p>
                            <p><b>Precio: </b>{{ $property->price }}</p>
                            <p><b>Habitaciones: </b>{{ $property->numberOfRooms }}</p>
                            <p><b>Baños: </b>{{ $property->numberOfBathrooms }}</p>
                            <p><b>Comentario: </b>{{ $property->comment }}</p>
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