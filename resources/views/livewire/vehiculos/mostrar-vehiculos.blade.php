<div>
    <h1>estoy mejor organizado</h1>
    {{$search}}
  <br>
    <input name="search" wire:model.live="search" type="text"> 
      @if ($vehiculos->count())
      <table class="table">
        <thead>
          <tr>
            <th scope="col">patente</th>
            <th scope="col">marca</th>
            <th scope="col">modelo</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($vehiculos as $vehiculo)
            <tr>
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
