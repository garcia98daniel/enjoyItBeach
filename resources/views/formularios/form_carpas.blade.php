<style>
  .container_form{
    display: flex;
    justify-content: center;
  }

  .imagen_playa_container{
    height: 700px;
    width: 80%;
    background-image: url("../imagenes/carpasCONzoom.png");
    background-repeat: no-repeat;
    background-position-x: -200px;
  }

  @media (max-width:1090px) {
  .imagen_playa_container{
    width: 100%;
  }

   .container_form{
     display: inherit;
    } 
  }
</style>


<div class="box box-primary col-xs-12">
                
    <div class="box-header">
      <h3 class="box-title">Reserva</h3>
    </div><!-- /.box-header -->
    <div class="container_form">
      <div class="imagen_playa_container col-xs-12">
        <!-- <img src="./imagenes/carpasCONzoom.png" alt=""> -->
      </div>
      
          
      
      <form  id="f_carpas"  method="POST"  action="reservar" class="form-horizontal form_entrada" >  
        
        <div id="notificacion_resul_fanu"></div>    
      
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">              
        <div class="box-body col-xs-12">
          <div class="form-group col-xs-12">
                <label for="fecha">Fecha*</label>
                <input type="date" class="form-control" id="fecha" name="fecha" placeholder="fecha" required>

          </div>
          <div class="form-group col-xs-12">
                <label for="hora">Hora de inicio</label>
                <select type="text" class="form-control" id="horaInicio" name="horaInicio" >
                  <option value="6">6:00 am</option>
                  <option value="7">7:00 am</option>
                  <option value="8">8:00 am</option>
                  <option value="9">9:00 am</option>
                  <option value="10">10:00 am</option>
                  <option value="11">11:00 am</option>
                  <option value="12">12:00 pm</option>
                  <option value="13">1:00 pm</option>
                  <option value="14">2:00 pm</option>
                  <option value="15">3:00 pm</option>
                  <option value="16">4:00 pm</option>
                  <option value="17">5:00 pm</option>
                  <option value="18">6:00 pm</option>
                </select>
          </div>

          <div class="form-group col-xs-12">
                <label for="Duracion">Duracion de reserva</label>
                <select type="text" class="form-control" id="duracion" name="duracion">
                  <option value="1">1h</option>
                  <option value="2">2h</option>
                  <option value="3">3h</option>
                  <option value="4">4h</option>
                  <option value="5">5h</option>
                  <option value="6">6h</option>
                </select>
          </div>
        
          <div class="form-group col-xs-12">
                <label for="carpa">Bloque</label>
                               
               <select id="bloque" name="bloque" class="form-control">
                  <option value="A">A</option>
                  <option value="B">B</option>
                  <option value="C">C</option>
                  <option value="D">D</option>
                  <option value="E">E</option>
                  <option value="F">F</option>
                  <option value="G">G</option>
                  <option value="H">H</option>
                  <option value="I">I</option>
                  <option value="J">J</option>
              </select>
          </div>

          <div class="form-group col-xs-12">
                <label for="carpa">Nº Carpa</label>
                               
               <select id="carpa" name="carpa" class="form-control">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
              </select>
          </div>
        
        <!-- <div class="form-group col-xs-6">
                              <label for="ciudad">Ciudad</label>
                              <input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="ciudad" >
        </div>
        <div class="form-group col-xs-12">
                              <label for="institucion">Institucion</label>
                              <input type="text" class="form-control" id="institucion" name="institucion" placeholder="institucion" >
        </div>
        <div class="form-group col-xs-12">
                              <label for="ocupacion">Ocupacion</label>
                              <input type="text" class="form-control" id="ocupacion" name="ocupacion" placeholder="ocupacion" >
        </div> -->
        <!-- <div class="form-group col-xs-12">
                              <label for="email">Email*</label>
                              <input type="text" class="form-control" id="email" name="email" placeholder="email" >
        </div>
    
        <div class="form-group col-xs-12">
                              <label for="email">password*</label>
                              <input type="password" class="form-control" id="password" name="password" p required >
        </div> -->
        </div>
        
        <div class="box-footer col-xs-12 ">
            <button type="submit" class="btn btn-primary">Reservar</button>
        </div>
      </form>
    </div>

</div>
