@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(Auth::user()->admin_type == 1)
                        Super Admin
                    @else
                      Admin
                    @endif

                    <br>

                    @if(Auth::user()->remember_token == '')
                    @php
                      Session::flash('message', 'please verify');
                      Session::flash('alert-class', 'alert-danger');

                    @endphp
                      <script type="text/javascript">
                        window.location.href = "{{url('verify')}}"
                      </script>
                    @else
                        verified
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
