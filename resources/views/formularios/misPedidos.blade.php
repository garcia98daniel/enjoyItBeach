   <style>
     .contenedor{
     }

     .card{
      background: white;
      border-radius: 6px;
      border: 2px solid #3c8dbc;
      padding: 8px;
     }

     .contenedor_datos{
      display: flex;
      justify-content: space-between;
      margin: 13px 0;
     }

     .card-title{
      border-bottom: 1px solid gray;

     }

     .aprobado{
      width: 80%;
      margin: auto;
     }
   </style>

   <div class="box-header">
      <h3 class="box-title">Mis reservas</h3>
    </div><!-- /.box-header -->
    <div class="col-xs-12 contenedor" style="height: 150px; overflow-y: scroll;">
      @if(count($reservas)>0)
       <table class="table table-striped" style="border: 2px solid #3c8dbc;">
        <thead>
          <tr >
            <th class="text-center" scope="col">#</th>
            <th class="text-center" scope="col">Fecha</th>
            <th class="text-center" scope="col">Hora inicio</th>
            <th class="text-center" scope="col">Duracion</th>
            <th class="text-center" scope="col">Carpa</th>
            <th class="text-center" scope="col">Realizada el</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($reservas as $reserva)
          <tr class="text-center">
            <th scope="row">1</th>
            <td>{{$reserva->fecha}}</td>
            <td>{{$reserva->horaInicio}}</td>
            <td>{{$reserva->duracion}}</td>
            <td>{{$reserva->idCarpa}}</td>
            <td>{{$reserva->created_at}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
      @else
      <h2>No tiene ninguna reserva</h2>
      @endif
    </div>
<div style="margin-top: 100px;">
    <div class="box-header">
      <h3 class="box-title">Mis pedidos</h3>
    </div><!-- /.box-header -->
    <div class="col-xs-12 contenedor">
    @if(count($pedidos)>0)
      <div id="notificacion_resul_fanu"></div> 
      @foreach ($pedidos as $pedido)
       <div class="card text-center col-xs-12 col-md-3" style="margin: 10px;">
          <div class="card-body">
            <h5 class="card-title"> <strong>{{Str::upper($pedido->nombre)}}</strong></h5>

            <div class="contenedor_datos">
              <strong>Cantidad</strong><p class="card-text"><strong>{{$pedido->cantidad}}</strong></p>
            </div>

            <div class="contenedor_datos">
              <strong>Total</strong>
              <div style="display: flex;">
                <h4 style="margin: 0; padding: 0;">{{$pedido->precio}}</h4><strong>COP</strong>
              </div>
            </div>

            <div class="contenedor_datos">
              <strong style="margin: 0; padding: 0;">Pedido el</strong><h5 style="margin: 0; padding: 0;">{{$pedido->created_at}}</h5>
            </div>

            <div class="contenedor_datos">
              <strong>Mi carpa</strong><p class="card-text"><strong>{{$pedido->idCarpa}}</strong></p>
            </div>
            @if($pedido->confirmado == 1)
              <div class="aprobado">Aprobado</div>
            @else
              <div class="rechazado">Sin aprobar</div>
            @endif
          </div>
       </div>
      @endforeach
    @else
      <h2>No tiene ningun pedido</h2>
    @endif  
    </div>
</div>