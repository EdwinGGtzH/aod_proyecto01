<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

<div class="container">
<br><br>
    <div class="card">
        <div class="card-header"> 
            <div class="row"> 
                <div class="col-md-8"> 
                    <h3><b>Inmueble: {{ $property->category }}</b></h3> 
                </div>
                <div class="col-md-4"> 
                    <div class="d-grid gap-3 d-md-flex justify-content-md-end"> 
                        <a class="btn btn-secondary" href="{{ route('propertys.index')}}"> <- Regresar</a>
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
                        <th>Información</th>
                    </tr>    
                </thead>
                <tbody>   
                    <tr>
                        <td><p>Imagen</p></td>       
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
                    </tr>
                </tbody>
            </table>
        </div> 
        <div class="card-footer">
            <div class="col">
                <div class="d-grid gap-3 d-md-flex justify-content-md-end"> 
                    <a class="btn btn-primary" href="{{ route('propertys.edit', $property->id)}}"> + Editar</a>
                    <form action="{{ route('propertys.destroy', $property->id)}}" method="post">
                        @csrf 
                        @method('DELETE')
                        <input class="btn btn-danger" type="submit" value="Eliminar">
                    </form>
                </div>                   
            </div>
        </div>
    </div>
</div>