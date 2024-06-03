@extends('layouts.app')
<style>
.btn-custom {
        background-color: #EC92DF;
        color: white;
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        transition: background-color 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #EC92DF;
            color: white;
        }

        .navbar-nav {
            display: flex;
            justify-content: center;
            align-items: center;
            list-style: none;
            padding: 0;
        }

        .nav-item {
            margin: 0 10px;
        }
    </style>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">{{ __('Dashboard') }}</div>
<ul class="navbar-nav mr-auto flex-row">
<li class="nav-item mx-2">
            <a class="nav-link" href="{{ route('home') }}">{{ __('Home') }}</a>
        </li>
        <li class="nav-item mx-2">
            <a class="nav-link" href="{{ route('personas.index') }}">{{ __('Personas') }}</a>
        </li>
        <li class="nav-item mx-2">
            <a class="nav-link" href="{{ route('lotes.index') }}">{{ __('Lotes') }}</a>
        </li>
        <!-- Agrega más elementos de navegación aquí -->
        <li class="nav-item mx-2">
            <a class="nav-link" href="{{ route('cantidades.index') }}">{{ __('Cantidades') }}</a>
        </li>
    <li class="nav-item mx-2">
        <a class="nav-link btn-custom" href="{{ route('productos.index') }}">{{ __('Productos') }}</a>
    </li>
</ul>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    
                </div>
                
                <!--<div class="container mt-5">
                    <button type="button" class="btn btn-primary" onclick="redirectToRoute()"  href="{{ route('home') }}">
                    {{ __('Personas') }}
                    </button>
                </div>
                <div class="container mt-5">
                    <button type="button" class="btn btn-primary" onclick="redirectToRoute()">
                    {{ __('Lotes') }}
                    </button>
                </div>

                <div class="container mt-5">
                    <button type="button" class="btn btn-primary" onclick="redirectToRoute()">
                    {{ __('Cantidades') }}
                    </button>
                </div>
                <script>
                    function redirectToRoute() {
                    window.location.href = '{{ route('personas.index') }}';
                   window.location.href = '{{ route('cantidades.index') }}'; 
                   window.location.href = '{{ route('lotes.index') }}';
                    

                    }
                    
                </script>-->
            </div>
        </div>
    </div>
</div>
@endsection
