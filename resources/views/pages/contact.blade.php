@extends('layoutss.app',['title'=>'Contact','etat'=>'active'])

@section('content')

	<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4" id="main">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Contact</li>
              </ol>
            </nav>
          </div>

          <div class="col-md-12">
          
          <form action="{{ route('contact') }}" method="POST">
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
              <textarea class="form-control {{ $errors->has('message')?'is-invalid': '' }}" id="message" name="message" rows="7">{{ old('message') }}</textarea>
                        {!! $errors->first('message', '<span class="invalid-feedback">:message</span>') !!}
           </div>
          <button type="submit" class="btn btn-primary btn-lg btn-block">Envoyer&raquo;</button>
            
          </form>
        </div>
          
    </main>

@endsection