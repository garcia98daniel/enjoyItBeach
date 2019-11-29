    <style>
      .img-container{
        height: 150px;
        margin: 5px;
        border-radius: 5px;
      }

      .restaurant-container{
        cursor: pointer;
        padding: 0 !important;
      }

      .restaurant-container:hover{
        transform: scale(0.98);
      }
    </style>

    <div class="box-header">
      <h3 class="box-title">Restaurantes</h3>
    </div><!-- /.box-header -->
    @if(count($restaurantes)>0)
      <div id="notificacion_resul_fanu"></div> 
      @foreach ($restaurantes as $restaurante)
    <div class="box box-primary col-xs-12 restaurant-container " onclick="cargarformulario('comidas/'+{{$restaurante->id}});">
          <div class="container-fluid">
            <div class="row">
             <div class="img-container col-xs-4 col-md-2 bg-primary">
               <img src="" alt="resturante_img">
             </div>
             <div class="info-restaurant col-xs-7 col-md-9">
                   <div class="row">
                      <div class="col">
                         <h2>{{$restaurante->nombre}}</h2>
                      </div>
                   </div>
                   <div class="row">
                     <div class="col">
                       <h5><strong>Reputacion</strong></h5> 
                     </div>
                   </div>
                   <div class="row">
                     <div class="col">
                       <h6>Duracion del pedido</h6> 
                     </div>
                   </div>
              </div>
            </div>
          </div>
     </div>
      @endforeach
    @else
      <h2>Lo sentimos, No hay restaurantes disponibles en el momento</h2>
    @endif  

