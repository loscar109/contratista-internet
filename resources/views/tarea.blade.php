<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/autofill/2.6.0/css/autoFill.bootstrap5.min.css">
</head>
<body>
    
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

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.full.min.js"></script>
<script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.8/js/dataTables.bootstrap5.min.js"></script>
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

</body>
</html>
