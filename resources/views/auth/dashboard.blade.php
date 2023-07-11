@extends('layout')
  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
  
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                 <div>
                   <h1>Welcom to dashboard<h1><hr>
                 </div>
                 <div>
                   <button><a href="api1view">Fetch Data from Api-1</a></button>
                 </div><br>
                 <div>
                 <button><a href="api2view">Fetch Data from Api-2</a></button>
                 </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection