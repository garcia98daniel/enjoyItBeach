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
  align-items: center;
}

.btn{
  height: 40px;
}
</style>


                
    <div class="box-header">
      <h3 class="box-title">Comidas tipicas</h3>
    </div><!-- /.box-header -->
    @if(count($comidas)>0)
      <div id="notificacion_resul_fanu"></div> 
      @foreach ($comidas as $comida)
    <div class="box box-primary col-xs-12">
      <form  id="f_carpas"  method="POST"  action="reservar" class="form-horizontal form_entrada product_container" >      
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">              
          <div class="form-group col-xs-12">
            <h2>{{$comida->nombre}}</h2>
                <img class="" src="" alt="imagen_del_producto ">
            <div class="row">
              <div class="descripcion text-left col-md-5">
                {{$comida->descripcion}}
              </div>
            </div>
            <div><h3>precio <small>x</small> unidad</h3><h4><strong>COP. </strong>{{$comida->precio}}</h4></div>
          </div>
          
          <div class="box-footer col-xs-12 ">
              <p>Cantidad disponible: {{$comida->cantidad}}</p>
              <div class="compra">
                <div class="quantity">
                  <input type="number" min="1" max="30" step="1" value="1">
                </div>
                <button type="submit" class="btn btn-primary ">Hacer pedido</button>
              </div>
          </div>
      </form>
    </div>
      @endforeach
    @else
      <h2>Lo sentimos, No hay comidas disponibles en el momento</h2>
    @endif  



<script>
  jQuery('<div class="quantity-nav"><div class="quantity-button quantity-up">+</div><div class="quantity-button quantity-down">-</div></div>').insertAfter('.quantity input');
    jQuery('.quantity').each(function() {
      var spinner = jQuery(this),
        input = spinner.find('input[type="number"]'),
        btnUp = spinner.find('.quantity-up'),
        btnDown = spinner.find('.quantity-down'),
        min = input.attr('min'),
        max = input.attr('max');

      btnUp.click(function() {
        var oldValue = parseFloat(input.val());
        if (oldValue >= max) {
          var newVal = oldValue;
        } else {
          var newVal = oldValue + 1;
        }
        spinner.find("input").val(newVal);
        spinner.find("input").trigger("change");
      });

      btnDown.click(function() {
        var oldValue = parseFloat(input.val());
        if (oldValue <= min) {
          var newVal = oldValue;
        } else {
          var newVal = oldValue - 1;
        }
        spinner.find("input").val(newVal);
        spinner.find("input").trigger("change");
      });

    });
</script>