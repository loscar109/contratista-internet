<div>
    <h1>estoy mejor organizado</h1>
    {{$search}}
  <br>
    <input name="search" wire:model.live="search" type="text"> 
      @if ($vehiculos->count())
      <table class="table">
        <thead>
          <tr>
            <th 
            scope="col"
            style="cursor: pointer;"
            wire:click="order('id')">
            id
            @if ($sort == 'id')

              @if ($direction == 'asc')
                <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
              @else
                <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
              @endif
            @else
              <i class="fas fa-sort float-right mt-1"></i>
            @endif
            </th>
            <th
              scope="col"
              style="cursor: pointer;"
              wire:click="order('patente')">
              patente
              @if ($sort == 'patente')

                @if ($direction == 'asc')
                  <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                @else
                  <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                @endif
              @else
                <i class="fas fa-sort float-right mt-1"></i>
              @endif
            </th>
            <th
            scope="col"
            style="cursor: pointer;"
            wire:click="order('marca')">
            marca
            @if ($sort == 'marca')

              @if ($direction == 'asc')
                <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
              @else
                <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
              @endif
            @else
              <i class="fas fa-sort float-right mt-1"></i>
            @endif
            </th>
            <th
            scope="col"
            style="cursor: pointer;"
            wire:click="order('modelo')">
            modelo
            @if ($sort == 'modelo')

              @if ($direction == 'asc')
                <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
              @else
                <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
              @endif
            @else
              <i class="fas fa-sort float-right mt-1"></i>
            @endif
            </th>
          </tr>
        </thead>
        <tbody>
            @foreach ($vehiculos as $vehiculo)
            <tr>
                <td>{{$vehiculo->id}}</td>
                <td>{{$vehiculo->patente}}</td>
                <td>{{$vehiculo->marca}}</td>
                <td>{{$vehiculo->modelo}}</td>
            </tr>
            @endforeach
        

        </tbody>
      </table>        
      @else
          <div>
            No existen registros coincidentes
          </div>
      @endif
        
</div>
