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
      <h3 class="box-title">Mis pedidos</h3>
    </div><!-- /.box-header -->
    <div class="col-xs-12 contenedor">
    @if(count($pedidos)>0)
      <div id="notificacion_resul_fanu"></div> 
      @foreach ($pedidos as $pedido)
       <form id="pedidoConfirmado" method="POST"  action="" class="card text-center col-xs-12 col-md-3 form-horizontal form_entrada product_container" style="margin: 10px;">
        <input  type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
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
              <strong>Ubicacion</strong><p class="card-text"><strong>{{$pedido->idCarpa}}</strong></p>
            </div>

            <div class="contenedor_datos">
              <strong>Comprador</strong><p class="card-text"><strong>{{$pedido->username}}</strong></p>
            </div>
            <input type="hidden" name="idProducto" value="{{$pedido->id}}"> 
            <input type="hidden" name="idComprador" value="{{$pedido->idUser}}"> 
            <input type="hidden" name="cantidad" value="{{$pedido->cantidad}}"> 
            <input type="hidden" name="precio" value="{{$pedido->precio}}">
            <input type="hidden" name="compra" value="{{$pedido->idCompra}}"> 

            @if($pedido->confirmado == 1)
              <div class="aprobado">Aprobado</div>
            @else
              <button type="submit" class="btn btn-danger" >Aprobar</button>
            @endif
          </div>
       </form>
      @endforeach
    @else
      <h2>Lo sentimos, No tiene ningun pedido</h2>
    @endif  
    </div>
