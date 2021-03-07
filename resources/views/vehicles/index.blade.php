<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

<div class="container">
<br><br>
    <div class="card">
        <div class="card-header"> 
            <div class="row"> 
                <div class="col-md-8"> 
                    <h3 class="card-title"><b>Listado de vehiculos registrados en la base de datos</b></h3> 
                </div>
                <div class="col-md-4"> 
                    <div class="d-grid gap-3 d-md-flex justify-content-md-end"> 
                        <a class="btn btn-primary" href="{{ route('vehicles.create')}}">+ Nuevo registro</a>
                    </div>    
                </div>
            </div>    
        </div>
        <div class="card-body"> 
            <table class="table table-striped">       
                <thead>
                    <tr>     
                        <th>Vehiculo</th>
                        <th>Información</th>
                        <th>Descripción</th>
                    </tr>    
                </thead>
                <tbody>
                    @forelse ($vehiculos as $vehicle)    
                    <tr>     
                        <td>
                            <a class="btn btn-info small" href="{{ route('vehicles.show', $vehicle->id) }}">
                                <h5>{{ $vehicle->brand }} {{ $vehicle->model }}</h5>
                            </a>
                        </td>
                        <td>
                            <p><b>Número de serie: </b>{{ $vehicle->serialNumber }}</p>
                            <p><b>Color: </b>{{ $vehicle->color }}</p>
                            <p><b>Puertas: </b>{{ $vehicle->numberOfDoors }}</p>
                            <p><b>Asientos: </b>{{ $vehicle->numberOfSeats }}</p>
                            <p class="text-uppercase"><b class="text-capitalize">Matricula: </b>{{ $vehicle->carRegistration }}</p>
                        </td>
                        <td><p>{{ $vehicle->description }}</p></td>
                    @empty
                        <h1>La tabla no tiene datos</h1>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div> 
    </div>
</div>