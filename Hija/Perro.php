<?php
    require_once("./Padre/Animal.php");
    class Perro extends Animal{
        public function comer(){
            echo "<p>El perro come hueso</p>";
        }
        public function _dormir(){
            $this->dormir();
        }
    }