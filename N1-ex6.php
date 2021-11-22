<?php

    function isBitten (){

        $dit = mt_rand(0,1);
        if ($dit == 0){
            $boolea = TRUE;
            var_export($boolea, false);
        }
        else {
            $boolea = FALSE;
            var_export($boolea, false); 
        }

    }

    isBitten();



?>