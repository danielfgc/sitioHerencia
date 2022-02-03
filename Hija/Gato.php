<?php
require_once("./Padre/Animal.php");
    class Gato extends Animal{
        public function _dormir(){
            $this->dormir();
        }
    }