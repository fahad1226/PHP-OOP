<?php

    class Framework {
        public function Laravel(){
            echo "<h1>Laravel is a php framework</h1>";
            echo "<br>";
            return $this;
        }

        public function CakePHP(){
            echo "cakePHP is a php framewrok";
            echo "<br>";
            return $this;
        }

        public function Codeigniter(){
            echo "Codeigniter is a php framework";
            echo "<br>";
            return $this;
        }

        public function Wordpress(){
            echo "<h1>Wordpress is a cms in php</h1>";
            echo "<br>";
            return $this;
        }
    }



    $frmk = new Framework();

    $frmk -> Laravel()->Codeigniter()->CakePHP()->Wordpress();




?>