@extends('layoutss.app',['title'=>'Contact','etat'=>'active'])

@section('content')

	<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4" id="main">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">User</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add User</li>
              </ol>
            </nav>
            
          </div>

          <div class="col-md-12" style="margin-top: 10px;">
          
          <form action="" method="POST">
                    @csrf
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control {{ $errors->has('name')?'is-invalid': '' }}" id="name" name="name" value="{{ old('name') }}">
                        {!! $errors->first('name', '<span class="invalid-feedback">:message</span>') !!}
           </div>
           <div class="form-group">
              <label for="email">E-mail</label>
              <input type="email" class="form-control {{ $errors->has('email')?'is-invalid': '' }}" id="email" name="email" value="{{ old('email') }}">
                        {!! $errors->first('email', '<span class="invalid-feedback">:message</span>') !!}
           </div>
           <div class="form-group">
              <label for="phone">Phone</label>
              <input type="number" class="form-control {{ $errors->has('email')?'is-invalid': '' }}" id="phone" name="phone" value="{{ old('email') }}">
                        {!! $errors->first('email', '<span class="invalid-feedback">:message</span>') !!}
           </div>
           
           <div class="form-group">
            <label for="option">Cycle</label>
              <select class="form-control" id="cycle" name="cycle">
                <option value="cycle1">Cycle I</option>
                <option value="cycle2">Cycle II</option>
              </select>
            </div>

            <div class="form-group">
            <label for="option">Niveau</label>
              <select class="form-control" id="niveau" name="niveau">
                <option value="niveau1">Niveau I</option>
                <option value="niveau2">Niveau II</option>
              </select>
            </div>

           <div class="form-group">
            <label for="option">Option</label>
              <select class="form-control" id="option" name="option">
                <option value="GELO">Génie Logiciel</option>
                <option value="CRYPTO">Cryptographie - SI</option>
                <option value="RESEAU">Réseaux</option>
                <option value="TELE">Télécommunication</option>
              </select>
          </div>
          <div class="form-group">
            <label for="image">Profil</label>
            <input type="file" class="form-control-file" id="image" name="image">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block">Envoyer&raquo;</button>
          </div>
            
          </form>
        </div>
          
    </main>

@endsection