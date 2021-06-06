@extends('layouts.app')

@section('template_title')
    {{ $jaula->name ?? 'Show Jaula' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Jaula</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('jaulas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Animal:</strong>
                            {{ $jaula->animal }}
                        </div>
                        <div class="form-group">
                            <strong>Tamaño:</strong>
                            {{ $jaula->tamaño }}
                        </div>
                        <div class="form-group">
                            <strong>Hábitat:</strong>
                            {{ $jaula->hábitat }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
