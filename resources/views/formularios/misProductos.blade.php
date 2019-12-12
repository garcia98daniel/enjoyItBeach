<style>


.quantity {
  position: relative;
}

input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button
{
  -webkit-appearance: none;
  margin: 0;
}

input[type=number]
{
  -moz-appearance: textfield;
}

.quantity input {
  width: 70px;
  height: 65px;
  line-height: 1.65;
  float: left;
  display: block;
  padding: 0;
  margin: 0;
  padding-left: 10px;
  border: 1px solid #eee;
  font-size: 20px;
}

.quantity input:focus {
  outline: 0;
}

.quantity-nav {
  float: left;
  position: relative;
  height: 65px;
}

.quantity-button {
  position: relative;
  cursor: pointer;
  border-left: 1px solid #eee;
  width: 30px;
  text-align: center;
  color: #333;
  font-size: 25px;
  font-family: "Trebuchet MS", Helvetica, sans-serif !important;
  line-height: 1.7;
  -webkit-transform: translateX(-100%);
  transform: translateX(-100%);
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  -o-user-select: none;
  user-select: none;
  margin-bottom: 5px;
}

.quantity-button:hover{
  background: #e4e4e4;
}
.quantity-button.quantity-up {
  color: #20b83a;
  position: absolute;
  height: 50%;
  top: 0;
  border-bottom: 1px solid #eee;
}

.quantity-button.quantity-down {
   color: #c31717;
  position: absolute;
  bottom: -1px;
  height: 50%;
}

.product_container{
  margin-bottom: 50px;
  border-radius: 10px;
}

.compra{
  display: flex;
  justify-content: space-between;
}
.btn{
  height: 40px;
}
</style>


                
    <div class="box-header">
      <h3 class="box-title">Productos y servicios</h3>
    </div><!-- /.box-header -->
          <div class="col-xs-12" style="margin-top: 20px; margin-bottom: 10px;  ">

            <form  id="f_productosVendedor"  method="POST"  action="" class="form-horizontal form_entrada product_container " >      
              <input  type="hidden" name="_token" value="<?php echo csrf_token(); ?>">              
                <div class="form-group col-xs-12">
                  <div class="row aling-items-center"> 
                    <h4 class="col-xs-4">Nombre del producto</h4>
                    <input required="" autocomplete="off" class="col-xs-8" style="margin-top: 8px;" type="text" name="nombre">
                  </div>
                  <div class="row aling-items-center"> 
                    <h4 class="col-xs-4">Descripcion</h4>
                    <input required="" autocomplete="off" class="col-xs-8" style="margin-top: 8px;" type="text" name="descripcion">
                  </div>
                  <div class="row aling-items-center"> 
                    <h4 class="col-xs-4">Precio x unidad</h4>
                    <input required="" autocomplete="off" class="col-xs-8" style="margin-top: 8px;" type="number" name="precio">
                  </div>
                  <div class="row aling-items-center"> 
                    <h4 class="col-xs-4">Cantidad disponible</h4>
                    <input required="" autocomplete="off" class="col-xs-8" style="margin-top: 8px;" type="number" name="cantidad">
                  </div>

                  <div class="custom-control custom-radio row">
                  <h4 class="col-xs-2">Tipo de producto</h4>
                    <div class="col-xs-2" style="padding-top: 10px;">
                        <input type="radio" id="customRadio1" name="categoria" class="custom-control-input " value="1">
                        <label class="custom-control-label" for="customRadio1">Comestible</label>
                    </div>
                    <div style="padding-top: 10px;">
                        <input type="radio" id="customRadio2" name="categoria" class="custom-control-input " value="2">
                        <label class="custom-control-label" for="customRadio2">No comestible</label>
                    </div>
                  </div>
                </div>
                <div class=" col-xs-12 ">
                     <button type="submit" class="btn btn-success center-block" style="width: 50%; border-radius: 6px; margin-bottom: 10px;">Agregar</button>
            </form>
          </div>
     
    @if(count($misProductos)>0)
      <div id="notificacion_resul_fanu"></div> 

      @foreach ($misProductos as $miProducto)
    <div class="box box-primary col-xs-12">

      <form value="{{$miProducto->id}}" id="cartas_productos"  method="POST" class="form-horizontal form_entrada product_container" >   

        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">              
          <div class="form-group col-xs-12">
            <h2>{{$miProducto->nombre}}</h2>
                <img class="" src="" alt="imagen_del_producto ">
            <div class="row">
              <div class="descripcion text-left col-md-5">
                {{$miProducto->descripcion}}
              </div>
            </div>
            <div><h3>precio <small>x</small> unidad</h3><h4><strong>COP. </strong>{{$miProducto->precio}}</h4></div>
          </div>
          
          <div class="box-footer col-xs-12 ">
              <h4>Cantidad disponible: <strong>{{$miProducto->cantidad}}</strong></h4>
              <div class="compra">
                <div></div>
                <div>
                  <button type="submit" class="btn btn-danger" >Eliminar</button>
                </div>
              </div>
          </div>
      </form>
    </div>
      @endforeach
    @else
      <h2>No tienes productos agrega uno.</h2>

    @endif  
