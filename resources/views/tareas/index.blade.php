
@extends('layouts.admin')

@section('contenido')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <label for="tarea">
                Tareas
            </label>
            <select 
                name="tarea"
                class="tarea_id form-control"
                id="tarea"
                data-placeholder="Choose one thing"
                required
            >
                <option 
                    value="0" 
                    disabled="true" 
                    selected="true"
                    title="-Seleccione una tarea-"
                >
                    -Seleccione una tarea-
                </option>
                @foreach ($tareas as $tarea)
                    <option 
                        value="{{$tarea->id }}">
                            {{$tarea->codigo . " " . $tarea->nombre}}
                    </option>
                @endforeach
            </select>
        </div>
    </div>



    <table id="tablaDetalle" class="table table-bordered table-condensed table-hover">
        <thead>
            <tr>
                <th>Item</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tareas as $tarea)
                <tr> 
                    <td>{{$tarea->codigo . " - " . $tarea->nombre}}</td>
                </tr>
            @endforeach
        </tbody>        
    </table>






</div>


@endsection


@push('scripts')
<script>
    $(document).ready(function() {
        // Inicializar Select2
        $("#tarea").select2({
            placeholder:'-Seleccione una tarea-',
            width: '100%',
        });

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