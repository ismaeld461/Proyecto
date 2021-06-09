@extends ('layouts.plantillabase')
    @section('content')
        
<form action="{{ route('folder.store') }}" class="form-horizontal" method="post">
                    @csrf
   <div class="container mt-4" >
                <div class="card border-primary mb-3" style="max-width: 38rem;">
                    <div class="card-header"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Carpetas</font></font></div>
                        <div class="card-body">
                                <div class="row mt-2 ">
                                        <div class="row">
                                            <div class="col-6 col-sm-3 mt-2"><label>Area</label></div>
                                                <div class="col-6 col-md-4 mt-2">
                                                    <input class="nav-link dropdown-toggle form-select" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" placeholder="Tipo de Area"><font style="vertical-align: inherit;"></font></a>
                                                  <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Area tecnica </font></font></a>
                                                     <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Are  administrativa</font></font></a>
                                                     <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Area financiera</font></font></a>
                                                    <div class="dropdown-divider"></div>
                                                  </div>

                                         </div>

                                       </div>
                                        <div class="row">
                                                     <div class="col-6 col-sm-3 mt-2"><label>Serie</label></div>
                                                <div class="col-6 col-md-4 mt-2">
                                                    <input class="nav-link dropdown-toggle form-select" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" placeholder="Tipo de serie"><font style="vertical-align: inherit;"></font></a>
                                                  <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Convenios </font></font></a>
                                                  </div>
                                            
                                        </div>
                                        <div class="row">
                                                     <div class="col-6 col-sm-3 mt-2"><label>Subserie  </label></div>
                                                <div class="col-6 col-md-4 mt-2">
                                                    <input class="nav-link dropdown-toggle form-select" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" placeholder="Tipo de serie"><font style="vertical-align: inherit;"></font></a>
                                                  <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Liga de beisbol </font></font></a>
                                                     <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Liga de futbol </font></font></a>
                                                     <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Liga de Natacion</font></font></a>
                                                    <div class="dropdown-divider"></div>
                                                     <a class="dropdown-item" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Liga de Basketball</font></font></a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Liga de tenis</font></font></a>
                                                    <div class="dropdown-divider"></div>                                                   
                                                  </div>   
                                        </div>
                                        <div class="row">
                                                     <div class="col-6 col-sm-3 mt-2"><label>Deporte </label></div>
                                                <div class="col-6 col-md-4 mt-2">
                                                    <input class="nav-link dropdown-toggle form-select" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" placeholder="Tipo de serie"><font style="vertical-align: inherit;"></font></a>
                                                  <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Liga de beisbol </font></font></a>
                                                     <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Liga de futbol </font></font></a>
                                                     <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Liga de Natacion</font></font></a>
                                                    <div class="dropdown-divider"></div>
                                                     <a class="dropdown-item" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Liga de Basketball</font></font></a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Liga de tenis</font></font></a>
                                                    <div class="dropdown-divider"></div>                                                   
                                                  </div>   
                                        </div>
                                       </div>
                                       <div class="row">
                                            <div class="col-6 col-sm-3 mt-2"><label>Consecutivo</label></div>
                                                <div class="col-6 col-md-4 mt-2">
                                                    <input id="consecutivo" name="consecutivo" type="checklist" placeholder="Consecutivo" class="form-control">
                                            </div>
                                        </div>
                                         <div class="row">
                                                <div class="col-6 col-sm-3 mt-2"><label>Folios</label></div>
                                                     <div class="col-6 col-md-4 mt-2">  
                                                         <input id="folios" name="folios" type="checklist" placeholder="Folios" class="form-control">
                                                </div>
                                        </div>
                                         <div class="row">
                                                <div class="col-6 col-sm-3 mt-2"><label>N° de carpeta</label></div>
                                                  <div class="col-6 col-md-4 mt-2">    
                                                      <input id="n_carpeta" name="n_carpeta" type="checklist" placeholder="N° de carpeta" class="form-control">
                                                </div>
                                        </div>
                                        <div class="row">
                                               <div class="col-6 col-sm-3 mt-2"><label> N° de Caja</label></div>
                                                    <div class="col-6 col-md-4 mt-2"> 
                                                     <input id="n_caja" name="n_caja" type="checklist" placeholder="N° de Caja" class="form-control">
                                                 </div>
                                        </div>
                                        <div class="row">
                                               <div class="col-6 col-sm-3 mt-2"><label> Vigencia</label></div>
                                                    <div class="col-6 col-md-4 mt-2"> 
                                                     <input id="vigencia" name="vigencia" type="checklist" placeholder="Vigencia" class="form-control">
                                                 </div>
                                        </div> 
                                       <div class="row">
                                             <div class="col-6 col-sm-3 mt-2"><label>N° de estante</label></div>
                                                <div class="col-6 col-md-4 mt-2"> 
                                                    <input id="n_estante" name="n_estante" type="checklist" placeholder="N° de estante" class="form-control">
                                            </div>
                                        </div>
                                       <div class="row">
                                             <div class="col-6 col-sm-3 mt-2"><label>N° de estaentrepaño</label></div>
                                                <div class="col-6 col-md-4 mt-2"> 
                                                    <input id="n_entrepaño" name="n_entrepaño" type="checklist" placeholder="N° de entrepaño" class="form-control">
                                            </div>
                                        </div>

                                    <div class="container mt-4" >
                                        <button type="submit" Action="POST" class="btn btn-primary"> Guardar</button>
                                        <a href="/folder" class="btn btn-danger"> Cancelar</a>
                                    </div>                                                    
                  </div>                                
          
        </div>
    </div>
</form>


</div>
@endsection