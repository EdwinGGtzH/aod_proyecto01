<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

<div class="container">
<br><br>
    <div class="card">
        <div class="card-header"> 
            <div class="row"> 
                <div class="col-md-8"> 
                    <h3 class="card-title"><b>Listado de mascotas registradas en la base de datos</b></h3> 
                </div>
                <div class="col-md-4"> 
                    <div class="d-grid gap-3 d-md-flex justify-content-md-end"> 
                        <a class="btn btn-primary" href="{{ route('pets.create')}}">+ Nuevo registro</a>
                    </div>    
                </div>
            </div>    
        </div>
        <div class="card-body"> 
            <table class="table table-striped">       
                <thead>
                    <tr>     
                        <th>Mascota</th>
                        <th>Información</th>
                        <th>Descripción</th>
                    </tr>    
                </thead>
                <tbody>
                    @forelse ($mascotas as $pet)    
                    <tr>     
                        <td>
                            <a class="btn btn-info small" href="{{ route('pets.show', $pet->id) }}">
                                <h5>{{ $pet->categoty }} {{ $pet->name }}</h5>
                            </a>
                        </td>
                        <td>
                            <p><b>Raza: </b>{{ $pet->race }}</p>
                            <p><b>Sexo: </b>{{ $pet->sex }}</p>
                            <p><b>Edad: </b>{{ $pet->age }}</p>
                            <p><b>Peso: </b>{{ $pet->weight }} kg</p>
                            <p><b>Tamaño: </b>{{ $pet->size }} cm</p>
                        </td>
                        <td><p>{{ $pet->description }}</p></td>
                    @empty
                        <h1>La tabla no tiene datos</h1>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div> 
    </div>
</div>