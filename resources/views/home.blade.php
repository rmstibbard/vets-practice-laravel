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

                    <h2>Logged in as
                        {{ ucfirst(Auth::user()->name) }} ({{ Auth::user()->role }})
                    </h2>
                    <br>

                    <p>
                        <a href="/owners/">
                            <button class="btn btn-outline-dark" style="margin-right: 20px">
                                LIST ALL OWNERS
                            </button>
                        </a>

                        <a href="/animals/">
                            <button class="btn btn-outline-dark">
                                LIST ALL ANIMALS
                            </button>
                        </a>
                    </p>

                </div>
            </div>
        </div>
    </div>

</div>
@endsection

