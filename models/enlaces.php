<?php 

class EnlacesModels{
    public function enlacesModel($enlaces){
       
       
        if(  $enlaces == "inicio" ||
       
             $enlaces == "menu" 

            
             
             
             
             
             ){

             $module =   "views/modules/".$enlaces.".php";

        }
        else if($enlaces == "index"){
            $module =   "views/modules/inicio.php";
        }
        // else if($enlaces == "login"){
        //     $module =   "/login";
        // }
        // else if($enlaces == "menu/alimentos"){
        //     $module =   "views/modules/menu/".$enlaces.".php";
        // }
       
        else if( $enlaces == "alimentos"||
        $enlaces == "entradas" ||
        $enlaces == "tacos" ||
        $enlaces == "refrescos" ||
        $enlaces == "del-mar-a-tu-mesa" ||
        $enlaces == "pastas" ||
        $enlaces == "sopas" ||
        $enlaces == "platosfuertes" ||
        $enlaces == "paquetes" ||
        $enlaces == "saludable" ||
        $enlaces == "destilados" ||
        $enlaces == "martinis" ||
        $enlaces == "cocteleria" ||
        $enlaces == "shots" ||
      
       
       
        $enlaces == "ensaladas" ||
      
        $enlaces == "cervezas" ||
     
        $enlaces == "postres" ||
        $enlaces == "infantil" ||
        $enlaces == "bebidas" ){
           

     
            $module =   "views/modules/menu/".$enlaces.".php";
        }
       
        else{
            $module =   "views/modules/inicio.php";

        }
        return $module;
    }
}