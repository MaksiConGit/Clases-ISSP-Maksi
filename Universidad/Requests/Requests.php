<?php

    function camposVacios($campos){

        $errores = [];

        foreach ($campos as $campo) {
            if (empty($campo) && !$campo === 0) {
                $errores[] = "- Todos los campos son obligatorios.";
                return $errores;
            }
        }

        return $errores;
    }
    
    function maxMin($campos){

        $errores = [];

        foreach ($campos as $nombre_campo => $valor_campo) {
            if (strlen($valor_campo) <= 1) {
                $errores[] = "- El campo $nombre_campo debe tener mínimo 2 caracteres.";
            }
            elseif (strlen($valor_campo) >= 60 ) {
                $errores[] = "- El campo $nombre_campo debe tener máximo 60 caracteres.";
            }
        }

        return $errores;
    }
    
    function maxMin1($campos){

        $errores = [];

        foreach ($campos as $nombre_campo => $valor_campo) {
            if (strlen($valor_campo) < 1) {
                $errores[] = "- El campo $nombre_campo debe tener mínimo 2 caracteres.";
            }
            elseif (strlen($valor_campo) >= 60 ) {
                $errores[] = "- El campo $nombre_campo debe tener máximo 60 caracteres.";
            }
        }

        return $errores;
    }


    function soloLetras($campos){

        $errores = [];

        foreach ($campos as $nombre_campo => $valor_campo) {

            foreach (str_split($valor_campo) as $letra) {

                if (!ctype_alpha($letra)) {
                    if (!$letra == ' ') {
                    }
                    else{
                        $errores[] = "- El campo $nombre_campo debe estar conformado por letras.";
                        break;
                    }

                }
            }
                
        }

        return $errores;
    
    }

    function soloNumeros($campos){

        $errores = [];

        foreach ($campos as $nombre_campo => $valor_campo) {

            foreach (str_split($valor_campo) as $letra) {

                if (!ctype_digit($letra)) {

                    $errores[] = "- El campo $nombre_campo debe estar conformado por letras.";
                    break;

                }
            }
                
        }

        return $errores;
    
    }

    function fechaAntesDeHoy($campos){

        $errores = [];

        foreach ($campos as $campo) {
            $fecha_nacimiento_formateada = date('Y-m-d', strtotime($campo));
            $fecha_actual = date('Y-m-d');

            if ($fecha_nacimiento_formateada >= $fecha_actual) {
                $errores[] = "- La fecha no puede ser hoy o después de hoy.";
            }

            return $errores;

        }

    }