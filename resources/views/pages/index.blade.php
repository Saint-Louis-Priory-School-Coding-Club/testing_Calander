@extends('layouts.app')
@extends('layouts.nav')
@section('headers')
<title>{{config('app.name', 'TC')}}</title>
@endsection

@section('content')
<div class="container">
    <section class="jumbotron text-center">
        <div class="container">
          <h1>Laravel Framework</h1>
          <p class="lead text-muted">A basic overview of the "Laravel" framework</p>
          <p>
            <a href="#" class="btn btn-primary my-2">Login</a>
            <a href="#" class="btn btn-secondary my-2">Sign up</a>
          </p>
        </div>
      </section>
</div>
@endsection