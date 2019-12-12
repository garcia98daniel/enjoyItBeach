function cargarformulario(arg){
//funcion que carga todos los formularios del sistema

        if(arg==1){ 
            var url = "carpas";
        }else if (arg==2){
            var url = "comidas";
        }else if(arg==3){
            var url = "productos";
        }else if(arg==4){
            var url = "misPedidos";
        }else{
            var url = arg;
        }

        //console.log(url);


        $("#contenido_principal").html($("#cargador_empresa").html());
           
            $.get(url,function(resul){
                $("#contenido_principal").html(resul);

            })


}

function cargarformularioVendedor(arg){
//funcion que carga todos los formularios del sistema

        if(arg==1){ 
            var url = "productosVendedor";
        }else if (arg==2){
            var url = "pedidos";
        }


        $("#contenido_principal").html($("#cargador_empresa").html());
           
            $.get(url,function(resul){
                $("#contenido_principal").html(resul);

            })


}


 $(document).on("submit",".form_entrada",function(e){ //atrapa todo formulario que tenga el nombre de .form_entrada

//funcion para atrapar los formularios y enviar los datos

       e.preventDefault();
        
        $('html, body').animate({scrollTop: '0px'}, 200);
        
        var formu=$(this);
        var quien=$(this).attr("id");
        
        if(quien=="f_carpas"){ // reserva carpas al usuario
            var varurl="reservar"; var divresul="notificacion_resul_fanu"; 

            //me da una direccion
        $("#"+divresul+"").html($("#cargador_empresa").html());

              $.ajax({

                    type: "POST",
                    url : varurl,
                    datatype:'json',
                    data : formu.serialize(),
                    success : function(resul){

                        $("#"+divresul+"").html(resul);
                        $('#'+quien+'').trigger("reset");

                    }

                });
                // y los envia por el metodo post
        }else if(quien=="f_pedidos"){ //agrega productos del vendedor
            var varurl="hacerPedido"; var divresul="notificacion_resul_fanu";

        $("#"+divresul+"").html($("#cargador_empresa").html());

              $.ajax({

                    type: "GET",
                    url : varurl,
                    datatype:'json',
                    data : formu.serialize(),
                    success : function(resul){

                        $("#"+divresul+"").html(resul);
                        $('#'+quien+'').trigger("reset");
                    }
                        
                });
                
        }else if(quien=="f_productosVendedor"){ //agrega productos del vendedor
            var varurl="addProduct"; var divresul="notificacion_resul_fanu";

        $("#"+divresul+"").html($("#cargador_empresa").html());

              $.ajax({

                    type: "POST",
                    url : varurl,
                    datatype:'json',
                    data : formu.serialize(),
                    success : function(resul){

                        $("#"+divresul+"").html(resul);
                        $('#'+quien+'').trigger("reset");
                        cargarformularioVendedor(1);
                    }
                        
                });
                
        }else if(quien=="cartas_productos"){ //eliminar producto No lo hace
            var value = $(this).attr("value");
             // console.log(value);
            var varurl=`deleteProduct/${value}`; var divresul="notificacion_resul_fanu";


        $("#"+divresul+"").html($("#cargador_empresa").html());

              $.ajax({

                    type: "DELETE",
                    url : varurl,
                    datatype:'json',
                    data : formu.serialize(),
                    success : function(resul){

                        $("#"+divresul+"").html(resul);
                        $('#'+quien+'').trigger("reset");
                        cargarformularioVendedor(1)
                    }
                        
                });
        }else if(quien=="pedidoConfirmado"){ //aprueba la compra
            var varurl="confirmarPedido"; var divresul="notificacion_resul_fanu";
            
        $("#"+divresul+"").html($("#cargador_empresa").html());

              $.ajax({

                    type: "GET",
                    url : varurl,
                    datatype:'json',
                    data : formu.serialize(),
                    success : function(resul){
                        
                        $("#"+divresul+"").html(resul);
                        $('#'+quien+'').trigger("reset");
                        
                    cargarformularioVendedor(2)
                    }
                });
        }
})

$(document).on("click",".pagination li a",function(e){

 e.preventDefault();

 var url =$(this).attr("href");

 $("#contenido_principal").html($("#cargador_empresa").html());

    
    $.get(url,function(resul){

        $("#contenido_principal").html(resul); 
   })



  })
  