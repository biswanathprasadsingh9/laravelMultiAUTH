@extends('layouts.app')

@section('content')
<div class="container col-md-5">
  <form onsubmit="return doSomething();">
    {!! csrf_field() !!}
    <div class="form-group">
      <label for="email">Email address:</label>
      <input type="email" class="form-control" id="email" name="email">
    </div>
    <div class="form-group">
      <label for="email">Name:</label>
      <input type="text" class="form-control" id="name" name="name">
    </div>
    <input type="submit" name="submit" value="Submit" class="btn btn-primary">
  </form>
</div>
@endsection

<script>
function doSomething() {

  // e.preventDefault();
  var name = $('#name').val();
  var email = $('#email').val();

  alert(name);

  $.ajax({
      type: 'POST',
      url: host+'/form/submit',
      data: {name:name, email:email},
      success: function( msg ) {
          alert( msg );
      }
  });

    return false;
}
</script>
