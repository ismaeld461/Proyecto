@extends ('layouts.plantillabase')
    @section('content')
<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>


<div class="container p-3 my-3 bg-dark text-white" >
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
            
                <form action="{{ route('folder.store') }}" class="form-horizontal" method="post">
                    @csrf
                    <fieldset>
                 <div class="row">
                                     <div class="col-6 col-md-3 mt-2">
                                         <label class="">Area</label>
                                    </div>
                                    <div class="col-6 col-md-4 mt-2">
                                         <input id="area" name="area" type="checklist" placeholder="Area" class="form-control">
                                    </div>
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
                                    <div class="col-6 col-sm-3 mt-2"><label>N° de entrepaño</label></div>
                                     <div class="col-6 col-md-4 mt-2 ">   
                                            <input id="n_entrepaño" name="n_entrepaño" type="checklist" placeholder="N° de entrepaño" class="form-control">
                                     </div> 
                                </div>
                    </fieldset>
          </form>


</div>
@endsection