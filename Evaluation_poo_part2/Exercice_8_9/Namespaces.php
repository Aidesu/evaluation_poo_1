<?php

namespace Firme\Client{
    class Personne {
        private $coord;
        private $code;

        public function __construct($coord, $code){
            $this->coord = $coord;
            $this->code = $code;
        }

        function __destruct(){
            echo $this->getClient();
            echo "\n";
        }

        public function setCoord($coord){
            $this->coord = $coord;
        }

        public function getCoord() {
            return $this->coord;
        }

        public function setCode($code){
            $this->code = $code;
        }

        public function getCode() {
            return $this->code;
        }

        public function getClient() {
            return "Status : Client\n"."Coordinates : " . $this->coord . "\nCode : " . $this->code . "\n"; 
        }
    }
}

namespace Firme\Commercial{
    class Personne {
        private $coord;
        private $code;

        public function __construct($coord, $code){
            $this->coord = $coord;
            $this->code = $code;
        }

        function __destruct(){
            echo $this->getCommercial();
            echo "\n";
        }

        public function setCoord($coord){
            $this->coord = $coord;
        }

        public function getCoord() {
            return $this->coord;
        }

        public function setCode($code){
            $this->code = $code;
        }

        public function getCode() {
            return $this->code;
        }

        public function getCommercial() {
            return "Status : Commercial\n"."Coordinates : " . $this->coord . "\nCode : " . $this->code . "\n"; 
        }
    }
}