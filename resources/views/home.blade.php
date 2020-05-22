@extends("app")
{{-- @extends('layouts.app') --}}

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1>Dashboard</h1>
                </div>

                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2>Logged in as "{{ Auth::user()->name }}" </h2>
                    <h3>Role: {{ Auth::user()->role }} </h3><br>
                    <h4>List all <a href="/owners/">owners</a></h4>
                    <h4>List all <a href="/animals/">animals</a></h4>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
