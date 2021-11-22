<?php

    function calcul_nota($nota){
        define("PDIVISIO", "Primera divisió");
        define("SDIVISIO", "Segona divisió");
        define("TDIVISO", "Tercera divisió");
        define("REPROVAT", "Suspès");
        define("NPDIVISIO", 60);
        define("NSDIVISIO_MAX", 59);
        define("NSDIVISIO_MIN", 45);
        define("NTDIVISIO_MIN", 33);
        define("NTDIVISIO_MAX", 44);
        define("NSUSPES", 33);
        if(!is_numeric($nota)){
            echo "Error. No és un valor admès";

        }
            else{
        
            if ($nota>=NPDIVISIO){
                $grau = PDIVISIO;
                echo $grau;
            }
            elseif ($nota >= NSDIVISIO_MIN && $nota <= NSDIVISIO_MAX) {
                $grau = SDIVISIO;
                echo $grau;
            }
            elseif ($nota >= NTDIVISIO_MIN && $nota <= NTDIVISIO_MAX){
                $grau = TDIVISO;
                echo $grau;
            }
            else if ($nota < NSUSPES){
                $grau = REPROVAT;
                echo $grau;

            }
        }
    }

    calcul_nota(60);

?>