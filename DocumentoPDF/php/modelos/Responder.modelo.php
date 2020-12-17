<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Responder
 *
 * @author DESARROLLO
 */
class Responder {

    //put your code here

    static function JSON($json) {
        header('Content-Type: application/json');
        echo $json;
    }
        
    static function HTML($html) {
        header('Content-Type: text/html');
        echo $html;
    }
    static function XML($xml) {
        header('Content-Type: text/xml');
        echo $html;
    }

}
