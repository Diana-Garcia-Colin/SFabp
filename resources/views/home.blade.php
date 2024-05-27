@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    
                </div>
                
                <div class="container mt-5">
                    <button type="button" class="btn btn-primary" onclick="redirectToRoute()">
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
                    window.location.href = '{{ route('lotes.index') }}';
                    window.location.href = '{{ route('cantidades.index') }}';

                    }
                    
                </script>
            </div>
        </div>
    </div>
</div>
@endsection
