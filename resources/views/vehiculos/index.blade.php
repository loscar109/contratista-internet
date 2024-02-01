
@extends('layouts.admin')

@section('titulo')
    <div class="col-sm-6">
        <h1 class="m-0">Vehiculos</h1>
    </div>
@endsection

@section('navegacion')
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="home">Home</a></li>
            <li class="breadcrumb-item"><a href="vehiculos">Vehiculos</a></li>

        </ol>
    </div>
@endsection

@section('contenido')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Vehiculos</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    @livewire('vehiculos.mostrar-vehiculos')
                </div>
            </div>
        </div>
    </div>
</div>


@endsection


@push('scripts')


@endpush