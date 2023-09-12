$(document).ready(function(){
    var carta1 = ""; var carta2="";
    var par = false;
    var total_pares = 0;
    $('img').click(function (e){
        var nombre_imagen = $(this).attr('data-id')
        var estado = $(this).attr('data-estado')

        if(estado == "0"){

            if(carta1 != "" && carta2 != ""){
                console.log("Las cartas son diferentes")
                if(carta1.attr('data-id') != carta2.attr('data-id')){
                    console.log("Tapa cartas diferentes")
                    carta1.attr('src', 'imagenes/imagen.jpg')
                    carta2.attr('src', 'imagenes/imagen.jpg')
                }else{
                    console.log("Las cartas son iguales")
                    carta1.attr('data-estado', '1')
                    carta2.attr('data-estado', '1')
                }
            }
            
            console.log("Estado de la carta: " + estado)

            if(carta1 == ""){
                carta1 = $(this);
                carta1.attr('src', 'imagenes/' + nombre_imagen)
                console.log("Se asigno carta #1");
            }else{
                carta2 = $(this);
                carta2.attr('src', 'imagenes/' + nombre_imagen)
                console.log("Se asigno carta #2");
            }
        }

        
    });
});