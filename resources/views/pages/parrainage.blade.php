@extends('layouts.app',['title'=>'Home','etat'=>'active'])

@section('content')

	<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4" id="main">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <nav aria-label="breadcrumb">
               <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="#">Parrainage</a></li>
               <li class="breadcrumb-item"><a href="{{ route('cycle') }}">Cycle</a></li>
               <li class="breadcrumb-item active" aria-current="page">Cycle II</li>
              </ol>
            </nav>
          </div>

    <div class="col-md-12" style="margin-bottom: 15px; ">      
      <div class="row">
        <div class="col-md-2">
           <div class="col-auto my-1">
            <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
              <option selected>Option</option>
              <option value="gelo">GELO</option>
              <option value="reseaux">RESEAUX</option>
              <option value="crypto">CRPYTO</option>
              <option value="tele">TELE</option>
            </select>
          </div>
        </div>
        <div class="col-md-5">
          <div class="card" style="width: 18rem;">
            <div class="card-header">
              Liste des parrains
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Cras justo odio</li>
              <li class="list-group-item">Dapibus ac facilisis in</li>
              <li class="list-group-item">Vestibulum at eros</li>
            </ul>
          </div>
        </div>
        <div class="col-md-5">
          <div class="card" style="width: 18rem;">
            <div class="card-header">
              Liste des filleules
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Cras justo odio</li>
              <li class="list-group-item">Dapibus ac facilisis in</li>
              <li class="list-group-item">Vestibulum at eros</li>
            </ul>
          </div>
        </div>
      </div> 
    </div> 

    <div class="col-md-12">
      <div class="row">
        <div class="col-md-6">
        <div class="card" style="width: 25rem;">
          <img class="card-img-top" src="/img/avatar7.png" height="200" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">TNH</p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card" style="width: 25rem;">
            <img class="card-img-top" src="/img/logo3.png" height="200" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Oudjira</p>
            </div>
          </div>
        </div>
      </div>
    </div>  
  </main>

@endsection