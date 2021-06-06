@extends('layouts.app')

@section('template_title')
    {{ $cuidadore->name ?? 'Show Cuidadore' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cuidadore</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cuidadores.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $cuidadore->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $cuidadore->apellidos }}
                        </div>
                        <div class="form-group">
                            <strong>Edad:</strong>
                            {{ $cuidadore->edad }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
