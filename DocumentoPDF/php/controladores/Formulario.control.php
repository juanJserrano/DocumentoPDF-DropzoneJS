<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Formulario
 *
 * @author DESARROLLO
 */
class FormularioControlador extends Controladores {

    function nuevo() {
        Responder::HTML(Vistas::cargar('formulario', ['Variables' => "Valor"]));
    }

}
