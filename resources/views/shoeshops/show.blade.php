<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

<div class="container">
<br><br>
    <div class="card">
        <div class="card-header"> 
            <div class="row"> 
                <div class="col-md-8"> 
                    <h3><b>Zapato: {{ $shoeshop->category }} {{ $shoeshop->brand }}</b></h3> 
                </div>
                <div class="col-md-4"> 
                    <div class="d-grid gap-3 d-md-flex justify-content-md-end"> 
                        <a class="btn btn-secondary" href="{{ route('shoeshops.index')}}"> <- Regresar</a>
                    </div>    
                </div>
            </div>    
        </div>
        <div class="card-body"> 
            <table class="table table-striped">       
                <thead>
                    <tr>     
                        <th>Zapato</th>
                        <th>Información</th>
                        <th>Descripción</th>
                    </tr>    
                </thead>
                <tbody>   
                    <tr>
                        <td><p>Imagen</p></td>
                        <td>
                            <p><b>Modelo: </b>{{ $shoeshop->model }}</p>
                            <p><b>Talla: </b>{{ $shoeshop->size }}</p>
                            <p><b>Color: </b>{{ $shoeshop->color }}</p>
                            <p><b>Precio: </b>$ {{ $shoeshop->price }}</p>
                        </td>
                        <td>
                            <p><b>Description: </b>{{ $shoeshop->description }}</p>
                            <p><b>Comentario: </b>{{ $shoeshop->comment }}</p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div> 
        <div class="card-footer">
            <div class="col">
                <div class="d-grid gap-3 d-md-flex justify-content-md-end"> 
                    <a class="btn btn-primary" href="{{ route('shoeshops.edit', $shoeshop->id)}}"> + Editar</a>
                    <form action="{{ route('shoeshops.destroy', $shoeshop->id)}}" method="post">
                        @csrf 
                        @method('DELETE')
                        <input class="btn btn-danger" type="submit" value="Eliminar">
                    </form>
                </div>                   
            </div>
        </div>
    </div>
</div>