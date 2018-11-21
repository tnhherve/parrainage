@extends('layouts.app',['title'=>'Home','etat'=>'active'])

@section('content')

	<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4" id="main">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Parrainage</a></li>
                <li class="breadcrumb-item active" aria-current="page">Cycle</li>
              </ol>
            </nav>
          </div>
      <div class="col-md-12">
        <form action="{{ route('parrainage') }}" method="POST">
          <div class="form-group">
            <label class="mr-sm-12 sr-only" for="cycle">Preference</label>
            <select class="custom-select mr-sm-12" id="cycle" name="cycle">
              <option selected>Cycle</option>
              <option value="cycle1">Cycle I</option>
              <option value="cycle2">Cycle II</option>
            </select>
          </div>
          <div class="form-group">
            <a href="{{ route('parrainage') }}" type="button" class="btn btn-primary btn-lg btn-block">Suivant&raquo;</a>
          </div>
        </form>
      </div>
  </main>

@endsection