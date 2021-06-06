@extends('layouts.app')

@section('template_title')
    {{ $jaulasCuidadore->name ?? 'Show Jaulas Cuidadore' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Jaulas Cuidadore</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('jaulas-cuidadores.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
