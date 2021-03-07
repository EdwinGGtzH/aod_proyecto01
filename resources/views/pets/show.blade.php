<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

<div class="container">
<br><br>
    <div class="card">
        <div class="card-header"> 
            <div class="row"> 
                <div class="col-md-8"> 
                    <h3><b> Mascota: {{ $pet->category }} {{ $pet->name }}</b></h3> 
                </div>
                <div class="col-md-4"> 
                    <div class="d-grid gap-3 d-md-flex justify-content-md-end"> 
                        <a class="btn btn-secondary" href="{{ route('pets.index')}}"> <- Regresar</a>
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
                    <tr>
                        <td><p>Imagen</p></td>       
                        <td>
                            <p><b>Raza: </b>{{ $pet->race }}</p>
                            <p><b>Sexo: </b>{{ $pet->sex }}</p>
                            <p><b>Edad: </b>{{ $pet->age }}</p>
                            <p><b>Peso: </b>{{ $pet->weight }} kg</p>
                            <p><b>Tamaño: </b>{{ $pet->size }} cm</p>
                        </td>
                        <td><p>{{ $pet->description }}</p></td>
                    </tr>
                </tbody>
            </table>
        </div> 
        <div class="card-footer">
            <div class="col">
                <div class="d-grid gap-3 d-md-flex justify-content-md-end"> 
                    <a class="btn btn-primary" href="{{ route('pets.edit', $pet->id)}}"> + Editar</a>
                    <form action="{{ route('pets.destroy', $pet->id)}}" method="post">
                        @csrf 
                        @method('DELETE')
                        <input class="btn btn-danger" type="submit" value="Eliminar">
                    </form>
                </div>                   
            </div>
        </div>
    </div>
</div>