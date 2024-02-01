<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-delete-{{ $empleado->id }}">
    <form action="{{ url('empleados/'.$empleado->id) }}" method="post">
        @csrf
        @method('DELETE')

        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: red">
                    <h3 class="modal-title" style="color: white">
                        <i style="color: white" class="fa fa-exclamation-triangle" aria-hidden="true"></i> Eliminar
                    </h3>
                </div>
                <div class="modal-body" style="color: black">
                    <p style="font-size:120%">¿Desea dar de baja a la siguiente persona <b>{{ $empleado->apellido }}</b>?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-danger">Confirmar</button>
                </div>
            </div>
        </div>
    </form>
</div>
