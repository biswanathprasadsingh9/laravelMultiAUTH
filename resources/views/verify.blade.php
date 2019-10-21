@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>Verify</h1>
    @if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif
  </div>
@endsection
