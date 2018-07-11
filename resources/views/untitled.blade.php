@extends('layouts.main')
@section('content')
  
  <br><br><br><br>
  <center>
    <div class="row">
      <div class="col-md-10 col-md-offset-1"> 
        @foreach ($escritura as $informacion)          
          <div class="col-sm-3 col-sm-6">                                                
            <div class="card mb-3">
              <h3 class="card-header text-white escritura"> Modelo <br>{{ $informacion->catalogo }}-{{ $informacion->modelo }} </h3>  
              <img src="{{ asset('img/escritura/'.$informacion->modelo.'/'.$informacion->modelo.'_'.$informacion->color.'_lrg.jpg') }}" alt="Card image" style="height: 200px; width: 100%; display: block;" />
              <footer>
                <button 
                  type="button" 
                  class="button pull-right" 
                  data-toggle="modal"
                  data-target="#view-modal"
                  data-url="">                      
                  <i class="far fa-eye"></i>
                </button>
              </footer>
            </div>  
          </div>
        @endforeach 
      </div>        
    </div>    
  </center>
  <br><br><br><br>
 
@endsection