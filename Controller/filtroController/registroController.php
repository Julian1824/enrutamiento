<?php
        if(!empty($_POST["btnRegistroRespuestas"])){
            $clave=$_POST["clave"];
            if($clave === "TG*2021e"){
        if(!empty($_POST["Inquietud"]) and !empty($_POST["pregunta_filtro"]) and 
            !empty($_POST["respue_filtro"]) and !empty($_POST["programa_transferir"])){
    
        
            $Inquietud = $_POST["Inquietud"];
            $pregunta_filtro = $_POST["pregunta_filtro"];
            $respue_filtro = $_POST["respue_filtro"];
            $programa_transferir = $_POST["programa_transferir"];
      
        $sql = $conexion->query("INSERT INTO matriz_respuestas (Inquietud,pregunta_filtro,
        respue_filtro,programa_transferir)
        VALUES('$Inquietud','$pregunta_filtro','$respue_filtro','$programa_transferir')");

        }if($sql==1){
            header("location:../../editor.php");        
    }else{
        echo '<div  class="alert alert-danger alert-dismissible fade show" role="alert">
            Algun campo esta vacio
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'; 
    }
    }else{
    echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Clave incorrecta
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'; 
    }
}
?>