
@extends('layouts.admin')

@section('titulo')
    <div class="col-sm-6">
        <h1 class="m-0">Empleados</h1>
    </div>
@endsection

@section('navegacion')
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="home">Home</a></li>
            <li class="breadcrumb-item"><a href="empleados">Empleados</a></li>

        </ol>
    </div>
@endsection

@section('contenido')
<div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Empleados</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">


            <div class="row justify-content-center">
                <div class="col-md-12">
<table id="tablaDetalle" class="table table-bordered table-condensed table-hover">
    <thead>
        <tr>
            <th>Foto</th>
            <th>Código</th>
            <th>Dni</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Fecha de Nacimiento</th>
            <th>Opciones</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($empleados as $empleado)
            <tr> 
                <td>
                <img 
                    src="{{asset('imagenes/empleados/'.$empleado->foto_perfil)}}"
                    alt="nada que mostrar"
                    class="img-thumbnail img-responsive"
                    height="100px"
                    width="100px"
                    style="display: block; margin: auto;"
                >
                </td>       
                <td>{{$empleado->codigo_tecnico}}</td>
                <td>{{$empleado->dni}}</td>
                <td>{{$empleado->nombre}}</td>
                <td>{{$empleado->apellido}}</td>
                <td>{{$empleado->nacimiento}}</td>
                <td style="text-align: center" colspan="1">
                    <a data-backdrop="static" data-keyboard="false" data-target="#modal-delete-{{ $empleado->id }}" data-toggle="modal">
                        <button title="eliminar" class="btn btn-danger btn-responsive">
                            <i class="fa fa-trash"></i>
                        </button>
                    </a> 
                </td>
            </tr>
            @include('empleados.modaldelete')  
        @endforeach
    </tbody>    
</table>
</div>
</div>
</div>


@endsection


@push('scripts')
<script>
        $(document).ready(function() {


        $('#tablaDetalle').DataTable({
            "aaSorting":[],
            "language":{
                "info":"_TOTAL_ registros",
                "search": "Buscar",
                "paginate": {
                    "next":"Siguiente",
                    "previous":"Anterior"
                },
                "lengthMenu":'Mostrar <select>'+
                    '<option value="5">5</option>'+
                    '<option value="10">10</option>'+
                    '<select> registros',
                "loadingRecords":"Cargando...",
                "processing":"Procesando...",
                "emptyTable":"No hay datos",
                "zeroRecords":"No hay coincidencias",
                "infoEmpty":"",
                "infoFiltered":""

            },
            "pageLength" : 5,
            "lengthMenu": "[[5, 10], [5, 10]]"
        });


    });
</script>

@endpush