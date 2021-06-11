@extends('layouts.app')
	@section('content')
<body>
<div class="container">
 <table  class="table table-dark table-striped mt-4"> 
    <thead>

            <tr>    
                <td scope="col">Area</td>
                <td scope="col">Serie</td>
                <td scope="col">Subserie</td>
                <td scope="col">Consecutivo</td>
                <td scope="col">Folios</td>
                <td scope="col">N° carpeta</td>
                <td scope="col">N° caja</td>
                <td scope="col">N° estante</td>
                <td scope="col">N° entrepaño</td>

            </tr>
        </thead>
        <tbody>

            @foreach ($folders as $folder)
                <tr>

                    <td>{{$folder->Area}}</td>
                    <td>{{$folder->Serie}}</td>
                    <td>{{$folder->Subserie}}</td>
                    <td>{{$folder->Consecutivo}}</td>
                    <td>{{$folder->Folios}}</td>
                    <td>{{$folder->n_carpeta}}</td>
                    <td>{{$folder->n_caja}}</td>
                    <td>{{$folder->n_estante}}</td>
                    <td>{{$folder->n_entrepaño}}</td>

                    <td>
                        <a href="" class="btn btn-success">Editar</a>
                        <button  class="btn btn-primary">Borrar</button>
                         <a href="/folder.show" class="btn btn-primary">Detalle</a> 

                    </td>
                </tr> 
            @endforeach
        </tbody>            

</div>



    
</table>
   
<div class="card border-secondary mb-3 mt-4" style="max-width: 20rem;">
  <div class="card-body">
<nav class="navbar navbar-light float-right">
  <form class="form-inline">
    Buscar Carpeta
    <div></div>


  </form>
</nav>
  </div>
</div>
</body>       
@endsection