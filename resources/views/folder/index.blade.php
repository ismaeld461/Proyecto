@extends('layouts.app')
	@section('content')
<body>      
    <div class="container" >
            <div class="col">
                <div class="card border-primary mb-3" style="max-width: 100rem;">
                    <div class="card-header"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Carpetas</font></font></div>
                        <div class="card-body">
                            <div class="container" >
                                <div class="row">
                                    <div class="col-6" >
                                  <div class="row">
                                     <div class="col-6 col-md-3 mt-2">
                                         <label class="">Area</label>
                                    </div>
                                    <div class="col-6 col-md-4 mt-2">
                                         <input id="area" name="area" type="checklist" placeholder="Area" class="form-control">
                                    </div>
                                   </div>
                                 <div class="row">
                                    <div class="col-6 col-sm-3 mt-2"><label>Serie</label></div>
                                        <div class="col-6 col-md-4 mt-2">
                                          <input id="serie" name="serie" type="checklist" placeholder="Serie" class="form-control">
                                    </div>
                               </div>
                               <div class="row">
                                    <div class="col-6 col-sm-3 mt-2"><label>Subserie</label></div>
                                        <div class="col-6 col-md-4 mt-2">
                                             <input id="subserie" name="subserie" type="checklist" placeholder="Subserie" class="form-control">
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
                                     <div class="col-6 col-sm-3 mt-2"><label>N° de estante</label></div>
                                        <div class="col-6 col-md-4 mt-2"> 
                                            <input id="n_estante" name="n_estante" type="checklist" placeholder="N° de estante" class="form-control">
                                    </div>
                                </div>
                               <div class="row">
                                     <div class="col-6 col-sm-3 mt-2"><label>N° de estaentrepaño</label></div>
                                        <div class="col-6 col-md-4 mt-2"> 
                                            <input id="n_entrepaño" name="n_estante" type="checklist" placeholder="N° de entrepaño" class="form-control">
                                    </div>
                                </div> 

                                  <form class="d-flex mt-2">
                                    <div class="row">
                                     <div class="form-group has-PRIMARY ">
                                          <input type="text" placeholder="Buscar"  class="form-control is-valid" id="inputValid">
                                          <div class="valid-feedback"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ingrese carpeta </font><font style="vertical-align: inherit;"></font></font></div>
                                    </div>
                                    <div class="col-md-4 ml-2">
                                           <button type="button" class="btn btn-primary ml-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Buscar</font></font></button>
                                    </div>
                                        
                                    </div>
                                
                                  </form>
                             </div>

                                    <div class="col" >
                                          
                                          <div class="valid-feedback"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">¡Éxito! </font><font style="vertical-align: inherit;">Lo has hecho.</font></font></div>                                        <iframe width="400" height="400" src="https://docs.google.com/viewer?url=http://unec.edu.az/application/uploads/2014/12/pdf-sample.pdf&embedded=true"  frameborder="0"></iframe>
                                    </div> 

                                </div>                                                            
                        </div>                                
                     </div>
                </div>
            </div>
        </div>              
</body>       
@endsection