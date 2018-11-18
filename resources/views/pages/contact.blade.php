@extends('layouts.app',['title'=>'Contact','etat'=>'active'])

@section('content')

	<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4" id="main">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2"><i class="fa fa-paper-plane"></i>Contact</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Share</button>
                <button class="btn btn-sm btn-outline-secondary">Export</button>
              </div>
              <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
              </button>
            </div>
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