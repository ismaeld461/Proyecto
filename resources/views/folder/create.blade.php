@extends ('layouts.plantillabase')
    @section('content')
        
<form action="{{ route('folder.store') }}" class="form-horizontal" method="post">
                    @csrf
   <div class="container mt-4" >
        <div class="card border-primary mb-3" style="max-width: 38rem;">
            <div class="card-header"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Carpetas</font></font></div>
               <div class="card-body">
                   <div class="row">
                        <div class="col" >
                                  <div class="row">
                                     <div class="col-6 col-md-3 mt-2">
                                         <label class="">Area</label>
                                    </div>
                                    <div class="col-8 ml-8">
                                         <input id="area" name="area" type="checklist" placeholder="deportes" class="form-control">
                                    </div>
                                   </div>
                                 <div class="row">
                                    <div class="col-6 col-sm-3 mt-2"><label>Serie</label></div>
                                        <div class="col-8  mt-2 ">
                                          <input id="serie" name="serie" type="checklist" placeholder="Liga" class="form-control">
                                    </div>
                               </div>
                               <div class="row">
                                    <div class="col-6 col-sm-3 mt-2"><label>Subserie</label></div>
                                        <div class="col-8  mt-2">
                                             <input id="subserie" name="subserie" type="checklist" placeholder="Economia" class="form-control">
                                        </div>
                                </div>
                               <div class="row">
                                    <div class="col-6 col-sm-3 mt-2"><label>Consecutivo</label></div>
                                        <div class="col-8  mt-2">
                                            <input id="consecutivo" name="consecutivo" type="checklist" placeholder="12-13" class="form-control">
                                    </div>
                                </div>
                                 <div class="row">
                                        <div class="col-6 col-sm-3 mt-2"><label>Folios</label></div>
                                             <div class="col-8  mt-2">  
                                                 <input id="folios" name="folios" type="checklist" placeholder="22" class="form-control">
                                        </div>
                                </div>
                                 <div class="row">
                                        <div class="col-6 col-sm-3 mt-2"><label>N° de carpeta</label></div>
                                          <div class="col-8 mt-2">    
                                              <input id="n_carpeta" name="n_carpeta" type="checklist" placeholder="21" class="form-control">
                                        </div>
                                </div>
                                <div class="row">
                                       <div class="col-6 col-sm-3 mt-2"><label> N° de Caja</label></div>
                                            <div class="col-8  mt-2"> 
                                             <input id="n_caja" name="n_caja" type="checklist" placeholder="2" class="form-control">
                                         </div>
                                </div> 
                               <div class="row">
                                     <div class="col-6 col-sm-3 mt-2"><label>N° de estante</label></div>
                                        <div class="col-8 mt-2"> 
                                            <input id="n_estante" name="n_estante" type="checklist" placeholder="3" class="form-control">
                                    </div>
                                </div>
                               <div class="row">
                                     <div class="col-6 col-sm-3 mt-2"><label>N° de entrepaño</label></div>
                                        <div class="col-8 mt-2"> 
                                            <input id="n_entrepaño" name="n_entrepaño" type="checklist" placeholder="1" class="form-control">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-outline-primary my-2">Guardar</button> 

                            </div>
    </div>
</form>


</div>
@endsection