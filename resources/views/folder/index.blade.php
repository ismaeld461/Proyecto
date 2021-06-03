<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@extends('layouts.app')
	@section('content')
	<table  class="table table-dark table-striped mt-4">
		<thead>
			<tr>	
				<td scope="col">Area</td>
				<td scope="col">Serie</td>
				<td scope="col">Subserie</td>
				<td scope="col">Consecutivo</td>
				<td scope="col">Fecha</td>
				<td scope="col">Folios</td>
			</tr>
		</thead>
		<tbody>
			@foreach ($folders as $folder)
				<tr>
					<td>{{$folder->area}}</td>
					<td>{{$folder->serie}}</td>
					<td>{{$folder->subserie}}</td>
					<td>{{$folder->consecutivo}}</td>
					<td>{{$folder->fecha}}</td>
					<td>{{$folder->folios}}</td>
					<td>
						<a href="" class="btn btn-success">Editar</a>
						<button  class="btn btn-primary">Borrar</button>
					</td>
				</tr>	
			@endforeach
		</tbody>
		<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
 Crear folder
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear un nuevo folder</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <form action="{{ url('folder') }}" class="form-horizontal" method="post">
                    @csrf
                    <fieldset>
                        <legend class="text-center header">Registrar un nuevo folder</legend>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="area" name="area" type="checklist" placeholder="Area" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="serie" name="serie" type="text" placeholder="Serie" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="subserie" name="subserie" type="text" placeholder="Subserie" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="onsecutivo" name="consecutivo" type="text" placeholder="Consecutivo" class="form-control">
                            </div>
                        </div>
                          <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="fecha" name="fecha" type="date" placeholder="Fecha" class="form-control">
                            </div>
                        </div>
                          <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="folios" name="folios" type="text" placeholder="Folios" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-success btn-lg">Guardar</button>
                                
                            </div>
                        </div>
                    </fieldset>
                </form>
      </div>
      <div class="modal-footer">
       
      </div>
    </div>
  </div>
</div>

@endsection