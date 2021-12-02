<?php
    class casa(){^
    }
    class consumo {
        public $soma;
        
        public function getSoma(){
            return $this->soma;
        }

        public function calculo(){
            $final_res = 0;
            $con = array(2,2,2,2,2,2,2,2,2,2,2,2); // valores do consumo mensal q vai pegar na tabela
            for ($cont=0; $cont < 12; $cont++){
                $final_res = $final_res + $con[$cont];
            }
            $som = $final_res/12;
            $this->soma = $som;
        }

        public function mostrar(){
            echo "<t1>".$this->getSoma()."</t1>";
        }
    }
?>
