<?php
        $ubicacion = 'upload/';
        $nombreArchivo= $_FILES["file"]['name'];
        if (is_uploaded_file($_FILES["file"]['tmp_name']))
        {       
                move_uploaded_file($_FILES["file"]['tmp_name'], $ubicacion.$nombreArchivo);
                echo 'Se guardo exitosamente';
                exit;
        }else{
                echo 'Oop!.. error al guardar';
        }
?>