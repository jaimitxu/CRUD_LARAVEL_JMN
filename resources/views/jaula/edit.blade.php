@extends('layouts.app')

@section('template_title')
    Update Jaula
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Jaula</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('jaulas.update', $jaula->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('jaula.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
