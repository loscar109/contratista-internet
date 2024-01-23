@extends('layouts.admin')

@section('titulo')
    <div class="col-sm-6">
        <h1 class="m-0">Home</h1>
    </div>
@endsection


@section('navegacion')
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="home">Home</a></li>
        </ol>
    </div>
@endsection

@section('contenido')
    <p>Soy parte del home</p>
@endsection


@push('scripts')

@endpush